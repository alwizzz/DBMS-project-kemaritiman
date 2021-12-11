<?php 

class Mineral extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mineral_model');
    } 

    public function index()
    {
        $data['query'] = $this->Mineral_model->getAll();
        $data['title'] = 'Mineral';
        $data['link'] = 'mineral';
        $this->load->view('templates/header', $data);
        $this->load->view('mineral/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Mineral';
        $data['query'] = $this->Mineral_model->getDetail($code);    
        $data['mn_laut'] = $this->Mineral_model->getLaut_MN($code);    
        $data['n1_pbl'] = $this->Mineral_model->getPBL_N1($code);    
        $data['link'] = '/mineral';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('mineral/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
