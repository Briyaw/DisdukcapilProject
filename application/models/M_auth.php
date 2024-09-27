<?php
class M_auth extends CI_Model
{
    public function loginAdmin($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('administrator')->row_array();
    }

    public function loginKec($email)
    {
        $this->db->where('email', $email);
        return $this->db->get('oprkec')->row_array();
    }

    public function loginUser($email)
    {
        $this->db->where('users.email', $email);
        $this->db->join('warga', 'warga.id_warga=users.id_warga');
        return $this->db->get('users')->row_array();
    } 

    public function created($data)
    {
        $this->db->insert('users', $data);
    }
}
