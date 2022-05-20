<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {	

	public function do_login()
	{
		$this->db->select("a.*, b.company_name, c.i_level, c.n_role, d.n_company, e.nama_lokasi",FALSE);

		$this->db->join('svc.t_m_role c', 'c.c_role = a.c_role', 'left');
		$this->db->join('public.t_m_company d', 'd.c_company = a.c_company', 'left');
		$this->db->join('mst.t_company b', 'b.company_id = a.company_id', 'left');
		$this->db->join('mst.t_lokasi e', 'e.id_lokasi = a.id_lokasi', 'left');

		$this->db->where('a.n_user', $this->input->post('username'));
		$this->db->where('a.n_pass', md5($this->input->post('password')));
		$this->db->where('a.b_delete', 'f');

		$_get = $this->db->get('svc.t_m_user a');

		$_log = $_get->num_rows() > 0 ? TRUE : FALSE;

		if ($_log === TRUE)
		{
			$_res = $_get->row();

			$this->session->set_userdata(
				array(
					  'is_logged' 			=> $_log
					, 'is_admin' 			=> $_res->b_admin == 't' ? TRUE : FALSE
					, 'username' 			=> $_res->n_user
					, 'fullname' 			=> $_res->n_name
					, 'role' 				=> $_res->c_role
					, 'role_name'			=> $_res->n_role
					, 'mail' 				=> $_res->n_mail
					, 'phone' 				=> $_res->n_phone
					, 'owner_company_id'	=> $_res->c_company
					, 'owner_company_name'	=> $_res->n_company
					, 'company_id' 			=> $_res->company_id
					, 'company_name'		=> $_res->company_name
					, 'id_lokasi' 			=> $_res->id_lokasi
					, 'nama_lokasi'			=> $_res->nama_lokasi
					, 'level'				=> $_res->i_level
				)
			);

			return TRUE;
		}

		return FALSE;
	}

	public function do_logout()
	{
		$this->session->sess_destroy();

		redirect('/', 'refresh');
	}

	public function validate_init(){

		$this->db->select("*");
		$this->db->where('license is not null');
		$get_validate = $this->db->get('svc.t_license');
		$res_validate = $get_validate->num_rows() > 0 ? TRUE : FALSE;

		return $res_validate;
	}	

	public function cek_license($credentialKey){

		return TRUE;

	}

}

/* End of file m_login.php */
/* Location: ./application/models/m_login.php */