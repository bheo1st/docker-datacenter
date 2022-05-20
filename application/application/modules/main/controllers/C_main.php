<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_main extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_main', 'model');
	}

	public function index()
	{

		$ses = $this->model->checkSession();
		if ($ses) {
			$_module 	= $this->model->module();
			$_menu 		= $this->model->menu();
			$total = array(
				'rack' => $this->model->get_total_rack(),
				'server' => $this->model->get_total_server(),
				'virtual' => $this->model->get_total_virtual(),
				'room' => $this->model->get_total_room(),
				'gedung' => $this->model->get_total_gedung(),
			);
			$content 		= $this->load->view('v_dashboard', $total, TRUE);
			$this->load->view('v_main', array('module' => $_module, 'menu' => $_menu, 'content' => $content));
		} else {

			$this->session->sess_destroy();
			redirect('/', 'refresh');
		}
	}


	public function view_module()
	{
		$_module = $this->model->module();
		$_data = $this->model->read();
		$data = $_data[0];

		$this->load->view('v_main', array('module' => $_module, 'page' => $data));
	}


	public function show_404()
	{
		if (!$this->input->is_ajax_request()) show_404();

		$this->load->view('v_error');
	}

	public function viewuser()
	{
		if (!$this->input->is_ajax_request()) show_404();

		$_data = $this->model->viewuser($this->input->post('user'));

		if ($_data) {
			echo json_encode(
				(object) array(
					'success' 	=> TRUE, 'data' 		=> (object) array(
						'user' 	=> $_data->n_user, 'name' 	=> $_data->n_name, 'mail' 	=> $_data->n_mail ? $_data->n_mail : '-', 'phone' 	=> $_data->n_phone ? $_data->n_phone : '-'
					)
				)
			);
		} else {
			echo json_encode(
				(object) array(
					'success' 	=> FALSE
				)
			);
		}
	}
}

/* End of file c_main.php */
/* Location: ./application/modules/main/controllers/c_main.php */