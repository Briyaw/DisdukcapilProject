<?php
class Skk extends CI_Controller
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
			'title' => 'Surat Keterangan Kematian',
			'data'  => $this->M_getData->getDataId()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('warga/surat/skk/create', $data);
		$this->load->view('layout/footer', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules(
			'hubungan',
			'Hubungan dengan yang meninggal',
			'required',
			[
				'required' => 'Hubungan dengan yang meninggal harus diisi'
			]
		);
		$this->form_validation->set_rules('nama_alm', 'Nama Almarhum / Almarhuman', 'required', [
			'required' => 'Nama Almarhum / Almarhuman tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nik_p', 'nik_p', 'required', [
			'required' => 'NIK Pelapor tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nama_p', 'nama_p', 'required', [
			'required' => 'Nama pelapor tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('tempat_lahir_p', 'tempat_lahir_p', 'required', [
			'required' => 'Tempat lahir pelapor tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('tanggal_lahir_p', 'tanggal_lahir_p', 'required', [
			'required' => 'Tanggal lahir pelapor tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('alamat_p', 'alamat_p', 'required', [
			'required' => 'Alamat pelapor tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nohp_p', 'nohp_p', 'required', [
			'required' => 'Nomor Hp/WhatsApp pelapor tidak boleh kosong!'
		]);



		$this->form_validation->set_rules('bin', 'Bin/i', 'required', [
			'required' => 'Bin/i tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('nik_a', 'NIK', 'required', [
			'required' => 'NIK tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('jekel_a', 'Jenis Kelamin', 'required', [
			'required' => 'Jenis Kelamin tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('tempat_lahir_a', 'Tempat Lahir', 'required', [
			'required' => 'Tempat Lahir tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('tanggal_lahir_a', 'Tanggal Lahir', 'required', [
			'required' => 'Tanggal Lahir tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('kewarganegaraan_a', 'Kewarganegaraan', 'required', [
			'required' => 'Kewarganegaraan tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('status_perkawinan_a', 'Status Perkawinan', 'required', [
			'required' => 'Status Perkawinan tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('pekerjaan_a', 'Pekerjaan', 'required', [
			'required' => 'Pekerjaan tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('alamat_a', 'Alamat', 'required', [
			'required' => 'Alamat tidak boleh kosong!'
		]);
		$this->form_validation->set_rules(
			'hari',
			'Hari',
			'required',
			[
				'hari'  => 'Hari tidak boleh kosong!'
			]
		);
		$this->form_validation->set_rules('tanggal_meninggal', 'Tanggal Meninggal', 'required', [
			'required' => 'Tanggal Meninggal tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('jam_meninggal', 'Jam Meninggal', 'required', [
			'required' => 'Jam Meninggal tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('sebab_meninggal', 'Sebab Meninggal', 'required', [
			'required' => 'Sebab Meninggal tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('tempat_pemakaman', 'Tempat pemakaman', 'required', [
			'required' => 'Tempat pemakaman tidak boleh kosong!'
		]);



		$this->form_validation->set_rules('alamat_pemakaman', 'Alamat Pemakaman', 'required', [
			'required' => 'Alamat pemakaman tidak boleh kosong!'
		]);




		$this->form_validation->set_rules('keperluan', 'Keperluan', 'required', [
			'required' => 'Keperluan tidak boleh kosong!'
		]);

		$cek = $this->M_surat->cek_skk();

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Form hasus diisi semua!');
			$this->index();
		} else {

			if ($cek) {
				$this->session->set_flashdata('error', 'Maaf, anda tidak dapat melakukan permohonan surat <span class="font-bold">SKK</span> karena masih ada yang belum terverivikasi !');
				redirect('list-surat', 'refresh');
			} else {

				$hubungan = $this->input->post('hubungan');


				$nik_p = $this->input->post('nik_p');
				$nama_p = $this->input->post('nama_p');
				$tempat_lahir_p = $this->input->post('tempat_lahir_p');
				$tanggal_lahir_p = $this->input->post('tanggal_lahir_p');
				$alamat_p = $this->input->post('alamat_p');
				$nohp_p = $this->input->post('nohp_p');


				$nama = $this->input->post('nama_alm');
				$bin = $this->input->post('bin');
				$nik = $this->input->post('nik_a');
				$jekel = $this->input->post('jekel_a');
				$tempat_lahir = $this->input->post('tempat_lahir_a');
				$tanggal_lahir = $this->input->post('tanggal_lahir_a');
				$kewarganegaraan = $this->input->post('kewarganegaraan_a');
				$statusperkawinan = $this->input->post('status_perkawinan_a');
				$pekerjaan = $this->input->post('pekerjaan_a');
				$alamat = $this->input->post('alamat_a');


				// $file_kk = $_FILES['file_kk']['name'];
				// $file_ktp = $_FILES['file_ktp']['name'];
				$file_berkas = $_FILES['file_berkas']['name'];



				$hari = $this->input->post('hari');
				$tanggal_meninggal = $this->input->post('tanggal_meninggal');
				$jam_meninggal = $this->input->post('jam_meninggal');
				$tempat_meninggal  = $this->input->post('tempat_meninggal');
				$tmp_pemakaman = $this->input->post('tempat_pemakaman');


				$alamat_pemakaman = $this->input->post('alamat_pemakaman');


				$sebab_meninggal = $this->input->post('sebab_meninggal');
				$keperluan = $this->input->post('keperluan');

				// $date = date('Ymd-is');
				// $d2 = trim($date);
				// //acak nama gambar
				// $extensi1 = explode('.', $file_kk);
				// $extensi = strtolower(end($extensi1));
				// $acak_angka =  rand(1, 999);
				// $filekk = str_replace('', '', 'skk-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);

				// $date = date('Ymd-is');
				// $d2 = trim($date);
				// //acak nama gambar
				// $extensi1 = explode('.', $file_ktp);
				// $extensi = strtolower(end($extensi1));
				// $acak_angka =  rand(1, 999);
				// $filektp = str_replace('', '', 'skk-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);


				$date = date('Ymd-is');
				$d2 = trim($date);
				//acak nama gambar
				$extensi1 = explode('.', $file_berkas);
				$extensi = strtolower(end($extensi1));
				$acak_angka =  rand(1, 999);
				$file_berkas = str_replace('', '', 'skk-id-' . $this->session->userdata('id_warga') . '-tgl' . $d2 . '-' . $acak_angka . '.' . $extensi);


				$noid = $this->M_getData->getSkkId();

				// //awal
				// $nomor  = sprintf("%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKK' . '/' . date('m') . '/' . date('Y');
				$nomor  = sprintf('REG'.'/' ."%03s", abs(floatval($noid['id']) + 1)) . '/' . 'SKK' . '/' . date('m') . '/' . date('Y');



				$data = array(
					'id_warga'  => $this->session->userdata('id_warga'),
					'jenis_surat'   => 'SURAT KETERANGAN KEMATIAN',
					'nomor_surat'   => $nomor,
					'tanggal_surat' => date('d/m/Y'),
					'tanggal_kadaluarsa'  => date('d/m/Y', strtotime('+1 month')),
					'hubungan'  => $hubungan,


					'nik_p'  => $nik_p,
					'nama_p'  => $nama_p,
					'tempat_lahir_p'  => $tempat_lahir_p,
					'tanggal_lahir_p'  => $tanggal_lahir_p,
					'alamat_p'  => $alamat_p,
					'nohp_p'  => $nohp_p,


					'nama_alm'  => $nama,
					'bin'   => $bin,
					'nik_a'   => $nik,
					'jekel_a' => $jekel,
					'tempat_lahir_a' => $tempat_lahir,
					'tanggal_lahir_a' => $tanggal_lahir,
					'kewarganegaraan_a' => $kewarganegaraan,
					'status_perkawinan_a' => $statusperkawinan,
					'pekerjaan_a' => $pekerjaan,
					'alamat_a' => $alamat,

					// 'file_kk' => $filekk,
					// 'file_ktp' => $filektp,
					'file_berkas' => $file_berkas,


					'hari'  => $hari,
					'tanggal_meninggal' => $tanggal_meninggal,
					'jam_meninggal' => $jam_meninggal,
					'tempat_meninggal' => $tempat_meninggal,
					'sebab_meninggal' => $sebab_meninggal,
					'tempat_pemakaman' => $tmp_pemakaman,


					'alamat_pemakaman' => $alamat_pemakaman,


					'keperluan' => $keperluan,
					'status' => 'Menunggu Verifikasi',
					'created_at' => date('Y-m-d H:i:s')
				);

				// $config['upload_path'] = './assets/file_kk/'; //folder penyimpanan file
				// $config['file_name'] = $filekk;
				// $config['allowed_types'] = 'jpeg|png|pdf|jpg|JPEG|PNG|JPG';
				// $config['max_size'] = '3024';
				// $config['remove_space'] = TRUE;
				// $this->load->library('upload', $config);
				// $this->upload->initialize($config);
				// if (!$this->upload->do_upload('file_kk')) {
				// 	$this->session->set_flashdata('danger', $this->upload->display_errors());

				// 	redirect('skk/buat-surat', 'refresh');
				// } else {
				// 	$this->upload->data();
				// }

				// $config['upload_path'] = './assets/file_ktp/'; //folder penyimpanana gambar
				// $config['file_name'] = $filektp;
				// $config['allowed_types'] = 'jpeg|png|pdf|jpg|JPEG|PNG|JPG';
				// $config['max_size'] = '3024';
				// $config['remove_space'] = TRUE;
				// $this->load->library('upload', $config);
				// $this->upload->initialize($config);
				// if (!$this->upload->do_upload('file_ktp')) {
				// 	$this->session->set_flashdata('danger', $this->upload->display_errors());

				// 	redirect('skk/buat-surat', 'refresh');
				// } else {
				// 	$this->upload->data();
				// }


				$config['upload_path'] = './assets/file_berkas/'; //folder penyimpanan file
				$config['file_name'] = $file_berkas;
				$config['allowed_types'] = 'jpeg|png|pdf|jpg|JPEG|PNG|JPG';
				$config['max_size'] = '5000';
				$config['remove_space'] = TRUE;
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if (!$this->upload->do_upload('file_berkas')) {
					$this->session->set_flashdata('danger', $this->upload->display_errors());

					redirect('skk/buat-surat', 'refresh');
				} else {
					$this->upload->data();
				}



				$this->M_surat->skk($data);
				$this->session->set_flashdata('success', 'Permohonan surat berhasil dibuat !');
				redirect('list-surat', 'refresh');
			}
		}
	}

	// function preview($id)

    // {

    //     if (isset($_POST['view'])) {

    //         header("content-type: application/pdf");

    //         readfile('./assets/file_ktp/' . $id . '.pdf');

    //     }

    // }
}

