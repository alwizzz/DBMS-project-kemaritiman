<?php

class Mineral_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM MINERAL')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM MINERAL WHERE Kode=\'' . $code . '\'')->row_array();
    }
}

