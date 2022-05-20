<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_company extends CI_Model
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

        ## Search 
         $searchQuery = "";
         if ($searchValue != '') {
             $searchQuery = " AND (a.company_name like '%" . $searchValue . "%' or a.company_name like'%" . $searchValue . "%') ";
         }
        
        $orderBy = 'order by a.d_entry desc';
        if ($columnName != '' && $columnSortOrder != '')
            $orderBy = 'order by ' . $columnName . ' ' . $columnSortOrder;
        $limit = 'limit ' . $rowperpage . ' offset ' . $start;
        if($id) {
            $records = $this->db->query("WITH x AS (SELECT a.* FROM mst.t_company a WHERE deleted_at is NULL AND a.company_id = $id),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_company WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_company WHERE deleted_at is NULL)
            SELECT x.*, y.*, z.*
            FROM x, y, z")->result();   
        }else
        {
            $records = $this->db->query("WITH x AS (SELECT * FROM mst.t_company WHERE deleted_at is NULL),
            y AS (SELECT COUNT(*) AS record_total FROM mst.t_company WHERE deleted_at is NULL),
            z AS (SELECT COUNT(*) AS record_filtered FROM mst.t_company WHERE deleted_at is NULL)
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


    public function insert($data)
    {

        $this->db->trans_begin();

        $this->db->insert('mst.t_company', $data);

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

        $this->db->where('company_id', $id_data);
        $this->db->update('mst.t_company', $data);

        $this->db->trans_complete();

        if ($this->db->trans_status() === TRUE) {
            return 'success';
        } else {
            $this->db->trans_rollback();
            return 'false';
        }
    }
}
