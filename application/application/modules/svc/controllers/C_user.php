<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_user extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_user', 'model');
		$this->load->model('main/m_main', 'main_model');
	}

	public function index()
	{
		$ses = $this->main_model->checkSession();
		if ($ses) {

			$content_value['data']	    = $this->model->read();
			$data = array(
				'module'		=> $this->main_model->module(),
				'menu'			=> $this->main_model->menu(),
				'js'			=> $this->load->view('js_svc', '', TRUE),
				'content'		=> $this->load->view('v_user', $content_value, TRUE)
			);

			$this->load->view('main/v_main', $data);
		} else {

			$this->session->sess_destroy();
			redirect('/', 'refresh');
		}
	}

	public function read()
	{
		$postData = $this->input->post();

		$data = $this->model->read($id = '', $postData);

		echo json_encode($data);
	}

	public function formuser($action = '', $id = '')
	{
		$ses = $this->main_model->checkSession();
		if ($ses) {
			$action 		= $this->input->get('action');
			$listRole 		= $this->model->get_list_role();
			$listCompany	= $this->model->get_list_company();
			$listLokasi		= $this->model->get_list_lokasi();

			if ($action === 'add') {
				$data	    = array(
					'action'			=> 'add',
					'listRole'			=> $listRole,
					'listCompany'		=> $listCompany,
					'listLokasi'		=> $listLokasi,
				);
				$content 		= $this->load->view('v_form_user', $data, TRUE);
			} elseif ($action === 'edit') {
				$readData = $this->model->read($id = $this->input->get('id'));
				$data = array(
					'action'			=> 'edit',
					'listRole'			=> $listRole,
					'listCompany'		=> $listCompany,
					'listLokasi'		=> $listLokasi,
					'data'				=> $readData['aaData'][0]
				);
				$content 		= $this->load->view('v_form_user', $data, TRUE);
			}

			$data = array(
				'module'		=> $this->main_model->module(),
				'menu'			=> $this->main_model->menu(),
				'js'			=> $this->load->view('js_svc', '', TRUE),
				'content'		=> $content
			);

			$this->load->view('main/v_main', $data);
		} else {

			$this->session->sess_destroy();
			redirect('/', 'refresh');
		}
	}

	public function submit_user()
	{

		$action = $this->input->post('action');


		if ($action === 'add') {
			$data = array(
				'c_role'		=> $this->input->post('userRole'),
				'n_name'		=> $this->input->post('userFullname'),
				'company_id'	=> $this->input->post('selectCompanyUser'),
				'n_user'		=> $this->input->post('userName'),
				'n_pass'		=> md5($this->input->post('userPass')),
				'n_mail'		=> $this->input->post('userEmail'),
				'n_phone'		=> $this->input->post('userPhone'),
				'd_entry'		=> 'now()',
				'e_entry'		=> $this->session->userdata('username')
			);
			$insert = $this->model->insert($data);
			
			return $insert;
		} elseif ($action === 'edit') {
			$id_data = $this->input->post('userName');
			$data = array(
				'c_role'		=> $this->input->post('userRole'),
				'n_name'		=> $this->input->post('userFullname'),
				'n_user'		=> $this->input->post('userName'),
				'company_id'	=> $this->input->post('selectCompanyUser'),
				// 'n_pass'		=> $this->input->post('userPass'),
				'n_mail'		=> $this->input->post('userEmail'),
				'n_phone'		=> $this->input->post('userPhone'),
				'd_modif'		=> 'now()',
				'e_modif'		=> $this->session->userdata('username')
			);
			$update = $this->model->update($data, $id_data);

			return $update;
		} elseif ($action === 'delete') {
			$id_data = $this->input->post('id');
			$data = array(
				'b_delete'		=> 't',
				'd_delete'		=> 'now()',
				'e_delete'		=> $this->session->userdata('username')
			);
			$delete = $this->model->update($data, $id_data);

			return $delete;
		}
	}

	public function validate_username()
	{

		$this->db->where('n_user', $this->input->post('username'));
		$get = $this->db->get('svc.t_m_user');
		$res = $get->num_rows() > 0 ? 'false' : 'true';

		echo $res;
	}
}
