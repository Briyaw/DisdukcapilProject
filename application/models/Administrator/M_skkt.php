<?php
class M_skkt extends CI_Model
{
    public function create($data)
    {
        $this->db->insert('surat_kematian_terbit', $data);
    }

    public function getSkkt()
    {
        $this->db->order_by('id_warga', 'DESC');
        return $this->db->get('surat_kematian_terbit')->result();
    }

    public function getEdit($id)
    {
        $this->db->where('id_warga', $id);
        return $this->db->get('surat_kematian_terbit')->result();
    }

    public function edit($data, $id)
    {
        $this->db->where('id_warga', $id);
        $this->db->update('surat_kematian_terbit', $data);
    }

    public function getDetail($id)
    {
        $this->db->where('id', $id);
        $this->db->join('warga', 'warga.id_warga=surat_kematian_terbit.id_warga');
        return $this->db->get('surat_kematian_terbit')->result();
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('surat_kematian_terbit');
    }
}
