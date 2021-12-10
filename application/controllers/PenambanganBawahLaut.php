<?php 

class PenambanganBawahLaut extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenambanganBawahLaut_model');
    }

    public function index()
    {
        $data['query'] = $this->PenambanganBawahLaut_model->getAll();
        $data['title'] = 'Penambangan Bawah Laut';
        $data['link'] = 'penambanganbawahlaut';
        $this->load->view('templates/header', $data);
        $this->load->view('penambanganbawahlaut/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Penambangan Bawah Laut';
        $data['query'] = $this->PenambanganBawahLaut_model->getDetail($code);    
        $data['link'] = '/penambanganbawahlaut';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('penambanganbawahlaut/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
