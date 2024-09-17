<?php
class M_admin extends CI_Model
{
    public function tambahAdmin($data)
    {
        $this->db->insert('administrator', $data);
    }

    public function getData()
    {
        $this->db->order_by('id', 'DESC');
        return $this->db->get('administrator')->result();
    }

    public function updateAdmin($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('administrator', $data);
    }

    public function deletedAdmin($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('administrator');
    }
}
