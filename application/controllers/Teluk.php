<?php 

class Teluk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Teluk_model');
    }

    public function index()
    {
        $data['query'] = $this->Teluk_model->getAll();
        $data['title'] = 'Teluk';
        $data['link'] = 'teluk';
        $this->load->view('templates/header', $data);
        $this->load->view('teluk/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Teluk';
        $data['query'] = $this->Teluk_model->getDetail($code);    
        $data['link'] = '/teluk';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('teluk/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
