<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_rack extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_rack', 'model');
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
                'content'        => $this->load->view('rack/v_rack', $content_value, TRUE)
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

    public function formRack($action = '', $id = '')
    {
        $ses = $this->main_model->checkSession();
        if ($ses) {
            $action         = $this->input->get('action');
            $listRoom	= $this->model->get_list_room();

            if ($action === 'add') {
                $data        = array(
                    'action'            => 'add',
                    'listRoom'		=> $listRoom,
                    

                );
                $content         = $this->load->view('rack/v_form_rack', $data, TRUE);
            } elseif ($action === 'edit') {
                $readData = $this->model->read($id = $this->input->get('id'));
                $data = array(
                    'action'            => 'edit',
                    'listRoom'		=> $listRoom,
                    'data'                => $readData['aaData'][0]
                );
                
                $content         = $this->load->view('rack/v_form_rack', $data, TRUE);
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
    public function submit_rack()
    {

        $action = $this->input->post('action');


        if ($action === 'add') {
            $data = array(
                'rack_name'       => $this->input->post('rackName'),
                'room_id'        => $this->input->post('selectRoom'),
                'created_at'        => 'now()',
                'created_by'        => $this->session->userdata('username'),
            );
            
            $insert = $this->model->insert($data);

            return $insert;
        } elseif ($action === 'edit') {
            $id_data = $this->input->post('rackId');
            $data = array(
                'rack_name'       => $this->input->post('rackName'),
                'room_id'        => $this->input->post('selectRoom'),
                'created_at'        => 'now()',
                'created_by'        => $this->session->userdata('username'),
            );
            var_dump($id_data,$data);
            $update = $this->model->update($data, $id_data);
            
            return $update;
        } elseif ($action === 'delete') {
            $id_data = $this->input->post('rackId');
            $data = array(
                'deleted_at'        => 'now()',
            );
            $delete = $this->model->update($data, $id_data);

            return $delete;
        }
    }

    public function validate_RackName()
    {

        $this->db->where('rack_name', $this->input->post('rackName'));
        $get = $this->db->get('mst.t_rack');
        $res = $get->num_rows() > 0 ? 'false' : 'true';

        echo $res;
    }
}
