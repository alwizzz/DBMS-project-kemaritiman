<?php 

class Pulau extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pulau_model');
    }

    public function index()
    {
        $data['query'] = $this->Pulau_model->getAll();
        $data['title'] = 'Pulau';
        $data['link'] = 'pulau';
        $this->load->view('templates/header', $data);
        $this->load->view('pulau/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Pulau';
        $data['query'] = $this->Pulau_model->getDetail($code);    
        $data['mn_prov'] = $this->Pulau_model->getProvinsi_MN($code);    
        $data['link'] = '/pulau';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('pulau/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
