<?php

class Laut_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM LAUT')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM LAUT WHERE Kode=\'' . $code . '\'')->row_array();
    }
}