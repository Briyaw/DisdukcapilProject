<?php

use function PHPSTORM_META\registerArgumentsSet;

class Warga extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->Model('M_auth');
		$this->load->Model('Administrator/M_user');
	}

	public function index()
	{
		$data = array(
			'title' => 'Login Users',
		);

		$this->load->view('auth/layout/header', $data);
		$this->load->view('auth/login/warga', $data);
		$this->load->view('auth/layout/footer', $data);
	}

	public function loginUser()
	{
		$this->form_validation->set_rules('email', 'Alamat Email', 'required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');

		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Oppss... Terdapat kesalahan !');
			$this->index();
		} else {
			$userLogin = $this->M_auth->loginUser($email);
			if (!empty($userLogin['email'])) {
				if (password_verify($password, $userLogin['password'])) {
					$userLogin = array(
						'id_user'   => $userLogin['id_users'],
						'id_warga'  => $userLogin['id_warga'],
						'nama'      => $userLogin['nama'],
						'email'     => $userLogin['email'],
						'jekel'     => $userLogin['jekel'],
						'role_id'   => $userLogin['role_id'],
						'is_login'  => TRUE
					);
					$this->session->set_userdata($userLogin);
					$this->session->set_flashdata('success', 'Login berhasil !');
					redirect('dashboard', 'refresh');
				} else {
					$this->session->set_flashdata('danger', 'Oppss... Password anda salah !');
					redirect('user/login', 'refresh');
				}
			} else {
				$this->session->set_flashdata('error', 'Oppss... Email anda tidak terdaftar atau salah !  !');
				redirect('user/login', 'refresh');
			}
		}
	}

	public function register()
	{
		$data = array(
			'title'     => 'Register User'
		);
		$this->load->view('auth/layout/header', $data);
		$this->load->view('auth/register/register', $data);
		$this->load->view('auth/layout/footer', $data);
	}

	public function registerUser()
	{
		$this->form_validation->set_rules(
			'nik',
			'NIK',
			'required|min_length[16]|max_length[16]',
			[
				'required' => 'NIK Wajib Diisi',
				'min_length' => 'NIK Minimal 16 Karakter',
				'max_length' => 'NIK Maksimal 16 Karakter',
			]
		);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|is_unique[users.email]',
			[
				'required' => 'Email Wajib Diisi',
				'valid_email' => 'Email Tidak Valid',
				'is_unique' => 'Email Sudah Terdaftar'
			]
		);

		$this->form_validation->set_rules('password', 'Password', 'required', [
			'required' => 'Password Wajib diisi'
		]);
		$this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi Password', 'required|matches[password]', [
			'required' => 'Konfirmasi Password Wajib diisi',
			'matches' => 'Konfirmasi Password Tidak Sama'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Oppss... Terdapat kesalahan !');
			$this->register();
		} else {
			$nik = $this->input->post('nik');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			//cek nik apakah ada di data penduduk atau tidak
			//query untuk cek data
			$ceknik = $this->M_user->cekNik($nik);
			if (!$ceknik) {
				$this->session->set_flashdata('danger', 'Maaf, NIK tidak terdaftar !');
				$this->register();
			} else {
				$data = array(
					'id_warga'      => $ceknik['id_warga'],
					'email'         => $email,
					'password'      => password_hash($password, PASSWORD_DEFAULT),
					'role_id'       => 3,
					'created_at'    => date('Y-m-d H:i:s')
				);
				$this->M_auth->created($data);
				$this->session->set_flashdata('success', 'Register berhasil, silahkan login !');
				redirect('user/login', 'refresh');
			}
		}
	}
}
