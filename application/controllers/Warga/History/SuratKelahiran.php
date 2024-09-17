<?php
class SuratKelahiran extends CI_Controller
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
            'title' => 'History Surat Pengantar Akte Kelahiran',
            'datas' => $this->M_history->getSpak(),
        );

        $this->M_notifikasi->updateSpak();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/history/spak/index', $data);
        $this->load->view('layout/footer', $data);
    }

    public function cetak($id)
    {
        $data = array(
            'title' => 'Cetak Surat Pengantar Akte Kelahiran',
            'data'  => $this->M_cetak->cetakSpak($id)
        );

        $this->load->view('warga/history/spak/print', $data);
    }
}
