<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_role extends CI_Model {

	public function read($id = '',$postData=null){

		$response = [];
	    $draw = $postData['draw'];
	    $start = (isset($postData['start']) ? $postData['start'] : '0');
	    $rowperpage = (isset($postData['length'])? $postData['length'] : '10'); // Rows display per page
	    $columnIndex = $postData['order'][0]['column']; // Column index
	    $columnName = $postData['columns'][$columnIndex]['data']; // Column name
	    $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
	    $searchValue = $postData['search']['value']; // Search value
	    $where_id = (!empty($id) ? "and a.c_role = '{$id}' " : '');

	    ## Search 
	    $searchQuery = "";
	    if($searchValue != ''){
	        $searchQuery = "AND (b.n_level like '%".$searchValue."%' or a.n_role like'%".$searchValue."%' ) ";
	    }

	    $orderBy = 'order by d_entry desc';
		if($columnName != '' && $columnSortOrder != '')
			$orderBy = 'order by '.$columnName.' '.$columnSortOrder;
		$limit = 'limit '.$rowperpage.' offset '.$start;

	    $records = $this->db->query("WITH x AS (SELECT a.*, b.n_level FROM svc.t_m_role a left join svc.t_m_level b on a.i_level=b.i_level where a.c_role is not null $where_id $searchQuery $orderBy $limit),
		y AS (SELECT COUNT(*) AS record_total FROM svc.t_m_role),
		z AS (SELECT COUNT(*) AS record_filtered FROM svc.t_m_role a left join svc.t_m_level b on a.i_level=b.i_level where a.c_role is not null $where_id $searchQuery)
		SELECT x.*, y.*, z.*
		FROM x, y, z")->result();

	    ## Response
	    $response = array(
	        "draw" => $postData['draw'],
	        "iTotalRecords" => (isset($records[0]->record_total) ? $records[0]->record_total : 0),
	        "iTotalDisplayRecords" => (isset($records[0]->record_filtered) ? $records[0]->record_filtered : 0),
	        "aaData" => $records
	    );

	    return $response; 
	}

	public function read_detail($id=''){

		$res = [];

		$this->db->select('a.*, b.*, c.n_desc, c.i_level, c.n_role');
		$this->db->join('svc.t_m_menu b','a.c_menu=b.c_menu', 'left');
		$this->db->join('svc.t_m_role c','a.c_role=c.c_role', 'left');
		if(!empty($id)) $this->db->where('a.c_role', $id);
		$get = $this->db->get('svc.t_m_access a');
		$res = $get->num_rows() > 0 ? $get->result_array() : array();

		return $res;

	}

	public function get_list_level(){

		$res = [];

		$this->db->select('*');
		$this->db->where("i_level >= '{$this->session->userdata('level')}'");
		$get = $this->db->get('svc.t_m_level');
		$res = $get->num_rows() > 0 ? $get->result_array() : array();

		return $res;
	}

	public function get_list_menu(){

		$res = [];

		$this->db->select('*');
		$this->db->where('b_delete','f');
		$this->db->order_by('c_menu','asc');
		$get = $this->db->get('svc.t_m_menu');
		$res = $get->num_rows() > 0 ? $get->result_array() : array();

		return $res;
	}


	public function insert($data, $detail){

		$this->db->trans_begin();

		$this->db->insert('svc.t_m_role', $data);

		$ins_menu = [];

		for($i=0; $i<count($detail); $i++){

			$get_menu = $this->db->query("SELECT * from svc.t_m_menu where c_menu='".$detail[$i]."' ");
			$res_menu = $get_menu->row();

			$ins_menu[] = array(
				'c_module'		=> $res_menu->c_module,
				'c_menu'		=> $res_menu->c_menu,
				'c_role'		=> $data['c_role']
			);
		}

		$this->db->insert_batch('svc.t_m_access',$ins_menu);

		$this->db->trans_complete();

		if($this->db->trans_status() === TRUE){
			return 'success';
		}else{
			$this->db->trans_rollback();
			return 'false';
		}

	}

	public function update($data, $id_data, $detail){

		$this->db->trans_begin();

		$this->db->where('c_role', $id_data);
		$this->db->update('svc.t_m_role', $data);

		$this->db->where('c_role', $id_data);
		$this->db->delete('svc.t_m_access');


		$ins_menu = [];

		for($i=0; $i<count($detail); $i++){

			$get_menu = $this->db->query("SELECT * from svc.t_m_menu where c_menu='".$detail[$i]."' ");
			$res_menu = $get_menu->row();

			$ins_menu[] = array(
				'c_module'		=> $res_menu->c_module,
				'c_menu'		=> $res_menu->c_menu,
				'c_role'		=> $id_data
			);
		}

		$this->db->insert_batch('svc.t_m_access',$ins_menu);

		$this->db->trans_complete();

		if($this->db->trans_status() === TRUE){
			return 'success';
		}else{
			$this->db->trans_rollback();
			return 'false';
		}

	}

	public function delete($data, $id_data){

		$this->db->trans_begin();

		$del = array(
			'd_delete'		=> 'now',
			'e_delete'		=> $this->session->userdata('username')
		);
		$this->db->where('c_role', $id_data);
		$this->db->where('d_delete is null');
		$this->db->update('svc.t_m_role', $del);

		$del = array(
			'd_delete'		=> 'now',
			'e_delete'		=> $this->session->userdata('username')
		);
		$this->db->where('c_role', $id_data);
		$this->db->where('d_delete is null');
		$this->db->update('svc.t_m_role_detail', $del);

		$this->db->trans_complete();
		if($this->db->trans_status === TRUE){
			return 'success';
		}else{
			$this->db->trans_rollback();
			return 'false';
		}
	}

	public function get_c_role(){
		$_get = $this->db->query("SELECT f_generate_no('CRO'::character varying) as c_role");
		$_res = $_get->row();

		return $_res;
	}

}
