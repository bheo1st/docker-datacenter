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
                'js'            => $this->load->view('js_trx', '', TRUE),
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
    public function exportExcel()
    {
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=LaporanServer" . date('Ymdhis') . ".xls");
        header("Pragma: no-cache");
        header("Expires: 0");

        $postData = $this->input->get();
        $data = $this->model->readExcel($postData);
        echo $this->load->view('server/v_export', $data);
    }

    public function exportPdf()
    {
        $this->load->library('mypdf');
        $postData = $this->input->get();
        $data = $this->model->readPdf($postData);
        $this->mypdf->generate('server/v_pdf', $data, 'laporan-server-fisik', 'A4', 'landscape');
    }
}
