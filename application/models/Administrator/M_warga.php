<?php
class M_warga extends CI_Model
{
    public function create($data)
    {
        $this->db->insert('warga', $data);
    }

    public function getWarga()
    {
        $this->db->order_by('id_warga', 'DESC');
        return $this->db->get('warga')->result();
    }

    public function getEdit($id)
    {
        $this->db->where('id_warga', $id);
        return $this->db->get('warga')->result();
    }

    public function edit($data, $id)
    {
        $this->db->where('id_warga', $id);
        $this->db->update('warga', $data);
    }

    public function getDetail($id)
    {
        $this->db->where('id_warga', $id);
        return $this->db->get('warga')->result();
    }

    public function delete($id)
    {
        $this->db->where('id_warga', $id);
        $this->db->delete('warga');
    }
}
