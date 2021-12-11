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

    public function getAdvancedQuery($code)
    {
        return $this->db->query(
            'SELECT t.Kode, 
            CASE WHEN t.KodeTL IS NOT NULL THEN \'Taman Laut\'
                WHEN t.KodeHM IS NOT NULL THEN \'Hutan Mangrove\'
                WHEN t.KodePantai IS NOT NULL THEN \'Pantai\'
            END AS Jenis,
            CASE WHEN t.KodeTL IS NOT NULL THEN t.KodeTL
                WHEN t.KodeHM IS NOT NULL THEN t.KodeHM
                WHEN t.KodePantai IS NOT NULL THEN t.KodePantai
            END AS KodeDestinasi
            FROM 
            (
                SELECT ow.Kode, tl.Kode AS KodeTL, pnt.Kode AS KodePantai, hm.Kode AS KodeHM
                FROM OBJEK_WISATA AS ow
                    LEFT JOIN TAMAN_LAUT AS tl ON tl.KodeWisata=ow.Kode
                    LEFT JOIN PANTAI AS pnt ON pnt.KodeWisata=ow.Kode 
                    LEFT JOIN HUTAN_MANGROVE AS hm ON hm.KodeWisata=ow.Kode
            )t
            WHERE Kode =\'' . $code . '\''
        )->row_array();
    }
}

