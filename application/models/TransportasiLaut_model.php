<?php

class TransportasiLaut_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT tl.Kode, k.Nama AS NamaKapal, l.Nama AS NamaLaut, 
                CONVERT(varchar, tl.WaktuBerangkat, 8) AS JamBerangkat,
                CONVERT(varchar, tl.WaktuSampai, 8) AS JamSampai, 
                b_d.Nama AS NamaPelabuhanDari, b_k.Nama AS NamaPelabuhanKe 
            FROM TRANSPORTASI_LAUT AS tl
                JOIN KAPAL AS k ON tl.KodeKapal=k.Kode
                JOIN LAUT AS l ON tl.KodeLaut=l.Kode
                JOIN PELABUHAN AS b_d ON tl.PelabuhanDari=b_d.Kode
                JOIN PELABUHAN AS b_k ON tl.PelabuhanSampai=b_k.Kode'
        )->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query(
            'SELECT tl.Kode, k.Nama AS NamaKapal, l.Nama AS NamaLaut, 
                CONVERT(varchar, tl.WaktuBerangkat, 8) AS JamBerangkat,
                CONVERT(varchar, tl.WaktuSampai, 8) AS JamSampai, 
                b_d.Nama AS NamaPelabuhanDari, b_k.Nama AS NamaPelabuhanKe 
            FROM TRANSPORTASI_LAUT AS tl
                JOIN KAPAL AS k ON tl.KodeKapal=k.Kode
                JOIN LAUT AS l ON tl.KodeLaut=l.Kode
                JOIN PELABUHAN AS b_d ON tl.PelabuhanDari=b_d.Kode
                JOIN PELABUHAN AS b_k ON tl.PelabuhanSampai=b_k.Kode
            WHERE tl.Kode=\'' . $code . '\''
        )->row_array();
    }
}

