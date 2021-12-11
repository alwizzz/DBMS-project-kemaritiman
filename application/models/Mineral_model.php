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

    public function getLaut_MN($code)
    {
        return $this->db->query(
            'SELECT l.Nama AS NamaLaut, mdl.KodeMineral, mdl.KodeLaut
            FROM MINERAL_DI_LAUT AS mdl JOIN LAUT AS l ON mdl.KodeLaut=l.Kode
            WHERE mdl.KodeMineral=\'' . $code . '\'
            ORDER BY l.Nama'
        )->result_array();
    }
}

