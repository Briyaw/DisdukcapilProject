<?php
class SuratKematian extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		is_login();
		$this->load->model('Administrator/M_verifikasi');
	}


	public function index()
	{
		$data = array(
			'title' => 'Verifikasi Surat Keterangan Kematian',
			'datas'  => $this->M_verifikasi->getSkk()
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/verifikasi/skk/surat_kematian', $data);
		$this->load->view('layout/footer');
	}

	public function skkverif()
	{
		$id =  $this->input->post('id');
		$id_warga = $this->input->post('id_warga');
		$status = $this->input->post('status');

		if ($status == 'Diterima') {
			$data = array(
				'id_warga'  => $id_warga,
				'status'    => $status,
				'notifikasi'  => 1,
				'updated_at'  => date('d-m-Y H:i:s')
			);
			$this->M_verifikasi->skkverif($data, $id);
			$this->session->set_flashdata('success', 'Status berhasil di update !');
			redirect('verifikasi-surat-kematian', 'refresh');
		} else if ($status == 'Ditolak') {
			$data = array(
				'id_warga'  => $id_warga,
				'status'    => $status,
				'notifikasi'  => 0,
				'updated_at'  => date('d-m-Y H:i:s')
			);
			$this->M_verifikasi->skkverif($data, $id);
			$this->session->set_flashdata('success', 'Status berhasil di update !');
			redirect('verifikasi-surat-kematian', 'refresh');
		} else {
			$data = array(
				'id_warga'  => $id_warga,
				'status'    => $status,
				'notifikasi'  => 0,
				'updated_at'  => date('d-m-Y H:i:s')
			);
			$this->M_verifikasi->skkverif($data, $id);
			$this->session->set_flashdata('success', 'Status berhasil di update !');
			redirect('verifikasi-surat-kematian', 'refresh');
		}
	}

	public function skkkomentar($id)
	{
		$komentar = $this->input->post('komentar');

		$data = array(
			'komentar' => $komentar
		);
		$this->M_verifikasi->komentarskk($data, $id);
		$this->session->set_flashdata('success', 'Komentar berhasil di simpan !');
		redirect('verifikasi-surat-kematian', 'refresh');
	}

	public function preview($id)
	{
		$data = array(
			'title' => 'Preview Surat Kematian',
			'datas'  => $this->M_verifikasi->getPreviewSkk($id)
		);

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('administrator/verifikasi/skk/preview', $data);
		$this->load->view('layout/footer');
	}

	// function preview($id)

    // {

    //     if (isset($_POST['view'])) {

    //         header("content-type: application/pdf");

    //         readfile('./assets/file_ktp/' . $id . '.pdf');

    //     }

    // }

	public function hapus($id)
	{
		$this->M_verifikasi->hKematian($id);
		$this->session->set_flashdata('success', 'Data berhasil di hapus !');
		redirect('verifikasi-surat-kematian', 'refresh');
	}
}
