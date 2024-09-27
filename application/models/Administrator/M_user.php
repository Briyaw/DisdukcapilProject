<?php
class M_user extends CI_Model
{
    public function created($data)
    {
        $this->db->insert('users', $data);
    }

    public function getUser()
    {
        $this->db->order_by('id_users', 'DESC');
        $this->db->join('warga', 'warga.id_warga = users.id_warga');
        return $this->db->get('users')->result();
    }

    public function updateUser($data, $id)
    {
        $this->db->where('id_users', $id);
        $this->db->set($data);
        $this->db->update('users');
    }

    public function deleteUser($id)
    {
        $this->db->where('id_users', $id);
        $this->db->delete('users');
    }

    // public function cekNik($nik)
    // {
    //     $this->db->where('nik', $nik);
    //     return $this->db->get('warga')->row_array();
    // }

    public function cekNik($nik)
    {
        $this->db->where('nik', $nik);
        return $this->db->get('warga')->row_array();
    }

}
