<?php 

class GunungLaut extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('GunungLaut_model');
    }

    public function index()
    {
        $data['query'] = $this->GunungLaut_model->getAll();
        $data['title'] = 'Gunung Laut';
        $data['link'] = 'gununglaut';
        $this->load->view('templates/header', $data);
        $this->load->view('gununglaut/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false, $name=false)
    {
        if( !$code || !$name){
            return $this->index();
        }
        $data['title'] = 'Gunung Laut';
        $data['query'] = $this->GunungLaut_model->getDetail($code, $name);    
        $data['link'] = '/gununglaut';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('gununglaut/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
