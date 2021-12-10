<?php

class ObjekWisata_model extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('OBJEK_WISATA')->result_array();
    }
}