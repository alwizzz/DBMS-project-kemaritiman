<?php 

class Pelabuhan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pelabuhan_model');
    }

    public function index()
    {
        $data['query'] = $this->Pelabuhan_model->getAll();
        $data['title'] = 'Pelabuhan';
        $data['link'] = 'pelabuhan';
        $this->load->view('templates/header', $data);
        $this->load->view('pelabuhan/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Pelabuhan';
        $data['query'] = $this->Pelabuhan_model->getDetail($code);    
        $data['link'] = '/pelabuhan';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('pelabuhan/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
