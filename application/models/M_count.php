<?php
class M_count extends CI_Model
{
    public function cUsers()
    {
        return $this->db->get('users')->num_rows();
    }

    public function cWarga()
    {
        return $this->db->get('warga')->num_rows();
    }
    //jmlh permohonan
    public function dPsd()
    {
        return $this->db->get('surat_domisili')->num_rows();
    }

    public function dPsk()
    {
        return $this->db->get('surat_kelahiran')->num_rows();
    }

    public function dPkk()
    {
        return $this->db->get('surat_kematian')->num_rows();
    }

    public function dPskp()
    {
        return $this->db->get('surat_keterangan_pengantar')->num_rows();
    }

    public function dPsktm()
    {
        return $this->db->get('surat_tidak_mampu')->num_rows();
    }

    public function dPsku()
    {
        return $this->db->get('surat_usaha')->num_rows();
    }

    //permohonan menunggu verifikasi

    public function mvSkd()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_domisili WHERE status = 'Menunggu Verifikasi'");
        return $query->row_array();
    }

    public function mvSk()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_kelahiran WHERE status = 'Menunggu Verifikasi'");
        return $query->row_array();
    }

    public function mvSkk()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_kematian WHERE status = 'Menunggu Verifikasi'");
        return $query->row_array();
    }

    public function mvSkp()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_pengantar WHERE status = 'Menunggu Verifikasi'");
        return $query->row_array();
    }

    public function mvSktm()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_tidak_mampu WHERE status = 'Menunggu Verifikasi'");
        return $query->row_array();
    }

    public function mvSku()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_usaha WHERE status = 'Menunggu Verifikasi'");
        return $query->row_array();
    }

    //permohonan diterima
    public function pdSkd()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_domisili WHERE status = 'Diterima'");
        return $query->row_array();
    }

    public function pdSk()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_kelahiran WHERE status = 'Diterima'");
        return $query->row_array();
    }

    public function pdSkk()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_kematian WHERE status = 'Diterima'");
        return $query->row_array();
    }

    public function pdSkp()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_pengantar WHERE status = 'Diterima'");
        return $query->row_array();
    }

    public function pdSktm()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_tidak_mampu WHERE status = 'Diterima'");
        return $query->row_array();
    }

    public function pdSku()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_usaha WHERE status = 'Diterima'");
        return $query->row_array();
    }


    //permohonan ditolak
    public function ptSkd()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_domisili WHERE status = 'Ditolak'");
        return $query->row_array();
    }

    public function ptSk()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_kelahiran WHERE status = 'Ditolak'");
        return $query->row_array();
    }

    public function ptSkk()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_kematian WHERE status = 'Ditolak'");
        return $query->row_array();
    }

    public function ptSkp()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_pengantar WHERE status = 'Ditolak'");
        return $query->row_array();
    }

    public function ptSktm()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_tidak_mampu WHERE status = 'Ditolak'");
        return $query->row_array();
    }

    public function ptSku()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_usaha WHERE status = 'Ditolak'");
        return $query->row_array();
    }
}
