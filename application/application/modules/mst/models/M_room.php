<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_room extends CI_Model
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
		$where_id = (!empty($this->session->userdata('company_id')) ? " and c.company_id = '{$this->session->userdata('company_id')}' " : '');
        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " AND (b.gedung_name like'%" . $searchValue . "%' or a.room_name like'%" . $searchValue . "%' or c.company_name like'%" . $searchValue . "%' ) ";
        }

        $orderBy = 'order by a.created_at desc';
        if ($columnName != '' && $columnSortOrder != '')
            $orderBy = 'order by ' . $columnName . ' ' . $columnSortOrder;
        $limit = 'limit ' . $rowperpage . ' offset ' . $start;
        if ($id) {
            # code...
            $records = $this->db->query("WITH x AS (SELECT a.*, b.gedung_name, c.company_name FROM mst.t_room a LEFT JOIN mst.t_gedung b ON a.gedung_id=b.gedung_id LEFT JOIN mst.t_company c ON b.company_id=c.company_id WHERE a.deleted_at is NULL AND a.room_id = $id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z")->result();
            
        } else {
            # code...
            $records = $this->db->query("WITH x AS (SELECT a.*, b.gedung_name, c.company_name FROM mst.t_room a LEFT JOIN mst.t_gedung b ON a.gedung_id=b.gedung_id LEFT JOIN mst.t_company c ON b.company_id=c.company_id WHERE a.deleted_at is NULL $where_id $searchQuery $orderBy $limit),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_room WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_room WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z")->result();
            
        }
        
        

        ## Response
        $response = array(
            "draw" => $postData['draw'],
            "iTotalRecords" => (isset($records[0]->record_total) ? $records[0]->record_total : 0),
            "iTotalDisplayRecords" => (isset($records[0]->record_filtered) ? $records[0]->record_filtered : 0),
            "aaData" => $records
        );

        return $response;
    }

    public function get_list_gedung()
	{

		$res = [];

		$this->db->select('*');
		if (!empty($this->session->userdata('gedung_id'))) $this->db->where("gedung_id", $this->session->userdata('gedung_id'));
        $where = "deleted_at is NULL";
        $this->db->where($where);
		$get = $this->db->get('mst.t_gedung ');
		$res = $get->num_rows() > 0 ? $get->result_array() : array();
		return $res;
	}


    public function insert($data)
    {

        $this->db->trans_begin();

        $this->db->insert('mst.t_room', $data);

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

        $this->db->where('room_id', $id_data);
        $this->db->update('mst.t_room', $data);


        $this->db->trans_complete();

        if ($this->db->trans_status() === TRUE) {
            return 'success';
        } else {
            $this->db->trans_rollback();
            return 'false';
        }
    }
}
