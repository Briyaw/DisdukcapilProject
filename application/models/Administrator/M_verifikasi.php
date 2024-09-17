<?php
class M_verifikasi extends CI_Model
{
    //verifikasi skd
    public function getSkd()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('surat_domisili')->result();
    }

    public function skdverif($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_domisili');
    }

    public function komentarskd($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_domisili');
    }

    public function getPreviewSkd($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_domisili.id_warga');
        return $this->db->get('surat_domisili')->result();
    }

    //verifikasi sktm

    public function getSktm()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('surat_tidak_mampu')->result();
    }

    public function sktmverif($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_tidak_mampu');
    }

    public function komentarsktm($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_tidak_mampu');
    }

    public function getPreviewSktm($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_tidak_mampu.id_warga');
        return $this->db->get('surat_tidak_mampu')->result();
    }


    //verifikasi sku
    public function getSku()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('surat_usaha')->result();
    }

    public function skuverif($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_usaha');
    }

    public function komentarsku($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_usaha');
    }

    public function getPreviewSku($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_usaha.id_warga');
        return $this->db->get('surat_usaha')->result();
    }

    //verifikasi spak
    public function getSpak()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('surat_kelahiran')->result();
    }

    public function spakverif($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_kelahiran');
    }

    public function komentarspak($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_kelahiran');
    }

    public function getPreviewSpak($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_kelahiran.id_warga');
        return $this->db->get('surat_kelahiran')->result();
    }

    //verifikasi skk
    public function getSkk()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('surat_kematian')->result();
    }

    public function skkverif($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_kematian');
    }

    public function komentarskk($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_kematian');
    }

    public function getPreviewSkk($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_kematian.id_warga');
        return $this->db->get('surat_kematian')->result();
    }

    //verifikasi skp
    public function getSkp()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('surat_keterangan_pengantar')->result();
    }

    public function skpverif($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_keterangan_pengantar');
    }

    public function komentarskp($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->set($data);
        $this->db->update('surat_keterangan_pengantar');
    }

    public function getPreviewSkp($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_keterangan_pengantar.id_warga');
        return $this->db->get('surat_keterangan_pengantar')->result();
    }

    //hapus surat verifikasi
    public function hDomisili($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_domisili');
    }

    public function hKelahiran($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_kelahiran');
    }

    public function hKematian($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_kematian');
    }

    public function hKeteranganP($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_keterangan_pengantar');
    }

    public function hTidakMampu($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_tidak_mampu');
    }

    public function hUsaha($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_usaha');
    }
}
