<?php
class Warga extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Administrator/M_warga');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Operator Desa',
			'warga' => $this->M_warga->getWarga()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/warga/index', $data);
		$this->load->view('layout/footer', $data);
	}

	public function index_tambah()
	{
		$data = array(
			'title' => 'Data Operator Desa'
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/warga/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required|numeric|is_unique[warga.nik]|min_length[16]|max_length[16]', [
			'required' => 'NIK Warga tidak boleh kosong!',
			'numeric' => 'NIK Warga harus berupa angka!',
			'is_unique' => 'NIK Warga sudah terdaftar!',
			'min_length' => 'NIK Warga minimal 16 karakter!',
			'max_length' => 'NIK Warga maksimal 16 karakter!'
		]);
		$this->form_validation->set_rules('nama', 'Nama', 'required', [
			'required' => 'Nama Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('jekel', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin Warga tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('no_hp', 'no_hp', 'required', [
			'required' => 'nomor Hp/WA tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('kecamatan', 'kecamatan', 'required', [
			'required' => 'nama kecamatan tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('desa', 'desa', 'required', [
			'required' => 'nama desa tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('alamat_desa', 'alamat_desa', 'required', [
			'required' => 'alamat kantor desa tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nama_kades', 'nama_kades', 'required', [
			'required' => 'nama kepala desa tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('email_desa', 'email_desa', 'required', [
			'required' => 'email desa tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('kodepos_desa', 'kodepos_desa', 'required', [
			'required' => 'kodepos desa tidak boleh kosong!'
		]);

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

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Form harus di lengkapi !');
			$this->index_tambah();
		} else {
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
				'created_at' => date('Y-m-d H:i:s')
			);
			$this->session->set_flashdata('success', 'Data operator desa berhasil di simpan !');
			$this->M_warga->create($data);
			redirect('data-warga');
		}
	}

	public function index_edit($id)
	{
		$data = array(
			'title' => 'Edit Data Operator Desa',
			'warga' => $this->M_warga->getEdit($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/warga/edit', $data);
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
		$this->M_warga->edit($data, $id);
		redirect('data-warga');
	}

	public function detail($id)
	{
		$nik = $this->input->get('nik');
		$data = array(
			'title' => 'Detail Data Operator Desa | ' . $nik,
			'nik'   => $nik,
			'detail'    => $this->M_warga->getDetail($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/warga/detail', $data);
		$this->load->view('layout/footer', $data);
	}

	public function delete($id)
	{
		$this->M_warga->delete($id);
		$this->session->set_flashdata('danger', 'Data berhasil di hapus !');

		redirect('data-warga', 'refresh');
	}
}
