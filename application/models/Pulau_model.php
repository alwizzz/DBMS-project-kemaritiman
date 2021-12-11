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

    public function getProvinsi_MN($code)
    {
        return $this->db->query(
            'SELECT pr.Nama AS NamaProvinsi, pmp.KodePulau, pmp.KodeProvinsi
            FROM PULAU_MEMILIKI_PROVINSI AS pmp JOIN PROVINSI AS pr ON pmp.KodeProvinsi=pr.Kode
            WHERE pmp.KodePulau=\'' . $code . '\'
            ORDER BY pr.Nama'
        )->result_array();
    }
}

