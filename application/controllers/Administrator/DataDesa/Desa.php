<?php
class Desa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Administrator/M_desa');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Desa',
			'desa' => $this->M_desa->getDesa()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/desa/index', $data);
		$this->load->view('layout/footer', $data);
	}

	public function index_tambah()
	{
		$data = array(
			'title' => 'Data Desa'
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/desa/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|is_unique[desa.nik]|min_length[16]|max_length[16]', [
			'required' => 'NIK tidak boleh kosong!',
			'numeric' => 'NIK harus berupa angka!',
			'is_unique' => 'NIK sudah terdaftar!',
			'min_length' => 'NIK minimal 16 karakter!',
			'max_length' => 'NIK maksimal 16 karakter!'
		]);
		$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Nama Operator Desa tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('jekel', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('desa', 'Desa', 'required', [
			'required' => 'Nama Desa tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', [
			'required' => 'Nama Kecamatan tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('alamat_desa', 'alamat_desa', 'required', [
			'required' => 'Alamat Desa tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nama_kades', 'nama_kades', 'required', [
			'required' => 'Nama Kepala Desa Wajib diisi!'
		]);
		$this->form_validation->set_rules('email_desa', 'email_desa', 'required', [
			'required' => 'Email Desa tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('kodepos_desa', 'kodepos_desa', 'required', [
			'required' => 'Kode Pos Desa tidak boleh kosong!'
		]);
		

		$nik =  $this->input->post('nik');
		$nama =  $this->input->post('nama');
		$jekel =  $this->input->post('jekel');
		$desa =  $this->input->post('desa');
		$kecamatan =  $this->input->post('kecamatan');
		$alamat_desa =  $this->input->post('alamat_desa');
		$nama_kades =  $this->input->post('nama_kades');
		$email_desa =  $this->input->post('email_desa');
		$kodepos_desa =  $this->input->post('kodepos_desa');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Form harus di lengkapi !');
			$this->index_tambah();
		} else {
			$data = array(
				'nik' => $nik,
				'nama' => $nama,
				'jekel' => $jekel,
				'desa' => $desa,
				'kecamatan' => $kecamatan,
				'alamat_desa' => $alamat_desa,
				'nama_kades' => $nama_kades,
				'email_desa' => $email_desa,
				'kodepos_desa' => $kodepos_desa,
				'created_at' => date('Y-m-d H:i:s')
			);
			$this->session->set_flashdata('success', 'Data Desa berhasil di simpan !');
			$this->M_desa->create($data);
			redirect('data-desa');
		}
	}

	public function index_edit($id)
	{
		$data = array(
			'title' => 'Edit Data Desa',
			'desa' => $this->M_desa->getEdit($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/desa/edit', $data);
		$this->load->view('layout/footer', $data);
	}

	public function edit($id)
	{
		$nik =  $this->input->post('nik');
		$nama =  $this->input->post('nama');
		$jekel =  $this->input->post('jekel');
		$desa =  $this->input->post('desa');
		$kecamatan =  $this->input->post('kecamatan');
		$alamat_desa =  $this->input->post('alamat_desa');
		$nama_kades =  $this->input->post('nama_kades');
		$email_desa =  $this->input->post('email_desa');
		$kodepos_desa =  $this->input->post('kodepos_desa');

		$data = array(
			'nik' => $nik,
				'nama' => $nama,
				'jekel' => $jekel,
				'desa' => $desa,
				'kecamatan' => $kecamatan,
				'alamat_desa' => $alamat_desa,
				'nama_kades' => $nama_kades,
				'email_desa' => $email_desa,
				'kodepos_desa' => $kodepos_desa,
				'created_at' => date('Y-m-d H:i:s')
		);
		$this->session->set_flashdata('success', 'Data Desa berhasil di perbaharui !');
		$this->M_desa->edit($data, $id);
		redirect('data-desa');
	}

	public function detail($id)
	{
		$nik = $this->input->get('nik');
		$data = array(
			'title' => 'Detail Data Desa | ' . $nik,
			'nik'   => $nik,
			'detail'    => $this->M_desa->getDetail($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/desa/detail', $data);
		$this->load->view('layout/footer', $data);
	}

	public function delete($id)
	{
		$this->M_desa->delete($id);
		$this->session->set_flashdata('danger', 'Data berhasil di hapus !');

		redirect('data-desa', 'refresh');
	}
}
