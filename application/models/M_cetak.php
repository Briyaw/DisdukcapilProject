<?php
class M_cetak extends CI_Model
{
    public function cetakSkk($id)
    {
        $this->db->where('surat_kematian.id', $id);
        $this->db->join('warga', 'warga.id_warga = surat_kematian.id_warga');
        return $this->db->get('surat_kematian')->result();
    }

    public function cetakSkd($id)
    {
        $this->db->where('surat_domisili.id', $id);
        $this->db->join('warga', 'warga.id_warga = surat_domisili.id_warga');
        return $this->db->get('surat_domisili')->result();
    }

    public function cetakSku($id)
    {
        $this->db->where('surat_usaha.id', $id);
        $this->db->join('warga', 'warga.id_warga = surat_usaha.id_warga');
        return $this->db->get('surat_usaha')->result();
    }

    public function cetakSktm($id)
    {
        $this->db->where('surat_tidak_mampu.id', $id);
        $this->db->join('warga', 'warga.id_warga = surat_tidak_mampu.id_warga');
        return $this->db->get('surat_tidak_mampu')->result();
    }

    public function cetakSkp($id)
    {
        $this->db->where('surat_keterangan_pengantar.id', $id);
        $this->db->join('warga', 'warga.id_warga = surat_keterangan_pengantar.id_warga');
        return $this->db->get('surat_keterangan_pengantar')->result();
    }

    public function cetakSpak($id)
    {
        $this->db->where('surat_kelahiran.id', $id);
        $this->db->join('warga', 'warga.id_warga = surat_kelahiran.id_warga');
        return $this->db->get('surat_kelahiran')->result();
    }
}
