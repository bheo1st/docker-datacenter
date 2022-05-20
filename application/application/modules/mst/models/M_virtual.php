<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_virtual extends CI_Model
{

    public function read_virtual($id = '', $postData = NULL)
    {

        $response = [];
        $where_id = (!empty($this->session->userdata('company_id')) ? " and f.company_id = '{$this->session->userdata('company_id')}' " : '');

        if ($id) {
            $records = $this->db->query("WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL  AND a.server_id = $id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual   WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual  WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z")->result();
        } else {
            $records = $this->db->query("WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL $where_id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL ),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z")->result();
        }



        ## Response
        $response = array(
            "aaData" => $records
        );

        return $response;
    }

    public function vm_show($id = '', $postData = null)
    {

        $response = [];
        $draw = $postData['draw'];
        $start = (isset($postData['start']) ? $postData['start'] : '0');
        $rowperpage = (isset($postData['length']) ? $postData['length'] : '10'); // Rows display per page
        $columnIndex = $postData['order'][0]['column']; // Column index
        $columnName = $postData['columns'][$columnIndex]['data']; // Column name
        $columnSortOrder = $postData['order'][0]['dir']; // asc or desc
        $searchValue = $postData['search']['value']; // Search value
        $where_id = (!empty($this->session->userdata('company_id')) ? " and f.company_id = '{$this->session->userdata('company_id')}' " : '');

        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " AND (a.virtual_name like '%" . $searchValue . "%' or a.virtual_ip like '%" . $searchValue . "%') ";
        }

        $orderBy = 'order by a.created_at desc';
        if ($columnName != '' && $columnSortOrder != '')
            $orderBy = 'order by ' . $columnName . ' ' . $columnSortOrder;
        $limit = 'limit ' . $rowperpage . ' offset ' . $start;
        if ($id) {
            $records = $this->db->query("WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL AND a.virtual_id=$id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual   WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual  WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z")->result();
        } else {
            $records = $this->db->query("WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL $where_id $searchQuery $orderBy $limit ),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_virtual WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_virtual WHERE deleted_at is NULL)
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



    public function get_list_server()
    {

        $res = [];

        $this->db->select('*');
        if (!empty($this->session->userdata('server_id'))) $this->db->where("server_id", $this->session->userdata('server_id'));
        $where = "deleted_at is NULL";
        $this->db->where($where);
        $get = $this->db->get('mst.t_server ');
        $res = $get->num_rows() > 0 ? $get->result_array() : array();
        return $res;
    }


    public function insert($data)
    {

        $this->db->trans_begin();

        $this->db->insert('mst.t_virtual', $data);

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

        $this->db->where('virtual_id', $id_data);
        $this->db->update('mst.t_virtual', $data);

        $this->db->trans_complete();

        if ($this->db->trans_status() === TRUE) {
            return 'success';
        } else {
            $this->db->trans_rollback();
            return 'false';
        }
    }
}
