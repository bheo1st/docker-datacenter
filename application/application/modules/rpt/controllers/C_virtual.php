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

            $content_value['data']        = $this->model->read();
            $data = array(
                'module'        => $this->main_model->module(),
                'menu'            => $this->main_model->menu(),
                'js'            => $this->load->view('js_trx', '', TRUE),
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

        $data = $this->model->read($id = '', $postData);

        echo json_encode($data);
    }
    public function exportExcel()
    {
        header("Content-type: application/vnd-ms-excel");
        header("Content-Disposition: attachment; filename=LaporanVirtual" . date('Ymdhis') . ".xls");
        header("Pragma: no-cache");
        header("Expires: 0");

        $postData = $this->input->get();
        $data = $this->model->readExcel($postData);
        echo $this->load->view('virtual/v_export', $data);
    }

    public function exportPdf()
    {
        $this->load->library('dompdf_gen');
        $postData = $this->input->get();
        $data = $this->model->readPdf($postData);
        $this->load->view('virtual/v_pdf', $data);
        $paper_size = 'A4'; // ukuran kertas
        $orientation = 'landscape'; //tipe format kertas potrait atau landscape
        $html = $this->output->get_output();
        $html = preg_replace('/>\s+</', '><', $html);
        $this->dompdf->set_paper($paper_size, $orientation);
        // Convert to PDF
        $this->dompdf->load_html($html);
        ob_end_clean();
        $this->dompdf->render();
        $this->dompdf->stream("laporan server virtual.pdf", array('Attachment' => 0));
        // nama file pdf yang di hasilkan

    }
}
