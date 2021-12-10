<?php 

class Palung extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Palung_model');
    }

    public function index()
    {
        $data['query'] = $this->Palung_model->getAll();
        $data['title'] = 'Palung';
        $data['link'] = 'palung';
        $this->load->view('templates/header', $data);
        $this->load->view('palung/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false, $name=false)
    {
        if( !$code || !$name){
            return $this->index();
        }
        $data['title'] = 'Palung';
        $data['query'] = $this->Palung_model->getDetail($code, $name);    
        $data['link'] = '/palung';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('palung/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
