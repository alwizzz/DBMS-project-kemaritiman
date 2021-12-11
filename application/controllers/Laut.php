<?php 

class Laut extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laut_model');
    }

    public function index()
    {
        $data['query'] = $this->Laut_model->getAll();
        $data['title'] = 'Laut';
        $data['link'] = 'laut';
        $this->load->view('templates/header', $data);
        $this->load->view('laut/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Laut';
        $data['query'] = $this->Laut_model->getDetail($code);    
        $data['mn_eks'] = $this->Laut_model->getEkstraktif_MN($code);    
        $data['mn_mrl'] = $this->Laut_model->getMineral_MN($code);    
        $data['link'] = 'laut';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('laut/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}







?>