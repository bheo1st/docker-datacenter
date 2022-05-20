<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_virtual extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_virtual', 'model');
        $this->load->model('main/m_main', 'main_model');
    }

    public function index()
    {
        $ses = $this->main_model->checkSession();
        if ($ses) {

            $content_value['data']        = $this->model->vm_show();
            $data = array(
                'module'        => $this->main_model->module(),
                'menu'            => $this->main_model->menu(),
                'js'            => $this->load->view('js_mst', '', TRUE),
                'content'        => $this->load->view('virtual/v_virtual', $content_value, TRUE)
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

        $data = $this->model->vm_show($id = '', $postData);

        echo json_encode($data);
    }
    public function detail()
    {
        $postData = $this->input->post();
        $id = $this->input->post('server');
        $data = $this->model->read_virtual($id,$postData);

        echo json_encode($data);
    }

    public function formVirtual($action = '', $id = '')
    {
        $ses = $this->main_model->checkSession();
        if ($ses) {
            $action         = $this->input->get('action');
            $listServer	= $this->model->get_list_server();

            if ($action === 'add') {
                $data        = array(
                    'action'            => 'add',
                    'listServer' => $listServer

                );
                $content         = $this->load->view('virtual/v_form_virtual', $data, TRUE);
            } elseif ($action === 'edit') {
                $readData = $this->model->vm_show($id = $this->input->get('id'));
                $data = array(
                    'action'            => 'edit',
                    'listServer' => $listServer,
                    'data'                => $readData['aaData'][0]
                );
                $content         = $this->load->view('virtual/v_form_virtual', $data, TRUE);
            }

            $data = array(
                'module'        => $this->main_model->module(),
                'menu'            => $this->main_model->menu(),
                'js'            => $this->load->view('js_mst', '', TRUE),
                'content'        => $content
            );

            $this->load->view('main/v_main', $data);
        } else {

            $this->session->sess_destroy();
            redirect('/', 'refresh');
        }
    }
    public function submit_virtual()
    {

        $action = $this->input->post('action');


        if ($action === 'add') {
            $data = array(
                'virtual_name'        => $this->input->post('virtualName'),
                'virtual_ip'        => $this->input->post('virtualIp'),
                'virtual_username'        => $this->input->post('virtualUsername'),
                'virtual_password'        => $this->input->post('virtualPassword'),
                'server_id'        => $this->input->post('selectServer'),
                'created_at'        => 'now()',
                'created_by'        => $this->session->userdata('username'),
            );
            $insert = $this->model->insert($data);

            return $insert;
        } elseif ($action === 'edit') {
            $id_data = $this->input->post('virtualId');
            $data = array(
                'virtual_name'        => $this->input->post('virtualName'),
                'virtual_ip'        => $this->input->post('virtualIp'),
                'virtual_username'        => $this->input->post('virtualUsername'),
                'virtual_password'        => $this->input->post('virtualPassword'),
                'server_id'        => $this->input->post('selectServer'),
                'created_at'        => 'now()',
                'created_by'        => $this->session->userdata('username'),
            );
            $update = $this->model->update($data, $id_data);

            return $update;
        } elseif ($action === 'delete') {
            $id_data = $this->input->post('virtualId');
            $data = array(
                'deleted_at'        => 'now()',
            );
            $delete = $this->model->update($data, $id_data);

            return $delete;
        }
    }

    public function validate_virtualS()
    {

        $this->db->where('virtual_name', $this->input->post('virtualS'));
        $get = $this->db->get('mst.t_company');
        $res = $get->num_rows() > 0 ? 'false' : 'true';

        echo $res;
    }
}
