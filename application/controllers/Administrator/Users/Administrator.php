<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Administrator extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Administrator/M_admin');
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        $data = array(
            'title'    => 'Data Admininstrator',
            'data'      => $this->M_admin->getData()
        );
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar', $data);
        $this->load->view('administrator/user/administrator', $data);
        $this->load->view('layout/footer');
    }

    public function tambah()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $jekel = $this->input->post('jekel');
        $role = $this->input->post('role_id');
        $password = $this->input->post('password');

        $data = array(
            'nama'  => $nama,
            'email' => $email,
            'jekel' => $jekel,
            'role_id' => $role,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'created_at'    => date('Y-m-d')
        );
        $this->M_admin->tambahAdmin($data);
        $this->session->set_flashdata('success', 'Data berhasil di simpan !');
        redirect('data-administrator', 'refresh');
    }

    public function update($id)
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $jekel = $this->input->post('jekel');
        $role = $this->input->post('role_id');
        $password = $this->input->post('password');

        if ($password == "") {
            $data = array(
                'nama'  => $nama,
                'email' => $email,
                'jekel' => $jekel,
                'role_id' => $role,
                'updated_at'    => date('Y-m-d H:i:s')
            );
            $this->M_admin->updateAdmin($data, $id);
            $this->session->set_flashdata('success', 'Data berhasil di update !');
            redirect('data-administrator', 'refresh');
        } else {
            $data = array(
                'nama'  => $nama,
                'email' => $email,
                'jekel' => $jekel,
                'role_id' => $role,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'updated_at'    => date('Y-m-d H:i:s')
            );
            $this->M_admin->updateAdmin($data, $id);
            $this->session->set_flashdata('success', 'Data berhasil di update !');
            redirect('data-administrator', 'refresh');
        }
    }

    public function deleted($id)
    {
        $this->M_admin->deletedAdmin($id);
        $this->session->set_flashdata('danger', 'Data berhasil di hapus !');
        redirect('data-administrator', 'refresh');
    }
}
