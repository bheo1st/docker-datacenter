<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_server extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_server', 'model');
        $this->load->model('main/m_main', 'main_model');
    }

    public function index()
    {
        $ses = $this->main_model->checkSession();
        if ($ses) {

            $content_value['data']        = $this->model->read();
            $data = array(
                'module'        => $this->main_model->module(),
                'menu'            => $this->main_model->menu(),
                'js'            => $this->load->view('js_mst', '', TRUE),
                'content'        => $this->load->view('server/v_server', $content_value, TRUE)
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

    public function formserver($action = '', $id = '')
    {
        $ses = $this->main_model->checkSession();
        if ($ses) {
            $action         = $this->input->get('action');
            $listRack	= $this->model->get_list_rack();

            if ($action === 'add') {
                $data        = array(
                    'action'            => 'add',
                    'listRack' => $listRack

                );
                $content         = $this->load->view('server/v_form_server', $data, TRUE);
            } elseif ($action === 'edit') {
                $readData = $this->model->read($id = $this->input->get('id'));
                $data = array(
                    'action'            => 'edit',
                    'listRack' => $listRack,
                    'data'                => $readData['aaData'][0]
                );
                $content         = $this->load->view('server/v_form_server', $data, TRUE);
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
    public function submit_server()
    {

        $action = $this->input->post('action');


        if ($action === 'add') {
            $data = array(
                'server_name'        => $this->input->post('serverName'),
                'server_ip'        => $this->input->post('serverIp'),
                'type_os'        => $this->input->post('typeOs'),
                'server_cpu'        => $this->input->post('serverCpu'),
                'server_ram'        => $this->input->post('serverRam'),
                'server_storage'        => $this->input->post('serverStorage'),
                'rack_id' => $this->input->post('selectRack'),
                'created_at'        => 'now()',
                'created_by'        => $this->session->userdata('username'),
            );
            $insert = $this->model->insert($data);

            return $insert;
        } elseif ($action === 'edit') {
            $id_data = $this->input->post('serverId');
            $data = array(
                'server_name'        => $this->input->post('serverName'),
                'server_ip'        => $this->input->post('serverIp'),
                'type_os'        => $this->input->post('typeOs'),
                'server_cpu'        => $this->input->post('serverCpu'),
                'server_ram'        => $this->input->post('serverRam'),
                'server_storage'        => $this->input->post('serverStorage'),
                'rack_id' => $this->input->post('selectRack'),
                'created_at'        => 'now()',
                'created_by'        => $this->session->userdata('username'),
            );
            $update = $this->model->update($data, $id_data);

            return $update;
        } elseif ($action === 'delete') {
            $id_data = $this->input->post('serverId');
            $data = array(
                'deleted_at'        => 'now()',
            );
            $delete = $this->model->update($data, $id_data);

            return $delete;
        }
    }
}
