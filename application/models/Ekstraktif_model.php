<?php

class Ekstraktif_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM EKSTRAKTIF')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM EKSTRAKTIF WHERE Kode=\'' . $code . '\'')->row_array();
    }

    public function getLaut_MN($code)
    {
        return $this->db->query(
            'SELECT edl.KodeEkstraktif, edl.KodeLaut, l.Nama AS NamaLaut
            FROM EKSTRAKTIF_DI_LAUT AS edl JOIN LAUT AS l ON edl.KodeLaut=l.Kode
            WHERE edl.KodeEkstraktif=\'' . $code . '\'
            ORDER BY l.Nama'
        )->result_array();
    }
}

