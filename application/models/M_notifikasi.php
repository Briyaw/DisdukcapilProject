<?php
class M_notifikasi extends CI_Model
{
    public function nSkd()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_domisili WHERE notifikasi = '1'");
        return $query->row_array();
    }

    public  function nSktm()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_tidak_mampu WHERE notifikasi = '1' ");
        return $query->row_array();
    }

    public  function nSku()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_usaha WHERE notifikasi = '1' ");
        return $query->row_array();
    }

    public function nSkp()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_pengantar WHERE notifikasi = '1' ");
        return $query->row_array();
    }

    public function nSpak()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_kelahiran WHERE notifikasi = '1' ");
        return $query->row_array();
    }

    public function nSkk()
    {
        $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_kematian WHERE notifikasi = '1' ");
        return $query->row_array();
    }

    //update notifikasi user
    public function updateSd()
    {
        $this->db->set('notifikasi', '0');
        $this->db->update('surat_domisili');
    }

    public function updateSpak()
    {
        $this->db->set('notifikasi', '0');
        $this->db->update('surat_kelahiran');
    }

    public function updateSk()
    {
        $this->db->set('notifikasi', '0');
        $this->db->update('surat_kematian');
    }

    public function updateSkp()
    {
        $this->db->set('notifikasi', '0');
        $this->db->update('surat_keterangan_pengantar');
    }

    public function updateSktm()
    {
        $this->db->set('notifikasi', '0');
        $this->db->update('surat_tidak_mampu');
    }

    public function updateSu()
    {
        $this->db->set('notifikasi', '0');
        $this->db->update('surat_usaha');
    }

    //notifikasi administrator


    public function aSkd()
    {
        if ($this->session->userdata('role_id') == 1) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_domisili WHERE status = 'Menunggu Verifikasi'");
            return $query->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_domisili WHERE status = 'Terverifikasi'");
            return $query->row_array();
        }
    }

    public function aSktm()
    {
        if ($this->session->userdata('role_id') == 1) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_tidak_mampu WHERE status = 'Menunggu Verifikasi'");
            return $query->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_tidak_mampu WHERE status = 'Terverifikasi'");
            return $query->row_array();
        }
    }

    public function aSku()
    {
        if ($this->session->userdata('role_id') == 1) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_usaha WHERE status = 'Menunggu Verifikasi'");
            return $query->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_usaha WHERE status = 'Terverifikasi'");
            return $query->row_array();
        }
    }

    public function aSkp()
    {
        if ($this->session->userdata('role_id') == 1) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_pengantar WHERE status = 'Menunggu Verifikasi'");
            return $query->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_keterangan_pengantar WHERE status = 'Terverifikasi'");
            return $query->row_array();
        }
    }

    public function aSpak()
    {
        if ($this->session->userdata('role_id') == 1) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_kelahiran WHERE status = 'Menunggu Verifikasi'");
            return $query->row_array();
        } else if ($this->session->userdata('role_id') == 2) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_kelahiran WHERE status = 'Terverifikasi'");
            return $query->row_array();
        }
    }

    public function aSkk()
    {
        if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2 || $this->session->userdata('role_id') == 3) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_kematian WHERE status = 'Menunggu Verifikasi'");
            return $query->row_array();
        } else if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2 || $this->session->userdata('role_id') == 3) {
            $query = $this->db->query("SELECT COUNT(*) AS jumlah FROM surat_kematian WHERE status = 'Terverifikasi'");
            return $query->row_array();
        }
    }
}
