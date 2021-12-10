<?php 

class Ekstraktif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Ekstraktif_model');
    }

    public function index()
    {
        $data['query'] = $this->Ekstraktif_model->getAll();
        $data['title'] = 'Ekstraktif';
        $data['link'] = 'ekstraktif';
        $this->load->view('templates/header', $data);
        $this->load->view('ekstraktif/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Ekstraktif';
        $data['query'] = $this->Ekstraktif_model->getDetail($code);    
        $data['link'] = '/ekstraktif';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('ekstraktif/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
