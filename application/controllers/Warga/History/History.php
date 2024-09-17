<?php
class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'History | List Surat',
            'skd'   => $this->M_notifikasi->nSkd(),
            'sktm'  => $this->M_notifikasi->nSktm(),
            'sku'   => $this->M_notifikasi->nSku(),
            'skp'   => $this->M_notifikasi->nSkp(),
            'spak'  => $this->M_notifikasi->nSpak(),
            'skk'   => $this->M_notifikasi->nSkk(),
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/history/index', $data);
        $this->load->view('layout/footer', $data);
    }
}
