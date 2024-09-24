<?php
class M_operator extends CI_Model
{
    public function getOperator()
    {
        $this->db->where('id_warga', $this->session->userdata('id_warga'));
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
}
