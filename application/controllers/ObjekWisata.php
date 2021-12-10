<?php 

class ObjekWisata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ObjekWisata_model');
    }

    public function index()
    {
        $data['query'] = $this->ObjekWisata_model->getAll();
        $data['title'] = 'Kemaritiman Indonesia';
        $this->load->view('templates/header', $data);
        $this->load->view('objekwisata/index', $data);
        $this->load->view('templates/footer');
    }
}