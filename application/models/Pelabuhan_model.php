<?php

class Pelabuhan_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT b.Nama, b.Kode, b.Jenis, b.Kecamatan, kk.Nama AS NamaKotaKab, kk.Jenis AS JenisKK 
            FROM PELABUHAN AS b JOIN KOTA_KABUPATEN AS kk ON b.KodeKotaKab=kk.Kode'
        )->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query(
            'SELECT b.Nama, b.Kode, b.Jenis, b.Kecamatan, kk.Nama AS NamaKotaKab, kk.Jenis AS JenisKK 
            FROM PELABUHAN AS b JOIN KOTA_KABUPATEN AS kk ON b.KodeKotaKab=kk.Kode
            WHERE b.Kode=\'' . $code . '\''
        )->row_array();
    }
}

