<?php
class M_getData extends CI_Model
{
    public function getDataId()
    {
        $this->db->where('users.id_warga', $this->session->userdata('id_warga'));
        $this->db->join('warga', 'warga.id_warga = users.id_warga');
        
        $this->db->join('surat_kematian', 'surat_kematian.id_warga = warga.id_warga');
        $this->db->join('surat_kematian_terbit', 'surat_kematian_terbit.id_warga = surat_kematian.id_warga');

        return $this->db->get('users')->result();
    }

    public function getSkdId()
    {
        $this->db->select_max('id');
        return $this->db->get('surat_domisili')->row_array();
    }

    public function getSkpId()
    {
        $this->db->select_max('id');
        return $this->db->get('surat_domisili')->row_array();
    }

    public function getSkkId()
    {
        $this->db->select_max('id');
        return $this->db->get('surat_kematian')->row_array();
    }

    public function getSkktId()
    {
        $this->db->select_max('id');
        return $this->db->get('surat_kematian_terbit')->row_array();
    }


    public function getSktmId()
    {
        $this->db->select_max('id');
        return $this->db->get('surat_tidak_mampu')->row_array();
    }

    public function getSkuId()
    {
        $this->db->select_max('id');
        return $this->db->get('surat_usaha')->row_array();
    }

    public function getSpakId()
    {
        $this->db->select_max('id');
        return $this->db->get('surat_kelahiran')->row_array();
    }
}
