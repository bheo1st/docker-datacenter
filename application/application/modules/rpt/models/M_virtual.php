<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_virtual extends CI_Model
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

        $records = $this->db->query("WITH x AS (SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL ),
		y AS (SELECT COUNT(*) AS record_total FROM mst.t_rack WHERE deleted_at is NULL),
		z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_rack WHERE deleted_at is NULL )
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

    public function readExcel($postData)
    {

        $response = [];
        $out = [];

        $records['data'] = $this->db->query("SELECT a.*, b.server_name,c.rack_name,d.room_name,e.gedung_name,f.company_name FROM mst.t_virtual a LEFT JOIN mst.t_server b ON a.server_id = b.server_id LEFT JOIN mst.t_rack c ON b.rack_id = c.rack_id LEFT JOIN mst.t_room d ON c.room_id=d.room_id LEFT JOIN mst.t_gedung e ON d.gedung_id=e.gedung_id LEFT JOIN mst.t_company f ON e.company_id=f.company_id WHERE a.deleted_at is NULL")->result_array();

        return $records;
    }
}
