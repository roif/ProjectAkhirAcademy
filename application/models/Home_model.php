<?php

class Home_model extends CI_Model
{
    public function tambahDataUser($data)
    {
        $this->db->insert('user', $data);
    }
}
