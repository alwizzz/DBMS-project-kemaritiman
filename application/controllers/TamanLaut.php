<?php 

class TamanLaut extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TamanLaut_model');
    }

    public function index()
    {
        $data['query'] = $this->TamanLaut_model->getAll();
        $data['title'] = 'Taman Laut';
        $data['link'] = 'tamanlaut';
        $this->load->view('templates/header', $data);
        $this->load->view('tamanlaut/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Taman Laut';
        $data['query'] = $this->TamanLaut_model->getDetail($code);    
        $data['link'] = '/tamanlaut';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('tamanlaut/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
