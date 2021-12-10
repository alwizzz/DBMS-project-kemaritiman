<?php 

class ObjekWisata extends CI_Controller
{
    //public function __

    public function index()
    {
        $this->load->model('ObjekWisata_model');
        $data = $this->ObjekWisata->getAll();
    }
}