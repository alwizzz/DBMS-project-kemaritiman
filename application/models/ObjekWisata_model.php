<?php

class ObjekWisata_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM OBJEK_WISATA')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM OBJEK_WISATA WHERE Kode=\'' . $code . '\'')->row_array();
    }
}

