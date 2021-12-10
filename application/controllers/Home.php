<?php

class Home extends CI_Controller 
{
    
    public function index()
    {
        //$this->load->database();
        //$this->load->model('ObjekWisata_model');
        //$data['q'] = $this->ObjekWisata_model->getAll();

        $data['title'] = 'Kemaritiman Indonesia';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
        //echo "hello madefaker";
    }
}