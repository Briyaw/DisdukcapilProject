<?php
class Skkt extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Administrator/M_skkt');
		date_default_timezone_set('Asia/Jakarta');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data Penerbitan Surat Keterangan Kematian',
			'skkt' => $this->M_skkt->getSkkt()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/skkt/index', $data);
		$this->load->view('layout/footer', $data);
	}

	public function index_tambah()
	{
		$data = array(
			'title' => 'Data Penerbitan Surat Keterangan Kematian'
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/skkt/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{

		$nomor_surat =  $this->input->post('nomor_surat');
		$nomor_surat_terbit =  $this->input->post('nomor_surat_terbit');
		$file_berkas = $_FILES['file_berkas']['name'];

		$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_berkas);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$file_berkas = str_replace('', '', 'skkt-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

			$data = array(
					'id_warga'  => $this->session->userdata('id_warga'),
					'nomor_surat'   => $nomor_surat,
					'nomor_surat_terbit'   => $nomor_surat_terbit,
					'file_berkas' => $file_berkas,
					'uploaded_at' => date('Y-m-d H:i:s')
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
					redirect('tambah-data-skkt', 'refresh');
				} else {
					$this->upload->data();
				}

			$this->session->set_flashdata('success', 'Data Surat Keterangan Kematian berhasil di simpan !');
			$this->M_skkt->create($data);
			redirect('data-skkt');
		// }
	}

	public function index_edit($id)
	{
		$data = array(
			'title' => 'Edit Penerbitan Surat Keterangan Kematian',
			'skkt' => $this->M_skkt->getEdit($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/skkt/edit', $data);
		$this->load->view('layout/footer', $data);
	}

	public function edit($id)
	{
		$jenis_surat =  $this->input->post('jenis_surat');
		$nomor_surat =  $this->input->post('nomor_surat');
		$nomor_surat_terbit =  $this->input->post('nomor_surat_terbit');
		$file_berkas =  $this->input->post('file_berkas');

		$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_berkas);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$file_berkas = str_replace('', '', 'skkt-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

		$data = array(
					'id_warga'  => $this->session->userdata('id_warga'),
					'jenis_surat'   => 'SURAT KETERANGAN KEMATIAN',
					'nomor_surat'   => $nomor_surat,
					'nomor_surat_terbit'   => $nomor_surat_terbit,
					
					// 'nik_p'  => $nik_p,
					// 'nama_p'  => $nama_p,

					// 'nik_a'   => $nik_a,
					// 'nama_alm'  => $nama_alm,
										
					'file_berkas' => $file_berkas,
					'uploaded_at' => date('Y-m-d H:i:s')
				);
		$this->session->set_flashdata('success', 'Penerbitan Surat Keterangan Kematian berhasil di update !');
		$this->M_skkt->edit($data, $id);
		redirect('data-skkt');
	}

	public function detail($id)
	{
		$id = $this->input->get('id');
		$data = array(
			'title' => 'Penerbitan Surat Keterangan Kematian | ' . $id,
			'id'   => $id,
			'detail'    => $this->M_skkt->getDetail($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/skkt/detail', $data);
		$this->load->view('layout/footer', $data);
	}

	// public function detail($id)
	// {
	// 	$id = $this->input->get('id');
	// 	$data = array(
	// 		'title' => 'Detail Data Buku Pokok Pemakaman | ' . $id,
	// 		'id'   => $id,
	// 		'detail'    => $this->M_bpp->getDetail($id)
	// 	);

	// 	$this->load->view('layout/header', $data);
	// 	$this->load->view('layout/sidebar', $data);
	// 	$this->load->view('administrator/bpp/detail', $data);
	// 	$this->load->view('layout/footer', $data);
	// }



	public function delete($id)
	{
		$this->M_skkt->delete($id);
		$this->session->set_flashdata('danger', 'Data berhasil di hapus !');

		redirect('data-skkt', 'refresh');
	}
}
