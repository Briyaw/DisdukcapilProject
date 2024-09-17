<?php
class M_bpp extends CI_Model
{

    public function getBpp()
    {
        
        $this->db->order_by('id', 'DESC');
        $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
        return $this->db->get('surat_kematian')->result();
    }

    public function getDetail($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
        return $this->db->get('surat_kematian')->result();
    }

    public function getDateBpp($from_date, $to_date)
    {
        $this->db->where('tanggal_meninggal >=', $from_date);
        $this->db->where('tanggal_meninggal <=', $to_date);
        $this->db->order_by('id', 'DESC');
        $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
        return $this->db->get('surat_kematian')->result();
    }


    // public function getPreviewSkk($id)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
    //     return $this->db->get('surat_kematian')->result();
    // }

}



