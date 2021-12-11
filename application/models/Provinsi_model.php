<?php

class Provinsi_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM PROVINSI')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM PROVINSI WHERE Kode=\'' . $code . '\'')->row_array();
    }

    public function getPulau_MN($code)
    {
        return $this->db->query(
            'SELECT pl.Nama AS NamaPulau, pmp.KodePulau, pmp.KodeProvinsi
            FROM PULAU_MEMILIKI_PROVINSI AS pmp JOIN PULAU AS pl ON pmp.KodePulau=pl.Kode
            WHERE pmp.KodeProvinsi=\'' . $code . '\'
            ORDER BY pl.Nama'
        )->result_array();
    }

    public function getKotaKab_N1($code)
    {
        $query = $this->db->query(
            'SELECT kk.Kode AS KodeKK, pr.Kode, kk.Nama AS NamaKK, kk.Jenis AS JenisKK  
            FROM KOTA_KABUPATEN AS kk RIGHT JOIN PROVINSI AS pr ON kk.KodeProvinsi=pr.Kode
            WHERE pr.Kode=\'' . $code . '\'
            ORDER BY kk.Kode'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['KodeKK']] = $q;
        }

        return $assoc;
    }

    public function getTamanLaut_N1($code)
    {
        $query = $this->db->query(
            'SELECT tl.Kode AS KodeTL, pr.Kode, tl.Nama AS NamaTL  
            FROM TAMAN_LAUT AS tl RIGHT JOIN PROVINSI AS pr ON tl.KodeProvinsi=pr.Kode
            WHERE pr.Kode=\'' . $code . '\'
            ORDER BY tl.Kode'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['KodeTL']] = $q;
        }

        return $assoc;
    }
}
 
