<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_main extends CI_Model
{

	public function module()
	{

		$this->db->distinct();

		$this->db->select('a.c_module, b.n_module, b.n_desc, b.n_sort');

		$this->db->join('svc.t_m_module b', 'b.c_module = a.c_module');

		$this->db->where('a.c_role', $this->session->userdata('role'));
		$this->db->where('b.c_app', 'A');

		$this->db->order_by('b.n_sort', 'asc');

		$_get = $this->db->get('svc.t_m_access a');
		$_res = $_get->num_rows() > 0 ? $_get->result() : array();
		$_module = array();

		foreach ($_res as $_index => $_obj) {
			$_module[] = (object) array(
				'id' 		=> $_obj->n_sort, 'title' 	=> $_obj->n_module, 'desc' 	=> $_obj->n_desc, 'iconCls' => 'icon control_play'
			);
		}

		return $_module;
	}

	function checkSession()
	{
		if ($this->session->userdata('is_logged')) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	public function menu()
	{

		$get_parent = $this->db->query("SELECT * from svc.t_m_menu where is_parent='t' and c_menu in (select c_menu from svc.t_m_access where c_role='" . $this->session->userdata('role') . "') order by c_menu");
		$res_parent = $get_parent->result();

		$parent_menu = [];

		foreach ($res_parent as $parent) {

			$get_child = $this->db->query("SELECT * from svc.t_m_menu where parent_menu='" . $parent->c_menu . "' and is_parent='f' and c_menu in (select c_menu from svc.t_m_access where c_role='" . $this->session->userdata('role') . "') order by c_menu ");
			$res_child = $get_child->result();

			$child_menu = [];

			if ($get_child->num_rows() > 0) {

				foreach ($res_child as $child) {

					$child_menu_dua = [];

					if ($child->b_leaf === 'f') {

						$child_menu[] = array(
							'c_module'		=> $child->c_module, 'c_menu'		=> $child->c_menu, 'n_url'		=> $child->n_url, 'n_menu'		=> $child->n_menu, 'b_leaf'		=> $child->b_leaf, 'b_new'		=> $child->b_new, 'b_delete'		=> $child->b_delete, 'b_update'		=> $child->b_update, 'child_dua'	=> $child_menu_dua
						);
					} else {

						$get_child_dua = $this->db->query("SELECT * from svc.t_m_menu where parent_menu='" . $child->c_menu . "' and c_menu in (select c_menu from svc.t_m_access where c_role='" . $this->session->userdata('role') . "') order by c_menu  ");
						$res_child_dua = $get_child_dua->result();

						foreach ($res_child_dua as $childDua) {

							$child_menu_dua[] = array(
								'c_module'		=> $childDua->c_module, 'c_menu'		=> $childDua->c_menu, 'n_url'		=> $childDua->n_url, 'n_menu'		=> $childDua->n_menu, 'b_new'		=> $childDua->b_new, 'b_delete'		=> $childDua->b_delete, 'b_update'		=> $childDua->b_update
							);
						}

						$child_menu[] = array(
							'c_module'		=> $child->c_module, 'c_menu'		=> $child->c_menu, 'n_url'		=> $child->n_url, 'n_menu'		=> $child->n_menu, 'b_leaf'		=> $child->b_leaf, 'b_new'		=> $child->b_new, 'b_delete'		=> $child->b_delete, 'b_update'		=> $child->b_update, 'child_dua'	=> $child_menu_dua
						);
					}
				}
			}

			$parent_menu[] = array(
				'c_module'		=> $parent->c_module, 'c_menu'		=> $parent->c_menu, 'n_url'		=> $parent->n_url, 'n_menu'		=> $parent->n_menu, 'n_icon'		=> $parent->n_icon, 'b_leaf'		=> $parent->b_leaf, 'b_new'		=> $parent->b_new, 'b_delete'		=> $parent->b_delete, 'b_update'		=> $parent->b_update, 'child'		=> $child_menu
			);
		}

		return $parent_menu;
	}


	public function viewuser($_user)
	{
		$this->db->where('n_user', $_user);

		$_get = $this->db->get('svc.t_m_user');

		return $_get->num_rows() > 0 ? $_get->row() : FALSE;
	}


	public function create_user($_data)
	{
		return json_encode((object) array(
			'success' 	=> $this->db->insert('svc.t_m_user', $_data)
		));
	}

	public function get_total_rack()
	{
		$where_id = (!empty($this->session->userdata('room_id')) ? " and b.room_id = '{$this->session->userdata('room_id')}' " : '');

		$query = $this->db->query("SELECT COUNT (distinct rack_id) AS record_rack FROM mst.t_rack a LEFT JOIN mst.t_room b ON a.room_id = b.room_id LEFT JOIN mst.t_gedung c ON b.gedung_id=c.gedung_id LEFT JOIN mst.t_company e ON c.company_id = e.company_id $where_id");
		return $query->row()->record_rack;
	}
	public function get_total_server()
	{
		$query = [];
		$query = $this->db->query("SELECT COUNT (distinct server_id) AS record_server FROM mst.t_server WHERE deleted_at is NULL");
		return $query->row()->record_server;
	}
	public function get_total_virtual()
	{
		$query = [];
		$query = $this->db->query("SELECT COUNT (distinct virtual_id) AS record_virtual FROM mst.t_virtual WHERE deleted_at is NULL");
		return $query->row()->record_virtual;
	}
	public function get_total_room()
	{
		$query = [];
		$query = $this->db->query("SELECT COUNT (distinct room_id) AS record_room FROM mst.t_room WHERE deleted_at is NULL");
		return $query->row()->record_room;
	}
	public function get_total_gedung()
	{
		$query = [];
		$query = $this->db->query("SELECT COUNT (distinct gedung_id) AS record_gedung FROM mst.t_gedung WHERE deleted_at is NULL");
		return $query->row()->record_gedung;
	}
}

/* End of file m_main.php */
/* Location: ./application/modules/main/models/m_main.php */