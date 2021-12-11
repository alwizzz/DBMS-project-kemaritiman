<?php

class Selat_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT s.Nama, s.Kode, s.KoordinatAstronomis, s.JarakAntarPulau, 
                p_d.Nama AS NamaPulauDari, p_k.Nama AS NamaPulauKe
            FROM SELAT AS s
                JOIN PULAU AS p_d ON s.KodePulauDari=p_d.Kode
                JOIN PULAU AS p_k ON s.KodePulauKe=p_k.Kode'
        )->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query(
            'SELECT s.Nama, s.Kode, s.KoordinatAstronomis, s.JarakAntarPulau, 
                p_d.Nama AS NamaPulauDari, p_k.Nama AS NamaPulauKe
            FROM SELAT AS s
                JOIN PULAU AS p_d ON s.KodePulauDari=p_d.Kode
                JOIN PULAU AS p_k ON s.KodePulauKe=p_k.Kode
            WHERE s.Kode=\'' . $code . '\''
        )->row_array();
    }
}

