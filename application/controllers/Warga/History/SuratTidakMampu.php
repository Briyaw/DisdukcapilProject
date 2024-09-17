<?php
class SuratTidakMampu extends CI_Controller
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
            'title' => 'History Surat Keterangan Tidak Mampu',
            'datas' => $this->M_history->getSktm(),
        );

        $this->M_notifikasi->updateSktm();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/history/sktm/index', $data);
        $this->load->view('layout/footer', $data);
    }

    public function cetak($id)
    {
        $data = array(
            'title' => 'Cetak Surat Keterangan Tidak Mampu',
            'data'  => $this->M_cetak->cetakSktm($id)
        );

        $this->load->view('warga/history/sktm/print', $data);
    }
}
