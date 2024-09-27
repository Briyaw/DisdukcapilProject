<?php
class M_kec extends CI_Model
{
    
    public function tambahKec($data)
    {
        $this->db->insert('oprkec', $data);
    }

    public function getData()
    {
        $this->db->order_by('id_oprkec', 'DESC');
        return $this->db->get('oprkec')->result();
    }

    public function updateKec($data, $id)
    {
        $this->db->where('id_oprkec', $id);
        $this->db->update('oprkec', $data);
    }

    public function deletedKec($id)
    {
        $this->db->where('id_oprkec', $id);
        $this->db->delete('oprkec');
    }
}
