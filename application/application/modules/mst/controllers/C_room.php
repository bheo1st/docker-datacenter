<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_room extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_room', 'model');
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
                'content'        => $this->load->view('room/v_room', $content_value, TRUE)
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

    public function formRoom($action = '', $id = '')
    {
        $ses = $this->main_model->checkSession();
        if ($ses) {
            $action         = $this->input->get('action');
            $listGedung	= $this->model->get_list_gedung();

            if ($action === 'add') {
                $data        = array(
                    'action'            => 'add',
                    'listGedung'		=> $listGedung,
                    

                );
                $content         = $this->load->view('room/v_form_room', $data, TRUE);
            } elseif ($action === 'edit') {
                $readData = $this->model->read($id = $this->input->get('id'));
                $data = array(
                    'action'            => 'edit',
                    'listGedung'		=> $listGedung,
                    'data'                => $readData['aaData'][0]
                );
                
                $content         = $this->load->view('room/v_form_room', $data, TRUE);
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
    public function submit_room()
    {

        $action = $this->input->post('action');


        if ($action === 'add') {
            $data = array(
                'room_name'       => $this->input->post('roomName'),
                'gedung_id'        => $this->input->post('selectGedung'),
                'created_at'        => 'now()',
                'created_by'        => $this->session->userdata('username'),
            );
            
            $insert = $this->model->insert($data);

            return $insert;
        } elseif ($action === 'edit') {
            $id_data = $this->input->post('roomId');
            $data = array(
                'room_name'       => $this->input->post('roomName'),
                'gedung_id'        => $this->input->post('selectGedung'),
                'created_at'        => 'now()',
                'created_by'        => $this->session->userdata('username'),
            );
            var_dump($id_data);
            $update = $this->model->update($data, $id_data);
            
            return $update;
        } elseif ($action === 'delete') {
            $id_data = $this->input->post('roomId');
            $data = array(
                'deleted_at'        => 'now()',
            );
            $delete = $this->model->update($data, $id_data);

            return $delete;
        }
    }

    public function validate_roomName()
    {

        $this->db->where('room_name', $this->input->post('roomName'));
        $get = $this->db->get('mst.t_room');
        $res = $get->num_rows() > 0 ? 'false' : 'true';

        echo $res;
    }
}
