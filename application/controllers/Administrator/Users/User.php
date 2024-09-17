<?php
class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->Model('Administrator/M_user');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Users',
			'users' => $this->M_user->getUser()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/user/users', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules(
			'nik',
			'NIK',
			'required|min_length[16]|max_length[16]',
			[
				'required' => 'NIK Wajib Diisi',
				'min_length' => 'NIK Minimal 16 Karakter',
				'max_length' => 'NIK Maksimal 16 Karakter'
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

		$this->form_validation->set_rules(
			'password',
			'Password',
			'required',
			[
				'required' => 'Password Wajib Diisi',
			]
		);

		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', form_error('nik') . '<br>' . form_error('email'), '<br>' . form_error('password'));
			redirect('data-users');
		} else {
			$nik = $this->input->post('nik');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			//cek nik apakah ada di data penduduk atau tidak
			//query untuk cek data
			$ceknik = $this->M_user->cekNik($nik);
			if (!$ceknik['nik']) {
				$this->session->set_flashdata('danger', 'Maaf, NIK tidak terdaftar !');
				redirect('data-users');
			} else {
				$data = array(
					'id_warga' => $ceknik['id_warga'],
					'email' => $email,
					'password' => password_hash($password, PASSWORD_DEFAULT),
					'created_at'    => date('Y-m-d H:i:s')
				);
				$this->M_user->created($data);
				$this->session->set_flashdata('success', 'Data berhasil disimpan !');
				redirect('data-users');
			}
		}
	}

	public function edit($id)
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		if ($password == "") {
			$data = array(
				'email' => $email,
				'updated_at'    => date('Y-m-d H:i:s')
			);
			$this->M_user->updateUser($data, $id);
			$this->session->set_flashdata('success', 'Data berhasil di update !');
			redirect('data-users', 'refresh');
		} else {
			$data = array(
				'email' => $email,
				'password' => password_hash($password, PASSWORD_DEFAULT),
				'updated_at'    => date('Y-m-d H:i:s')
			);
			$this->M_user->updateUser($data, $id);
			$this->session->set_flashdata('success', 'Data berhasil di update !');
			redirect('data-users', 'refresh');
		}
	}

	public function delete($id)
	{
		$this->M_user->deleteUser($id);
		$this->session->set_flashdata('danger', 'Data berhasil di hapus !');
		redirect('data-users', 'refresh');
	}
}
