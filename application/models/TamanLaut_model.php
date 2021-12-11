<?php

class TamanLaut_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT tmn.Nama, tmn.Kode, tmn.Luas, tmn.KoordinatAstronomis, tmn.KodeWisata,
                pr.Nama AS NamaProvinsi, l.Nama AS LokasiLaut
            FROM TAMAN_LAUT AS tmn 
                JOIN PROVINSI AS pr ON tmn.KodeProvinsi=pr.Kode
                JOIN LAUT AS l ON tmn.KodeLaut=l.Kode'
        )->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query(
            'SELECT tmn.Nama, tmn.Kode, tmn.Luas, tmn.KoordinatAstronomis, tmn.KodeWisata,
                pr.Nama AS NamaProvinsi, l.Nama AS LokasiLaut
            FROM TAMAN_LAUT AS tmn 
                JOIN PROVINSI AS pr ON tmn.KodeProvinsi=pr.Kode
                JOIN LAUT AS l ON tmn.KodeLaut=l.Kode
            WHERE tmn.Kode=\'' . $code . '\''
        )->row_array();
    }
}

