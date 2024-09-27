<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kecamatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Administrator/M_kec');
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        $data = array(
            'title'    => 'Data Admininstrator',
            'data'      => $this->M_kec->getData()
        );
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('administrator/user/kecamatan', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $jekel = $this->input->post('jekel');
        $role = $this->input->post('role_id');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $id_kec = $this->input->post('id_kec');
        $id_desa = $this->input->post('id_desa');
        $password = $this->input->post('password');

        $data = array(
            'nik'  => $nik,
            'nama'  => $nama,
            'email' => $email,
            'jekel' => $jekel,
            'role_id' => $role,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'id_kec' => $id_kec,
            'id_desa' => $id_desa,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'created_at'    => date('Y-m-d')
        );
        $this->M_kec->tambahKec($data);
        $this->session->set_flashdata('success', 'Data berhasil di simpan !');
        redirect('data-kec', 'refresh');
    }

    public function update($id)
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $jekel = $this->input->post('jekel');
        $role = $this->input->post('role_id');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $id_kec = $this->input->post('id_kec');
        $id_desa = $this->input->post('id_desa');
        $password = $this->input->post('password');

        if ($password == "") {
            $data = array(
                'nik'  => $nik,
                'nama'  => $nama,
                'email' => $email,
                'jekel' => $jekel,
                'role_id' => $role,
                'kecamatan' => $kecamatan,
                'desa' => $desa,
                'id_kec' => $id_kec,
                'id_desa' => $id_desa,
                'updated_at'    => date('Y-m-d H:i:s')
            );
            $this->M_kec->updateKec($data, $id);
            $this->session->set_flashdata('success', 'Data berhasil di update !');
            redirect('data-kec', 'refresh');
        } else {
            $data = array(
                'nik'  => $nik,
                'nama'  => $nama,
                'email' => $email,
                'jekel' => $jekel,
                'role_id' => $role,
                'kecamatan' => $kecamatan,
                'desa' => $desa,
                'id_kec' => $id_kec,
                'id_desa' => $id_desa,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'updated_at'    => date('Y-m-d H:i:s')
            );
            $this->M_kec->updateKec($data, $id);
            $this->session->set_flashdata('success', 'Data berhasil di update !');
            redirect('data-kec', 'refresh');
        }
    }

    public function deleted($id)
    {
        $this->M_kec->deletedKec($id);
        $this->session->set_flashdata('danger', 'Data berhasil di hapus !');
        redirect('data-kec', 'refresh');
    }
}
