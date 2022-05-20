<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model
{

	public function read($id = '', $postData = null)
	{

		$response = [];
		$draw = $postData['draw'];
		$start = (isset($postData['start']) ? $postData['start'] : '0');
		$rowperpage = (isset($postData['length']) ? $postData['length'] : '10'); // Rows display per page
		$columnIndex = $postData['order'][0]['column']; // Column index
		$columnName = $postData['columns'][$columnIndex]['data']; // Column name
		$columnSortOrder = $postData['order'][0]['dir']; // asc or desc
		$searchValue = $postData['search']['value']; // Search value
		$where_id = '';
		$where_id .= (!empty($id) ? " and a.n_user = '{$id}' " : '');
		$where_id .= (!empty($this->session->userdata('company_id')) ? " and a.company_id = '{$this->session->userdata('company_id')}' " : '');
		$where_id .= (!empty($this->session->userdata('id_lokasi')) ? " and a.id_lokasi = '{$this->session->userdata('id_lokasi')}' " : '');

		## Search 
		$searchQuery = "";
		if ($searchValue != '') {
			$searchQuery = " AND (b.n_role like '%" . $searchValue . "%' or c.company_name like'%" . $searchValue . "%' or d.nama_lokasi like'%" . $searchValue . "%' or a.n_user like'%" . $searchValue . "%' or a.n_name like'%" . $searchValue . "%' or a.n_mail like'%" . $searchValue . "%' or a.n_phone like'%" . $searchValue . "%' ) ";
		}

		$orderBy = 'order by a.d_entry desc';
		if ($columnName != '' && $columnSortOrder != '')
			$orderBy = 'order by ' . $columnName . ' ' . $columnSortOrder;
		$limit = 'limit ' . $rowperpage . ' offset ' . $start;

		$records = $this->db->query("WITH x AS (SELECT a.*, b.n_role, c.company_name, d.nama_lokasi FROM svc.t_m_user a LEFT JOIN svc.t_m_role b ON a.c_role=b.c_role LEFT JOIN mst.t_company c ON a.company_id=c.company_id LEFT JOIN mst.t_lokasi d ON a.id_lokasi=d.id_lokasi WHERE a.b_delete = 'f' AND b.i_level >= '1' $where_id $searchQuery $orderBy $limit),
		y AS (SELECT COUNT(*) AS record_total FROM svc.t_m_user),
		z AS (SELECT COUNT(*) AS record_filtered FROM svc.t_m_user a LEFT JOIN svc.t_m_role b ON a.c_role=b.c_role LEFT JOIN mst.t_company c ON a.company_id=c.company_id LEFT JOIN mst.t_lokasi d ON a.id_lokasi=d.id_lokasi WHERE a.b_delete = 'f' AND b.i_level >= '1' $where_id $searchQuery)
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

	public function get_list_role()
	{

		$res = [];

		$this->db->select('*');
		$this->db->where("i_level >= '{$this->session->userdata('level')}'");
		$get = $this->db->get('svc.t_m_role');
		$res = $get->num_rows() > 0 ? $get->result_array() : array();

		return $res;
	}

	public function get_list_company()
	{

		$res = [];

		$this->db->select('*');
		if (!empty($this->session->userdata('company_id'))) $this->db->where("company_id", $this->session->userdata('company_id'));
        $where = "deleted_at is NULL";
        $this->db->where($where);
		$get = $this->db->get('mst.t_company ');
		$res = $get->num_rows() > 0 ? $get->result_array() : array();

		return $res;
	}

	public function get_list_lokasi()
	{

		$res = [];

		$this->db->select('*');
		if (!empty($this->session->userdata('id_lokasi'))) $this->db->where("id_lokasi", $this->session->userdata('id_lokasi'));
		$get = $this->db->get('mst.t_lokasi');
		$res = $get->num_rows() > 0 ? $get->result_array() : array();

		return $res;
	}


	public function insert($data)
	{

		$this->db->trans_begin();

		$this->db->insert('svc.t_m_user', $data);

		$this->db->trans_complete();

		if ($this->db->trans_status() === TRUE) {
			return 'success';
		} else {
			$this->db->trans_rollback();
			return 'false';
		}
	}

	public function update($data, $id_data)
	{

		$this->db->trans_begin();

		$this->db->where('n_user', $id_data);
		$this->db->update('svc.t_m_user', $data);

		$this->db->trans_complete();

		if ($this->db->trans_status() === TRUE) {
			return 'success';
		} else {
			$this->db->trans_rollback();
			return 'false';
		}
	}
}
