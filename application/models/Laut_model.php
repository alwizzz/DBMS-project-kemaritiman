<?php

class Laut_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM LAUT')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM LAUT WHERE Kode=\'' . $code . '\'')->row_array();
    }

    public function getEkstraktif_MN($code)
    {
        return $this->db->query(
            'SELECT e.Nama AS NamaEkstraktif, edl.KodeEkstraktif, edl.KodeLaut
            FROM EKSTRAKTIF_DI_LAUT AS edl JOIN EKSTRAKTIF AS e ON edl.KodeEkstraktif=e.Kode
            WHERE edl.KodeLaut=\'' . $code . '\'
            ORDER BY e.Nama'
        )->result_array();
    }

    public function getMineral_MN($code)
    {
        return $this->db->query(
            'SELECT m.Nama AS NamaMineral, mdl.KodeMineral, mdl.KodeLaut
            FROM MINERAL_DI_LAUT AS mdl JOIN MINERAL AS m ON mdl.KodeMineral=m.Kode
            WHERE mdl.KodeLaut=\'' . $code . '\'
            ORDER BY m.Nama'
        )->result_array();
    }
}