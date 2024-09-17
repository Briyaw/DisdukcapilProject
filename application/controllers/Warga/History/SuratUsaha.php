<?php
class SuratUsaha extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('M_history');
        $this->load->model('M_cetak');
    }

    public function index()
    {
        $data = array(
            'title' => 'History Surat Keterangan Usaha',
            'datas' => $this->M_history->getSku()
        );

        $this->M_notifikasi->updateSu();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/history/sku/index', $data);
        $this->load->view('layout/footer', $data);
    }

    public function cetak($id)
    {
        $data = array(
            'title' => 'Cetak Surat Keterangan Usaha',
            'data'  => $this->M_cetak->cetakSku($id)
        );

        $this->load->view('warga/history/sku/print', $data);
    }
}
