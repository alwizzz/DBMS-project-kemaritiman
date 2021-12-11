<?php

class Laut_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM LAUT')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM LAUT WHERE Kode=\'' . $code . '\'')->row_array();
    }

    public function getEkstraktif_MN($code)
    {
        return $this->db->query(
            'SELECT e.Nama AS NamaEkstraktif, edl.KodeEkstraktif, edl.KodeLaut
            FROM EKSTRAKTIF_DI_LAUT AS edl JOIN EKSTRAKTIF AS e ON edl.KodeEkstraktif=e.Kode
            WHERE edl.KodeLaut=\'' . $code . '\'
            ORDER BY e.Nama'
        )->result_array();
    }

    public function getMineral_MN($code)
    {
        return $this->db->query(
            'SELECT m.Nama AS NamaMineral, mdl.KodeMineral, mdl.KodeLaut
            FROM MINERAL_DI_LAUT AS mdl JOIN MINERAL AS m ON mdl.KodeMineral=m.Kode
            WHERE mdl.KodeLaut=\'' . $code . '\'
            ORDER BY m.Nama'
        )->result_array();
    } 

    public function getAPI_N1($code)
    {
        $query = $this->db->query(
            'SELECT api.Kode AS KodeAPI, l.Kode  
            FROM AKTIVITAS_PENANGKAPAN_IKAN AS api RIGHT JOIN LAUT AS l ON api.KodeLaut=l.Kode
            WHERE l.Kode=\'' . $code . '\'
            ORDER BY api.Kode'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['KodeAPI']] = $q;
        }

        return $assoc;
    }

    public function getTamanLaut_N1($code)
    {
        $query = $this->db->query(
            'SELECT tl.Kode AS KodeTL, l.Kode, tl.Nama AS NamaTL  
            FROM TAMAN_LAUT AS tl RIGHT JOIN LAUT AS l ON tl.KodeLaut=l.Kode
            WHERE l.Kode=\'' . $code . '\'
            ORDER BY tl.Kode'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['KodeTL']] = $q;
        }

        return $assoc;
    }

    public function getGunungLaut_N1($code)
    {
        $query = $this->db->query(
            'SELECT gn.Nama AS NamaGN, l.Kode 
            FROM GUNUNG_LAUT AS gn RIGHT JOIN LAUT AS l ON gn.KodeLaut=l.Kode
            WHERE l.Kode=\'' . $code . '\'
            ORDER BY gn.Nama'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['NamaGN']] = $q;
        }

        return $assoc;
    }

    public function getPalung_N1($code)
    {
        $query = $this->db->query(
            'SELECT plg.Nama AS NamaPalung, l.Kode 
            FROM PALUNG AS plg RIGHT JOIN LAUT AS l ON plg.KodeLaut=l.Kode
            WHERE l.Kode=\'' . $code . '\'
            ORDER BY plg.Nama'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['NamaPalung']] = $q;
        }

        return $assoc;
    }

    public function getTransportasiLaut_N1($code)
    {
        $query = $this->db->query(
            'SELECT trans.Kode AS KodeTrans, l.Kode  
            FROM TRANSPORTASI_LAUT AS trans RIGHT JOIN LAUT AS l ON trans.KodeLaut=l.Kode
            WHERE l.Kode=\'' . $code . '\'
            ORDER BY trans.Kode'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['KodeTrans']] = $q;
        }

        return $assoc;
    }

    public function getPBL_N1($code)
    {
        $query = $this->db->query(
            'SELECT pbl.Kode AS KodePBL, l.Kode  
            FROM PENAMBANGAN_BAWAH_LAUT AS pbl RIGHT JOIN LAUT AS l ON pbl.KodeLaut=l.Kode
            WHERE l.Kode=\'' . $code . '\'
            ORDER BY pbl.Kode'
        )->result_array();

        //convert dari array biasa ke assoc array
        foreach( $query as $q ){
            // isi tags sama kolom yg dianuin
            $assoc[$q['KodePBL']] = $q;
        }

        return $assoc;
    }
}