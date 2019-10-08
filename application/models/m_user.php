<?php

class m_user extends CI_Controller
{
    public function save($data)
    {
        $this->db->insert('user', $data);
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
