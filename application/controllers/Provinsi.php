<?php 

class Provinsi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Provinsi_model');
    }

    public function index()
    {
        $data['query'] = $this->Provinsi_model->getAll();
        $data['title'] = 'Provinsi';
        $data['link'] = 'provinsi';
        $this->load->view('templates/header', $data);
        $this->load->view('provinsi/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Provinsi';
        $data['query'] = $this->Provinsi_model->getDetail($code);    
        $data['link'] = '/provinsi';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('provinsi/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
