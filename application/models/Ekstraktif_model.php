<?php

class Ekstraktif_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM EKSTRAKTIF')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM EKSTRAKTIF WHERE Kode=\'' . $code . '\'')->row_array();
    }
}

