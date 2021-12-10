<?php

class HutanMangrove_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT hm.Nama, hm.Kode, hm.Luas, hm.KoordinatAstronomis, kk.Jenis AS JenisKK,
                kk.Nama AS LokasiKotaKab, ow.Kode AS KodeObjekWisata
            FROM HUTAN_MANGROVE AS hm 
                JOIN KOTA_KABUPATEN AS kk ON hm.KodeKotaKab=kk.Kode
                LEFT JOIN OBJEK_WISATA AS ow ON hm.KodeWisata=ow.Kode'
        )->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query(
            'SELECT hm.Nama, hm.Kode, hm.Luas, hm.KoordinatAstronomis, kk.Jenis AS JenisKK,
                kk.Nama AS LokasiKotaKab, ow.Kode AS KodeObjekWisata
            FROM HUTAN_MANGROVE AS hm 
                JOIN KOTA_KABUPATEN AS kk ON hm.KodeKotaKab=kk.Kode
                LEFT JOIN OBJEK_WISATA AS ow ON hm.KodeWisata=ow.Kode
            WHERE hm.Kode=\'' . $code . '\''
        )->row_array();
    }
}

