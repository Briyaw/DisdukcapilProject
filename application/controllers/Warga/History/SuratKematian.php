<?php
class SuratKematian extends CI_Controller
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
            'title' => 'History Surat Keterangan Kematian',
            'datas' => $this->M_history->getSkk(),
        );

        $this->M_notifikasi->updateSk();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/history/skk/index', $data);
        $this->load->view('layout/footer', $data);
    }

    public function cetak($id)
    {
        $data = array(
            'title' => 'Cetak Surat Keterangan Kematian',
            'data'  => $this->M_cetak->cetakSkk($id)
        );

        $this->load->view('warga/history/skk/print.php', $data);
    }
}
