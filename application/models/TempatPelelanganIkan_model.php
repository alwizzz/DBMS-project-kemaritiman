<?php

class TempatPelelanganIkan_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT tpi.Nama, tpi.Kode, kk.Nama AS NamaKotaKab, kk.Jenis AS JenisKK 
            FROM TEMPAT_PELELANGAN_IKAN AS tpi JOIN KOTA_KABUPATEN AS kk ON tpi.KodeKotaKab=kk.Kode'
        )->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query(
            'SELECT tpi.Nama, tpi.Kode, kk.Nama AS NamaKotaKab, kk.Jenis AS JenisKK 
            FROM TEMPAT_PELELANGAN_IKAN AS tpi JOIN KOTA_KABUPATEN AS kk ON tpi.KodeKotaKab=kk.Kode
            WHERE tpi.Kode=\'' . $code . '\''
        )->row_array();
    }
}

