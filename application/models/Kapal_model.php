<?php

class Kapal_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM KAPAL')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM KAPAL WHERE Kode=\'' . $code . '\'')->row_array();
    }
}

