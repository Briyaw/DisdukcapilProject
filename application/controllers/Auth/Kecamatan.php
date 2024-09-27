<?php
class Kecamatan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_auth');
    }

    public function index()
    {
        $data = array(
            'title' => 'Login Operator Kecamatan',
        );

        $this->load->view('auth/layout/header', $data);
        $this->load->view('auth/login/kecamatan', $data);
        $this->load->view('auth/layout/footer', $data);
    }

    public function loginKec()
    {
        $this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        $email = $this->input->post('email');
        $password = $this->input->post('password');
        

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Oppss... Terdapat kesalahan !');
            $this->index();
        } else {
            $adminLogin = $this->M_auth->loginKec($email);
            if (!empty($adminLogin['email'])) {
                if (password_verify($password, $adminLogin['password'])) {
                    $adminLogin = array(
                        'nik'       => $adminLogin['nik'],
                        'nama'      => $adminLogin['nama'],
                        'email'     => $adminLogin['email'],
                        'jekel'     => $adminLogin['jekel'],
                        'role_id'   => $adminLogin['role_id'],
                        'kecamatan' => $adminLogin['kecamatan'],
                        'desa'      => $adminLogin['desa'],
                        'id_kec'    => $adminLogin['id_kec'],
                        'id_desa'   => $adminLogin['id_desa'],
                        'is_login'  => TRUE
                    );
                    $this->session->set_userdata($adminLogin);
                    $this->session->set_flashdata('success', 'Login berhasil !');
                    redirect('dashboard', 'refresh');
                } else {
                    $this->session->set_flashdata('danger', 'Oppss... Password anda salah !');
                    redirect('oprkec/login', 'refresh');
                }
            } else {
                $this->session->set_flashdata('error', 'Oppss... Email anda tidak terdaftar atau salah !  !');
                redirect('oprkec/login', 'refresh');
            }
        }
    }
}
