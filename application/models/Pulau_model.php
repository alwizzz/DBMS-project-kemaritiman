<?php

class Pulau_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM PULAU')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM PULAU WHERE Kode=\'' . $code . '\'')->row_array();
    }
}

