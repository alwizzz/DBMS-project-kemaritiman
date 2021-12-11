<?php

class Teluk_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT t.Nama, t.Kode, t.KoordinatAstronomis, t.JarakMenjorok, pl.Nama AS NamaPulau 
            FROM TELUK AS t JOIN PULAU AS pl ON t.KodePulau=pl.Kode'
        )->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query(
            'SELECT t.Nama, t.Kode, t.KoordinatAstronomis, t.JarakMenjorok, pl.Nama AS NamaPulau 
            FROM TELUK AS t JOIN PULAU AS pl ON t.KodePulau=pl.Kode
            WHERE t.Kode=\'' . $code . '\''
        )->row_array();
    }
}

