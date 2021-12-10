<?php

class Pantai_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT p.Nama, p.Kode, p.GarisPantai, p.KoordinatAstronomis, p.Kecamatan, 
                kk.Nama AS NamaKotaKab, p.BatasPerairan, ow.Kode AS KodeObjekWisata, kk.Jenis AS JenisKK
            FROM PANTAI AS p
                JOIN KOTA_KABUPATEN AS kk ON p.KodeKotaKab=kk.Kode
                LEFT JOIN OBJEK_WISATA AS ow ON p.KodeWisata=ow.Kode'
        )->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query(
            'SELECT p.Nama, p.Kode, p.GarisPantai, p.KoordinatAstronomis, p.Kecamatan, 
                kk.Nama AS NamaKotaKab, p.BatasPerairan, ow.Kode AS KodeObjekWisata, kk.Jenis AS JenisKK
            FROM PANTAI AS p
                JOIN KOTA_KABUPATEN AS kk ON p.KodeKotaKab=kk.Kode
                LEFT JOIN OBJEK_WISATA AS ow ON p.KodeWisata=ow.Kode
            WHERE p.Kode=\'' . $code . '\''
        )->row_array();
    }
}

