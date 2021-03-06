<?php 

class Selat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Selat_model');
    }

    public function index()
    {
        $data['query'] = $this->Selat_model->getAll();
        $data['title'] = 'Selat';
        $data['link'] = 'selat';
        $this->load->view('templates/header', $data);
        $this->load->view('selat/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Selat';
        $data['query'] = $this->Selat_model->getDetail($code);    
        $data['link'] = '/selat';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('selat/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
