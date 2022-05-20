<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class C_login extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_login', 'model');
	}

	
	public function index()
	{
		if (! $this->session->userdata('is_logged'))
		{
			$this->load->view('v_login');
		} else {
			redirect('/main', 'refresh');
		}			
	}

	public function do_login()
	{
		if (! $this->input->is_ajax_request()) show_404();	
		
		echo json_encode(
			(object) array(
				'success' 	=> $this->model->do_login()
			)
		);
	}

	public function do_logout()
	{
		$this->model->do_logout();
	}

	// public function do_init(){
	// 	if (! $this->input->is_ajax_request()) show_404();	

	// 	echo json_encode($this->model->cek_license($this->input->post('credentialKey'))
	// 	);
	// }

	
}
