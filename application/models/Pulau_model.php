<?php

class Pulau_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM PULAU')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM PULAU WHERE Kode=\'' . $code . '\'')->row_array();
    }

    public function getProvinsi_MN($code)
    {
        return $this->db->query(
            'SELECT pr.Nama AS NamaProvinsi, pmp.KodePulau, pmp.KodeProvinsi
            FROM PULAU_MEMILIKI_PROVINSI AS pmp JOIN PROVINSI AS pr ON pmp.KodeProvinsi=pr.Kode
            WHERE pmp.KodePulau=\'' . $code . '\'
            ORDER BY pr.Nama'
        )->result_array();
    }

    public function getTeluk_N1($code)
    {
        $query = $this->db->query(
            'SELECT tlk.Kode AS KodeTeluk, p.Kode, tlk.Nama AS NamaTeluk  
            FROM TELUK AS tlk RIGHT JOIN PULAU AS p ON tlk.KodePulau=p.Kode
            WHERE p.Kode=\'' . $code . '\'
            ORDER BY tlk.Kode'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['KodeTeluk']] = $q;
        }

        return $assoc;
    }
}

 