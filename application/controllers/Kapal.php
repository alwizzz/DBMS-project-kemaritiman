<?php 

class Kapal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kapal_model');
    }

    public function index()
    {
        $data['query'] = $this->Kapal_model->getAll();
        $data['title'] = 'Kapal';
        $data['link'] = 'kapal';
        $this->load->view('templates/header', $data);
        $this->load->view('kapal/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Kapal';
        $data['query'] = $this->Kapal_model->getDetail($code);    
        $data['link'] = '/kapal';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('kapal/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
