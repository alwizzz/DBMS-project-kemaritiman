<?php

class Palung_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT p.Nama, p.Kedalaman, l.Nama AS LokasiLaut, p.KodeLaut 
            FROM PALUNG AS p JOIN LAUT AS l ON p.KodeLaut=l.Kode'
        )->result_array();
    }

    public function getDetail($code, $name)
    {
        return $this->db->query(
            'SELECT p.Nama, p.Kedalaman, l.Nama AS LokasiLaut, p.KodeLaut
            FROM PALUNG AS p JOIN LAUT AS l ON p.KodeLaut=l.Kode 
            WHERE l.Kode=\'' . $code . '\' AND p.Nama LIKE \'' . $name . '%\''
        )->row_array();
    }
}

