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

    public function getPelabuhan_N1($code)
    {
        $query = $this->db->query(
            'SELECT pb.Kode AS KodePB, kk.Kode, pb.Nama AS NamaPB  
            FROM PELABUHAN AS pb RIGHT JOIN KOTA_KABUPATEN AS kk ON pb.KodeKotaKab=kk.Kode
            WHERE kk.Kode=\'' . $code . '\'
            ORDER BY pb.Kode'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['KodePB']] = $q;
        }

        return $assoc;
    }

    public function getPantai_N1($code)
    {
        $query = $this->db->query(
            'SELECT pnt.Kode AS KodePantai, kk.Kode, pnt.Nama AS NamaPantai  
            FROM PANTAI AS pnt RIGHT JOIN KOTA_KABUPATEN AS kk ON pnt.KodeKotaKab=kk.Kode
            WHERE kk.Kode=\'' . $code . '\'
            ORDER BY pnt.Kode'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['KodePantai']] = $q;
        }

        return $assoc;
    }

    public function getHutanMangrove_N1($code)
    {
        $query = $this->db->query(
            'SELECT hm.Kode AS KodeHM, kk.Kode, hm.Nama AS NamaHM  
            FROM HUTAN_MANGROVE AS hm RIGHT JOIN KOTA_KABUPATEN AS kk ON hm.KodeKotaKab=kk.Kode
            WHERE kk.Kode=\'' . $code . '\'
            ORDER BY hm.Kode'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['KodeHM']] = $q;
        }

        return $assoc;
    }

    public function getTPI_N1($code)
    {
        $query = $this->db->query(
            'SELECT tpi.Kode AS KodeTPI, kk.Kode, tpi.Nama AS NamaTPI  
            FROM TEMPAT_PELELANGAN_IKAN AS tpi RIGHT JOIN KOTA_KABUPATEN AS kk ON tpi.KodeKotaKab=kk.Kode
            WHERE kk.Kode=\'' . $code . '\'
            ORDER BY tpi.Kode'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['KodeTPI']] = $q;
        }

        return $assoc;
    }
}

