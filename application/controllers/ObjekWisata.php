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
        $data['title'] = 'Objek Wisata';
        $data['link'] = '/objekwisata';
        $this->load->view('templates/header', $data);
        $this->load->view('objekwisata/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Objek Wisata';
        $data['query'] = $this->ObjekWisata_model->getDetail($code);    
        $data['link'] = '/objekwisata';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('objekwisata/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}