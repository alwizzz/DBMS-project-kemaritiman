<?php 

class HutanMangrove extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('HutanMangrove_model');
    }

    public function index()
    {
        $data['query'] = $this->HutanMangrove_model->getAll();
        $data['title'] = 'Hutan Mangrove';
        $data['link'] = 'hutanmangrove';
        $this->load->view('templates/header', $data);
        $this->load->view('hutanmangrove/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code)
    {
        if( !isset($code)){
            return $this->index();
        }
        $data['title'] = 'Hutan Mangrove';
        $data['query'] = $this->HutanMangrove_model->getDetail($code);    
        $data['link'] = '/hutanmangrove';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('hutanmangrove/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
