<?php
class Surat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
    }

    public function index()
    {
        $data = array(
            'title' => 'Pelayanan Surat | List Surat'
        );

        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('warga/surat/index', $data);
        $this->load->view('layout/footer');
    }
}
