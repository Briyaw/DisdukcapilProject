<?php
class Keterangan_pengantar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('M_getData');
		$this->load->model('M_surat');
	}

	public function index()
	{
		$data = array(
			'title' => 'Surat Keterangan Pengantar',
			'data' => $this->M_getData->getDataId()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar');
		$this->load->view('warga/surat/keterangan_pengantar/create');
		$this->load->view('layout/footer');
	}

	public function create()
	{
		$this->form_validation->set_rules('keperluan', 'Keperluan', 'required', array('required' => 'Keperluan permohonan harus diisi !'));

		$cek = $this->M_surat->cek_skp();

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Data tidak lengkap !');
			$this->index();
		} else {

			if ($cek) {
				$this->session->set_flashdata('error', 'Maaf, anda tidak dapat melakukan permohonan surat <span class="font-bold">SKP</span> karena masih ada yang belum terverivikasi !');
				redirect('list-surat', 'refresh');
			} else {

				$keperluan = $this->input->post('keperluan');
				$file_kk = $_FILES['file_kk']['name'];
				$file_ktp = $_FILES['file_ktp']['name'];

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_kk);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$filekk = str_replace('', '', 'skp-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_ktp);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$filektp = str_replace('', '', 'skp-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);



				if ($file_kk == '' || $file_ktp == '') {
					$this->session->set_flashdata('error', 'File tidak lengkap !');
					redirect('skp/create', 'refresh');
				} else {
					$noid = $this->M_getData->getSkpId();
					$nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKP' . '/' . date('m') . '/' . date('Y');
					$data = array(
						'id_warga'  => $this->session->userdata('id_warga'),
						'jenis_surat'   => 'SURAT KETERANGAN PENGANTAR',
						'nomor_surat'   => $nomor,
						'tanggal_surat' => date('d/m/Y'),
						'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
						'keperluan'     => $keperluan,
						'file_kk'       => $filekk,
						'file_ktp'      => $filektp,
						'status'        => 'Menunggu Verifikasi',
						'notifikasi'    => 0,
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

						redirect('skp/buat-surat', 'refresh');
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

						redirect('skp/buat-surat', 'refresh');
					} else {
						$this->upload->data();
					}
					$this->M_surat->skp($data);
					$this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat !');
					redirect('list-surat', 'refresh');
				}
			}
		}
	}
}
