<?php

class AktivitasPenangkapanIkan_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT api.Kode, api.TanggalBerangkat, api.TanggalPulang, l.Nama AS NamaLaut 
            FROM AKTIVITAS_PENANGKAPAN_IKAN AS api JOIN LAUT AS l ON api.KodeLaut=l.Kode'
        )->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query(
            'SELECT api.Kode, api.TanggalBerangkat, api.TanggalPulang, l.Nama AS NamaLaut 
            FROM AKTIVITAS_PENANGKAPAN_IKAN AS api JOIN LAUT AS l ON api.KodeLaut=l.Kode
            WHERE api.Kode=\'' . $code . '\''
        )->row_array();
    }
}

