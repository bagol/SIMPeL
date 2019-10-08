<?php

class m_cabang extends CI_Controller
{
    public function save($data)
    {
        $this->db->insert('cabang', $data);
    }

    public function edit($where)
    {
    }

    public function delete($where)
    {
    }

    public function getOne()
    {
    }

    public function getAll()
    {
    }
}
