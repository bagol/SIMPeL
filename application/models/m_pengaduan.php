<?php

class m_pengaduan extends CI_Controller
{
    public function getFullAll($id)
    {
        return $this->load->db->query();
    }

    public function getFullOne()
    {
        return $this->db->query();
    }

    public function save($data)
    {
        $this->db->insert('data_pengaduan', $data);
    }
}
