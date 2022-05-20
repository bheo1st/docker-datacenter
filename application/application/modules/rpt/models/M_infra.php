<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_infra extends CI_Model
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
        $where_id = (!empty($this->session->userdata('company_id')) ? " and d.company_id = '{$this->session->userdata('company_id')}' " : '');
        ## Search 
        $searchQuery = "";
        if ($searchValue != '') {
            $searchQuery = " AND (a.rack_name like'%" . $searchValue . "%' or b.room_name like'%" . $searchValue . "%' or c.gedung_name like'%" . $searchValue . "%' ) ";
        }

        $orderBy = 'order by a.created_at desc';
        if ($columnName != '' && $columnSortOrder != '')
            $orderBy = 'order by ' . $columnName . ' ' . $columnSortOrder;
        $limit = 'limit ' . $rowperpage . ' offset ' . $start;
        if ($id) {
            # code...
            $records = $this->db->query("WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL AND a.rack_id=$id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
            SELECT x.*, y.*, z.*
            FROM x, y, z")->result();
        } else {
            # code...
            $records = $this->db->query("WITH x AS (SELECT a.* , b.room_name , c.gedung_name , d.company_name FROM mst.t_rack a LEFT JOIN mst.t_room b  ON a.room_id=b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company d ON c.company_id=d.company_id WHERE a.deleted_at is NULL $where_id $searchQuery $orderBy $limit),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
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

    public function readExcel($postData)
    {

        $response = [];
        $out = [];

        ## Search 
        $searchQuery = "";

        if (isset($postData['lokasi']) && $postData['lokasi'] != '') {
            $searchQuery .= " AND ( a.id_lokasi = '" . $postData['lokasi'] . "' ) ";
        }

        if (isset($postData['date']) && $postData['date'] != '') {
            $d_trx         = str_replace("/", "-", explode(" - ", $postData['date']));

            $d_start     = $d_trx[0];
            $d_stop     = $d_trx[1];

            $searchQuery .= " AND ( DATE(a.start_date) >= '$d_start' ) ";
            $searchQuery .= " AND ( DATE(a.start_date) <= '$d_stop' ) ";
        }

        $orderBy = 'order by a.id_sync_shift desc';
        $records['data'] = $this->db->query("SELECT a.* FROM log.t_log_shift a where a.id_lokasi is not null $searchQuery $orderBy")->result_array();

        return $records;
    }
}
