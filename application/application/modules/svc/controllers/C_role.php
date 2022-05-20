<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_role extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_role', 'model');
		$this->load->model('main/m_main', 'main_model');
	}

	public function index()
	{
		$ses = $this->main_model->checkSession();
		if($ses){
			$content_value['data']	    = $this->model->read();
			$data = array(
				'module'		=> $this->main_model->module(),
				'menu'			=> $this->main_model->menu(),
				'js'			=> $this->load->view('js_svc','', TRUE),
				'content'		=> $this->load->view('v_role', $content_value, TRUE)
			);
			
			$this->load->view('main/v_main', $data);		
		}else{
			
			$this->session->sess_destroy();
			redirect('/', 'refresh');
		}
	}

	public function read(){
	    $postData = $this->input->post();

	    $data = $this->model->read($id='', $postData);

	    echo json_encode($data);
	}
	
	public function formRole($action='', $id=''){
		$ses = $this->main_model->checkSession();
		if($ses){
			$action 	= $this->input->get('action');
			$listMenu 	= $this->model->get_list_menu();
			$listLevel 	= $this->model->get_list_level();

			if($action === 'add'){
				$data	    = array(
					'action'		=> 'add',
					'listMenu'		=> $listMenu,
					'listLevel'		=> $listLevel
				);
				$content 		= $this->load->view('v_form_role', $data, TRUE);
			}elseif($action === 'edit'){
				$data = array(
					'action'		=> 'edit',
					'listMenu'		=> $listMenu,
					'listLevel'		=> $listLevel,
					'data'			=> $this->model->read_detail($id = $this->input->get('id'))
				);
				$content 		= $this->load->view('v_form_role', $data, TRUE);
			}

			$data = array(
				'module'		=> $this->main_model->module(),
				'menu'			=> $this->main_model->menu(),
				'js'			=> $this->load->view('js_svc','', TRUE),
				'content'		=> $content
			);
			
			$this->load->view('main/v_main', $data);		
		}else{
			
			$this->session->sess_destroy();
			redirect('/', 'refresh');
		}

	}

	public function submit_role(){

		$action = $this->input->post('action');


		if($action === 'add'){
			$code_role = $this->model->get_c_role();
			$data = array(
				'c_role'		=> $code_role->c_role,
				'n_role'		=> $this->input->post('role_name'),
				'i_level'		=> $this->input->post('role_level'),
				'n_desc'		=> $this->input->post('role_desc'),
				'd_entry'		=> 'now()',
				'e_entry'		=> $this->session->userdata('username')
			);
			$detail = $this->input->post('role_menu');
			$insert = $this->model->insert($data, $detail);

			return $insert;
		}elseif($action === 'edit'){
			$id_data = $this->input->post('role_id');
			$data = array(
				'n_role'		=> $this->input->post('role_name'),
				'i_level'		=> $this->input->post('role_level'),
				'n_desc'		=> $this->input->post('role_desc'),
				'd_modif'		=> 'now()',
				'e_modif'		=> $this->session->userdata('username')
			);
			$detail = $this->input->post('role_menu');
			
			$update = $this->model->update($data, $id_data, $detail);

			return $update;
		}elseif($action === 'delete'){
			$id_data = $this->input->post('id');
			$data = array(
				'd_delete'		=> 'now()',
				'e_delete'		=> $this->session->userdata('username')
			);
			$delete = $this->model->update($data, $id_data);

			return $delete;			
		}

	}


}
