<?php 

class Pantai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pantai_model');
    }

    public function index()
    {
        $data['query'] = $this->Pantai_model->getAll();
        $data['title'] = 'Pantai';
        $data['link'] = 'pantai';
        $this->load->view('templates/header', $data);
        $this->load->view('pantai/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Pantai';
        $data['query'] = $this->Pantai_model->getDetail($code);    
        $data['link'] = '/pantai';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('pantai/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
