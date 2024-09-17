<?php
class Skkt extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->Model('M_getData');
		$this->load->model('M_surat');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Penerbitan Surat Keterangan Kematian',
			'data'  => $this->M_getData->getDataId()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/surat/skkt/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
		
		$this->form_validation->set_rules('jenis_surat', 'jenis_surat', 'required', [
			'required' => 'Jenis surat tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nomor_surat', 'nomor_surat', 'required', [
			'required' => 'Nomor Surat tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nomor_surat_terbit', 'nomor_surat_terbit', 'required', [
			'required' => 'Nomor Surat Keterangan Kematian tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nik_p', 'nik_p', 'required', [
			'required' => 'Tempat lahir pelapor tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nama_alm', 'nama_alm', 'required', [
			'required' => 'Nama almarhum/almarhumah tidak boleh kosong!'
		]);

		// $cek = $this->M_surat->cek_skkt();

		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('error', 'Form hasus diisi semua!');
			$this->index();
		}
		else
		{

			// if ($cek)
			// {
			// 	$this->session->set_flashdata('error', 'Maaf, anda tidak dapat melakukan permohonan surat <span class="font-bold">SKK</span> karena masih ada yang belum terverivikasi !');
			// 	redirect('list-surat', 'refresh');
			// } else {

			$jenis_surat = $this->input->post('jenis_surat');
			$nomor_surat = $this->input->post('nomor_surat');
			$nomor_surat_terbit = $this->input->post('nomor_surat_terbit');
			$nik_p = $this->input->post('nik_p');
			$nama_p = $this->input->post('nama_p');
			$nama_alm = $this->input->post('nama_alm');
			$nik_a = $this->input->post('nik_a');
			$file_berkas = $_FILES['file_berkas']['name'];

			// $date = date('Ymd-is');
			// $d2 = trim($date);
			// //acak nama gambar
			// $extensi1 = explode('.', $file_berkas);
			// $extensi = strtolower(end($extensi1));
			// $acak_angka =  rand(1, 999);
			// $file_berkas = str_replace('', '', 'skkt-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

			// $noid = $this->M_getData->getSkktId();
			// 	// //awal
			// 	// $nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKK' . '/' . date('m') . '/' . date('Y');
			// $nomor  = sprintf('REG'.'/' ."%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKK' . '/' . date('m') . '/' . date('Y');


			$data = array(
					'id_warga'  => $this->session->userdata('id_warga'),
					'jenis_surat'   => 'SURAT KETERANGAN KEMATIAN',
					'nomor_surat'   => $nomor_surat,
					'nomor_surat_terbit'   => $nomor_surat_terbit,
					
					'nik_p'  => $nik_p,
					'nama_p'  => $nama_p,
					
					'nama_alm'  => $nama,
					'nik_a'   => $nik,
					
					'file_berkas' => $file_berkas,
					'created_at' => date('Y-m-d H:i:s')
				);

				
				$config['upload_path'] = './assets/file_skkt/'; //folder penyimpanan file
				$config['file_name'] = $file_berkas;
				$config['allowed_types'] = 'jpeg|png|pdf|jpg|JPEG|PNG|JPG';
				$config['max_size'] = '5000';
				$config['remove_space'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('file_berkas')) {
					$this->session->set_flashdata('danger', $this->upload->display_errors());

					redirect('skkt/buat-surat', 'refresh');
				} else {
					$this->upload->data();
				}



				$this->M_surat->skk($data);
				$this->session->set_flashdata('success', 'Surat Keterangan Kematian Berhasil di Simpan');
				redirect('skkt/buat-surat', 'refresh');
			}
		}

}

