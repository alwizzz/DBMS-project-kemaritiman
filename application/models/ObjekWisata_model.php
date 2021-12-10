<?php

class ObjekWisata_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('Objek_Wisata')->result_array();
    }
}