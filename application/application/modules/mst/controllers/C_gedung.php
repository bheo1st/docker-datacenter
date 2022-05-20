<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_gedung extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_gedung', 'model');
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
                'content'        => $this->load->view('gedung/v_gedung', $content_value, TRUE)
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

    public function formGedung($action = '', $id = '')
    {
        $ses = $this->main_model->checkSession();
        if ($ses) {
            $action         = $this->input->get('action');
            $listCompany	= $this->model->get_list_company();
            if ($action === 'add') {
                $data        = array(
                    'action'            => 'add',
                    'listCompany' => $listCompany

                );
                $content         = $this->load->view('gedung/v_form_gedung', $data, TRUE);
            } elseif ($action === 'edit') {
                $readData = $this->model->read($id = $this->input->get('id'));
                $data = array(
                    'action'            => 'edit',
                    'listCompany'        => $listCompany,
                    'data'                => $readData['aaData'][0]
                );
                $content         = $this->load->view('gedung/v_form_gedung', $data, TRUE);
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
    public function submit_gedung()
    {

        $action = $this->input->post('action');


        if ($action === 'add') {
            $data = array(
                'gedung_name'        => $this->input->post('gedungName'),
                'company_id'        => $this->input->post('selectCompanyUser'),
                'gedung_address' => $this->input->post('gedungAddress'),
                'created_at'        => 'now()',
                'created_by'        => $this->session->userdata('username'),
            );
            $insert = $this->model->insert($data);

            return $insert;
        } elseif ($action === 'edit') {
            $id_data = $this->input->post('gedungId');
            $data = array(
                'gedung_name'        => $this->input->post('gedungName'),
                'company_id'        => $this->input->post('selectCompanyUser'),
                'gedung_address' => $this->input->post('gedungAddress'),
                'created_at'        => 'now()',
                'created_by'        => $this->session->userdata('username'),
            );
            $update = $this->model->update($data, $id_data);

            return $update;
        } elseif ($action === 'delete') {
            $id_data = $this->input->post('gedungId');
            $data = array(
                'deleted_at'        => 'now()',
            );
            $delete = $this->model->update($data, $id_data);

            return $delete;
        }
    }
}
