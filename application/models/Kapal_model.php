<?php

class Kapal_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->query('SELECT * FROM KAPAL')->result_array();
    }

    public function getDetail($code)
    {
        return $this->db->query('SELECT * FROM KAPAL WHERE Kode=\'' . $code . '\'')->row_array();
    }

    public function getTransportasiLaut_OO($code)
    {
        return $this->db->query(
            'SELECT trans.Kode AS KodeTrans, k.Kode  
            FROM TRANSPORTASI_LAUT AS trans RIGHT JOIN KAPAL AS k ON trans.KodeKapal=k.Kode
            WHERE k.Kode=\'' . $code . '\'
            ORDER BY trans.Kode'
        )->row_array();
    }
}

 