<?php

class PenambanganBawahLaut_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT pbl.Kode, pbl.Alat, pbl.KoordinatAstronomis, l.Nama AS LokasiLaut, 
                m.Nama AS Mineral
            FROM PENAMBANGAN_BAWAH_LAUT AS pbl
                JOIN LAUT AS l ON pbl.KodeLaut=l.Kode
                JOIN MINERAL AS m ON pbl.KodeMineral=m.Kode'
            )->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query(
            'SELECT pbl.Kode, pbl.Alat, pbl.KoordinatAstronomis, l.Nama AS LokasiLaut, 
                m.Nama AS Mineral
            FROM PENAMBANGAN_BAWAH_LAUT AS pbl
                JOIN LAUT AS l ON pbl.KodeLaut=l.Kode
                JOIN MINERAL AS m ON pbl.KodeMineral=m.Kode
            WHERE pbl.Kode=\'' . $code . '\''
        )->row_array();
    }
}

