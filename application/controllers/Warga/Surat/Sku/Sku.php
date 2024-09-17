<?php
class Sku extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->Model('M_getData');
		$this->load->Model('M_surat');
	}

	public function index()
	{
		$data = array(
			'title' => 'Surat Keterangan Usaha',
			'data'  => $this->M_getData->getDataId()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/surat/sku/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('keperluan', 'Keperluan', 'required', array('required' => 'Keperluan permohonan harus diisi !'));

		$cek = $this->M_surat->cek_sku();


		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Data tidak lengkap !');
			$this->index();
		} else {

			if ($cek) {
				$this->session->set_flashdata('error', 'Maaf, anda tidak dapat melakukan permohonan surat <span class="font-bold">SKU</span> karena masih ada yang belum terverivikasi !');
				redirect('list-surat', 'refresh');
			} else {

				$keperluan = $this->input->post('keperluan');
				$nama_usaha = $this->input->post('nama_usaha');
				$tgl_mulai = $this->input->post('tgl_mulai');
				$alamat_usaha = $this->input->post('alamat_usaha');
				$file_kk = $_FILES['file_kk']['name'];
				$file_ktp = $_FILES['file_ktp']['name'];

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_kk);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$filekk = str_replace('', '', 'sku-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_ktp);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$filektp = str_replace('', '', 'sku-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);



				if ($file_kk == '' || $file_ktp == '') {
					$this->session->set_flashdata('error', 'File tidak lengkap !');
					redirect('sku/create', 'refresh');
				} else {
					$noid = $this->M_getData->getSkuId();
					$nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKU' . '/' . date('m') . '/' . date('Y');
					$data = array(
						'id_warga'  => $this->session->userdata('id_warga'),
						'jenis_surat'   => 'SURAT KETERANGAN USAHA',
						'nomor_surat'   => $nomor,
						'tanggal_surat' => date('d/m/Y'),
						'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
						'nama_usaha'    => $nama_usaha,
						'tgl_mulai'     => $tgl_mulai,
						'alamat_usaha'  => $alamat_usaha,
						'keperluan'     => $keperluan,
						'file_kk'       => $filekk,
						'file_ktp'      => $filektp,
						'status'        => 'Menunggu Verifikasi',
						'created_at'    => date('Y-m-d H:i:s')
					);

					$config['upload_path'] = './assets/file_kk/'; //folder penyimpanana gambar
					$config['file_name'] = $filekk;
					$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
					$config['max_size'] = '3024';
					$config['remove_space'] = TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('file_kk')) {
						$this->session->set_flashdata('danger', $this->upload->display_errors());

						redirect('sku/buat-surat', 'refresh');
					} else {
						$this->upload->data();
					}

					$config['upload_path'] = './assets/file_ktp/'; //folder penyimpanana gambar
					$config['file_name'] = $filektp;
					$config['allowed_types'] = 'jpeg|png|jpg|JPEG|PNG|JPG';
					$config['max_size'] = '3024';
					$config['remove_space'] = TRUE;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if (!$this->upload->do_upload('file_ktp')) {
						$this->session->set_flashdata('danger', $this->upload->display_errors());

						redirect('sku/buat-surat', 'refresh');
					} else {
						$this->upload->data();
					}
					$this->M_surat->sku($data);
					$this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat !');
					redirect('list-surat', 'refresh');
				}
			}
		}
	}
}
