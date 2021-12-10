<?php

class Provinsi_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM PROVINSI')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM PROVINSI WHERE Kode=\'' . $code . '\'')->row_array();
    }
}

