<?php 

class TransportasiLaut extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TransportasiLaut_model');
    }

    public function index()
    {
        $data['query'] = $this->TransportasiLaut_model->getAll();
        $data['title'] = 'Transportasi Laut';
        $data['link'] = 'transportasilaut';
        $this->load->view('templates/header', $data);
        $this->load->view('transportasilaut/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Transportasi Laut';
        $data['query'] = $this->TransportasiLaut_model->getDetail($code);    
        $data['link'] = '/transportasilaut';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('transportasilaut/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
