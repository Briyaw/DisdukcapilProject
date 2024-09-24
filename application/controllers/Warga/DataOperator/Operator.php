<?php
class Operator extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Administrator/M_operator');

		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Operator Desa',
			'warga' => $this->M_operator->getOperator()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/operator/index', $data);
		$this->load->view('layout/footer', $data);
	}

	public function index_edit($id)
	{
		$data = array(
			'title' => 'Edit Data Operator Desa',
			'warga' => $this->M_operator->getEdit($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/operator/edit', $data);
		$this->load->view('layout/footer', $data);
	}

	public function edit($id)
	{
		$nik =  $this->input->post('nik');
		$nama =  $this->input->post('nama');
		$jekel =  $this->input->post('jekel');
		$no_hp =  $this->input->post('no_hp');
		$kecamatan =  $this->input->post('kecamatan');
		$desa =  $this->input->post('desa');
		$alamat_desa =  $this->input->post('alamat_desa');
		$nama_kades =  $this->input->post('nama_kades');
		$email_desa =  $this->input->post('email_desa');
		$kodepos_desa =  $this->input->post('kodepos_desa');

		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'jekel' => $jekel,
			'no_hp' => $no_hp,
			'kecamatan' => $kecamatan,
			'desa' => $desa,
			'alamat_desa' => $alamat_desa,
			'nama_kades' => $nama_kades,
			'email_desa' => $email_desa,
			'kodepos_desa' => $kodepos_desa,
			'updated_at' => date('Y-m-d H:i:s')
		);
		$this->session->set_flashdata('success', 'Data operator desa berhasil di update !');
		$this->M_operator->edit($data, $id);
		redirect('data-operator');
	}

	public function detail($id)
	{
		$nik = $this->input->get('nik');
		$data = array(
			'title' => 'Detail Data Operator Desa | ' . $nik,
			'nik'   => $nik,
			'detail'    => $this->M_operator->getDetail($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/operator/detail', $data);
		$this->load->view('layout/footer', $data);
	}

}
