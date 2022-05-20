<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class C_company extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('m_company', 'model');
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
                'content'        => $this->load->view('company/v_company', $content_value, TRUE)
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

    public function formCompany($action = '', $id = '')
    {
        $ses = $this->main_model->checkSession();
        if ($ses) {
            $action         = $this->input->get('action');

            if ($action === 'add') {
                $data        = array(
                    'action'            => 'add',

                );
                $content         = $this->load->view('company/v_form_company', $data, TRUE);
            } elseif ($action === 'edit') {
                $readData = $this->model->read($id = $this->input->get('id'));
                $data = array(
                    'action'            => 'edit',
                    'data'                => $readData['aaData'][0]
                );
                $content         = $this->load->view('company/v_form_company', $data, TRUE);
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
    public function submit_company()
    {

        $action = $this->input->post('action');


        if ($action === 'add') {
            $data = array(
                'company_name'        => $this->input->post('companyUser'),
                'company_address'        => $this->input->post('companyAddress'),
                'created_at'        => 'now()',
                'created_by'        => $this->session->userdata('username'),
            );
            $insert = $this->model->insert($data);

            return $insert;
        } elseif ($action === 'edit') {
            $id_data = $this->input->post('companyId');
            $data = array(
                'company_name'        => $this->input->post('companyUser'),
                'company_address'        => $this->input->post('companyAddress'),
                'created_at'        => 'now()',
                'created_by'        => $this->session->userdata('username')
            );
            $update = $this->model->update($data, $id_data);

            return $update;
        } elseif ($action === 'delete') {
            $id_data = $this->input->post('companyId');
            $data = array(
                'deleted_at'        => 'now()',
            );
            $delete = $this->model->update($data, $id_data);

            return $delete;
        }
    }

    public function validate_companyUser()
    {

        $this->db->where('company_name', $this->input->post('validasiCompany'));
        $get = $this->db->get('mst.t_company');
        $res = $get->num_rows() > 0 ? 'false' : 'true';

        echo $res;
    }
}
