<?php
class M_desa extends CI_Model
{
    public function create($data)
    {
        $this->db->insert('desa', $data);
    }

    public function getDesa()
    {
        $this->db->order_by('id_desa', 'DESC');
        return $this->db->get('desa')->result();
    }

    public function getEdit($id)
    {
        $this->db->where('id_desa', $id);
        return $this->db->get('desa')->result();
    }

    public function edit($data, $id)
    {
        $this->db->where('id_desa', $id);
        $this->db->update('desa', $data);
    }

    public function getDetail($id)
    {
        $this->db->where('id_desa', $id);
        return $this->db->get('desa')->result();
    }

    public function delete($id)
    {
        $this->db->where('id_desa', $id);
        $this->db->delete('desa');
    }
}
