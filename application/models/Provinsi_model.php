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

    public function getPulau_MN($code)
    {
        return $this->db->query(
            'SELECT pl.Nama AS NamaPulau, pmp.KodePulau, pmp.KodeProvinsi
            FROM PULAU_MEMILIKI_PROVINSI AS pmp JOIN PULAU AS pl ON pmp.KodePulau=pl.Kode
            WHERE pmp.KodeProvinsi=\'' . $code . '\'
            ORDER BY pl.Nama'
        )->result_array();
    }
}

