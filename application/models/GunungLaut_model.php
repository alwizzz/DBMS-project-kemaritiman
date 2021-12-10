<?php

class GunungLaut_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT gn.Nama, gn.Status, gn.Kedalaman, gn.KoordinatAstronomis, l.Kode AS KodeLaut, l.Nama AS LokasiLaut  
            FROM GUNUNG_LAUT AS gn JOIN LAUT AS l ON gn.KodeLaut=l.Kode'
        )->result_array();
    }

    public function getDetail($code, $name)
    {
        return $this->db->query(
            'SELECT gn.Nama, gn.Status, gn.Kedalaman, gn.KoordinatAstronomis, l.Kode AS KodeLaut, l.Nama AS LokasiLaut  
            FROM GUNUNG_LAUT AS gn JOIN LAUT AS l ON gn.KodeLaut=l.Kode
            WHERE gn.Nama LIKE \'' . $name . '%\' AND l.Kode=\'' . $code . '\''
        )->row_array();
    }
}

