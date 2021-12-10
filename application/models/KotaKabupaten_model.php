<?php

class KotaKabupaten_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query(
            'SELECT kk.Nama, kk.Kode, kk.Jenis, pr.Nama AS NamaProvinsi
            FROM KOTA_KABUPATEN AS kk JOIN PROVINSI AS pr ON kk.KodeProvinsi=pr.Kode'
        )->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query(
            'SELECT kk.Nama, kk.Kode, kk.Jenis, pr.Nama AS NamaProvinsi
            FROM KOTA_KABUPATEN AS kk JOIN PROVINSI AS pr ON kk.KodeProvinsi=pr.Kode
            WHERE kk.Kode=\'' . $code . '\'')->row_array();
    }
}

