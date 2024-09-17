<?php
class Spak extends CI_Controller
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
			'title' => 'Surat Pegantar Akte Kelahiran',
			'data'  => $this->M_getData->getDataId()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/surat/spak/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('ayah', 'Ayah', 'required', [
			'required' => 'Nama Ayah harus diisi!'
		]);
		$this->form_validation->set_rules('ibu', 'Ibu', 'required', [
			'required' => 'Nama Ibu harus diisi!'
		]);
		$this->form_validation->set_rules('no_kk', 'No KK', 'required|min_length[16]|max_length[16]', [
			'required' => 'Nomor KK harus diisi!',
			'min_length' => 'Nomor KK harus 16 digit!',
			'max_length' => 'Nomor KK harus 16 digit!'
		]);
		$this->form_validation->set_rules('nama_bayi', 'Nama', 'required', [
			'required' => 'Nama Bayi harus diisi!'
		]);
		$this->form_validation->set_rules('tempat_lahir_b', 'Tempat Lahir', 'required', [
			'required' => 'Tempat Lahir harus diisi!'
		]);
		$this->form_validation->set_rules('tanggal_lahir_b', 'Tanggal Lahir', 'required', [
			'required' => 'Tanggal Lahir harus diisi!'
		]);
		$this->form_validation->set_rules('jekel_b', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin harus diisi!'
		]);
		$this->form_validation->set_rules('agama_b', 'Agama', 'required', [
			'required' => 'Agama harus diisi!'
		]);
		$this->form_validation->set_rules('anak_ke', 'Anak Ke', 'required', [
			'required' => 'Anak Ke harus diisi!'
		]);
		$this->form_validation->set_rules('kewarganegaraan_b', 'Kewarganegaraan', 'required', [
			'required' => 'Kewarganegaraan harus diisi!'
		]);
		$this->form_validation->set_rules('alamat_b', 'Alamat', 'required', [
			'required' => 'Alamat harus diisi!'
		]);
		$this->form_validation->set_rules('keperluan', 'Keperluan', 'required', array('required' => 'Keperluan permohonan harus diisi !'));

		$cek = $this->M_surat->cek_spak();

		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('error', 'Data tidak lengkap !');
			$this->index();
		} else {

			if ($cek) {
				$this->session->set_flashdata('error', 'Maaf, anda tidak dapat melakukan permohonan surat <span class="font-bold">SPAK</span> karena masih ada yang belum terverivikasi !');
				redirect('list-surat', 'refresh');
			} else {

				$ayah = $this->input->post('ayah');
				$ibu = $this->input->post('ibu');
				$no_kk = $this->input->post('no_kk');
				$nama = $this->input->post('nama_bayi');
				$jekel = $this->input->post('jekel_b');
				$tmp_lahir = $this->input->post('tempat_lahir_b');
				$tgl_lahir = $this->input->post('tanggal_lahir_b');
				$anak_ke = $this->input->post('anak_ke');
				$agama = $this->input->post('agama_b');
				$kwarga = $this->input->post('kewarganegaraan_b');
				$alamat = $this->input->post('alamat_b');
				$keperluan = $this->input->post('keperluan');
				$file_kk = $_FILES['file_kk']['name'];
				$file_ktp = $_FILES['file_ktp']['name'];

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_kk);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$filekk = str_replace('', '', 'spak-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_ktp);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$filektp = str_replace('', '', 'spak-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);



				if ($file_kk == '' || $file_ktp == '') {
					$this->session->set_flashdata('error', 'File tidak lengkap !');
					redirect('spak/create', 'refresh');
				} else {
					$noid = $this->M_getData->getSpakId();
					$nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKPAK' . '/' . date('m') . '/' . date('Y');
					$data = array(
						'id_warga'  => $this->session->userdata('id_warga'),
						'jenis_surat'   => 'SURAT PENGANTAR AKTE KELAHIRAN',
						'nomor_surat'   => $nomor,
						'tanggal_surat' => date('d/m/Y'),
						'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
						'ayah'          =>  $ayah,
						'ibu'           =>  $ibu,
						'no_kk'         =>  $no_kk,
						'nama_bayi'     =>  $nama,
						'jekel_b'         =>  $jekel,
						'tempat_lahir_b'  =>  $tmp_lahir,
						'tanggal_lahir_b' =>  $tgl_lahir,
						'anak_ke'       =>  $anak_ke,
						'agama_b'         =>  $agama,
						'kewarganegaraan_b'  =>  $kwarga,
						'alamat_b'        =>  $alamat,
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

						redirect('spak/buat-surat', 'refresh');
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

						redirect('spak/buat-surat', 'refresh');
					} else {
						$this->upload->data();
					}
					$this->M_surat->spak($data);
					$this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat !');
					redirect('list-surat', 'refresh');
				}
			}
		}
	}
}
