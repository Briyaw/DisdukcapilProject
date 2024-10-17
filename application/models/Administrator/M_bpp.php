<?php
class M_bpp extends CI_Model
{

    public function getBpp()
    { 
        $this->db->order_by('id', 'DESC');
        $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
        return $this->db->get('surat_kematian')->result();
    }

    public function getKecBpp($kecamatan)
    { 
        $this->db->order_by('id', 'DESC');
        $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
        $this->db->where('warga.kecamatan', $kecamatan);
        return $this->db->get('surat_kematian')->result();
    }

    public function getDetail($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
        return $this->db->get('surat_kematian')->result();
    }

    public function getDateBpp($from_date, $to_date, $kec, $des)
    {
        if(($from_date == "1970-01-01") && ($to_date == "1970-01-01")){
            $this->db->order_by('id', 'DESC');
            $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
            return $this->db->get('surat_kematian')->result();
        }

        else{
            
            $this->db->order_by('id', 'DESC');
            $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
            $this->db->where('tanggal_meninggal >=', $from_date);
            $this->db->where('tanggal_meninggal <=', $to_date);
            $this->db->where('warga.kecamatan', $kec);
            $this->db->where('warga.desa', $des);
            return $this->db->get('surat_kematian')->result();
        }
    }

    public function getDateKecBpp($from_date, $to_date, $kecamatan , $des)
    {
        if(($from_date == "1970-01-01") && ($to_date == "1970-01-01")){
            $this->db->order_by('id', 'DESC');
            $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');   
            $this->db->where('warga.kecamatan', $kecamatan);
            $this->db->where('warga.desa', $des);
            return $this->db->get('surat_kematian')->result();
        }
        
        else{
            $this->db->order_by('id', 'DESC');
            $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
            $this->db->where('tanggal_meninggal >=', $from_date);
            $this->db->where('tanggal_meninggal <=', $to_date);
            $this->db->where('warga.kecamatan', $kecamatan);
            $this->db->where('warga.desa', $des);
            return $this->db->get('surat_kematian')->result();
        }
        
    }

    public function cetakBpp()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->join('warga', 'warga.id_warga = surat_kematian.id_warga');
        return $this->db->get('surat_kematian')->result();
    }

    public function cetakDateBpp($from_date, $to_date, $kec, $des)
    {
        if(($from_date == "1970-01-01") && ($to_date == "1970-01-01")){
            $this->db->order_by('id', 'DESC');
            $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
            return $this->db->get('surat_kematian')->result();
        }
        else{
            $this->db->order_by('id', 'DESC');
            $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
            $this->db->where('tanggal_meninggal >=', $from_date );
            $this->db->where('tanggal_meninggal <=', $to_date);
            $this->db->where('warga.kecamatan', $kec);
            $this->db->where('warga.desa', $des);
           
            return $this->db->get('surat_kematian')->result();
        }
    }
    
    // public function getPreviewSkk($id)
    // {
    //     $this->db->where('id', $id);
    //     $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
    //     return $this->db->get('surat_kematian')->result();
    // }

}



