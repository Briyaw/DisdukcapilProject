<?php
class M_surat extends CI_Model
{
	public function sktm($data)
	{
		$this->db->insert('surat_tidak_mampu', $data);
	}

	public function sku($data)
	{
		$this->db->insert('surat_usaha', $data);
	}

	public function skd($data)
	{
		$this->db->insert('surat_domisili', $data);
	}

	public function skk($data)
	{
		$this->db->insert('surat_kematian', $data);
	}

	public function skkt($data)
	{
		$this->db->insert('surat_kematian_terbit', $data);
	}

	public function spak($data)
	{
		$this->db->insert('surat_kelahiran', $data);
	}

	public function skp($data)
	{
		$this->db->insert('surat_keterangan_pengantar', $data);
	}

	public function cek_sktm()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_tidak_mampu')->row_array();
	}

	public function cek_sku()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_usaha')->row_array();
	}

	public function cek_spak()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_kelahiran')->row_array();
	}

	public function cek_skd()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_domisili')->row_array();
	}

	public function cek_skp()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_keterangan_pengantar')->row_array();
	}

	public function cek_skk()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		$this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_kematian')->row_array();
	}

	public function cek_skkt()
	{
		$this->db->where('id_warga', $this->session->userdata('id_warga'));
		// $this->db->where('status', 'Menunggu Verifikasi');
		return $this->db->get('surat_kematian_terbit')->row_array();
	}
}
