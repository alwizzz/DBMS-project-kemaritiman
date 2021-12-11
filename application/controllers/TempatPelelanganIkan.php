<?php 

class TempatPelelanganIkan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TempatPelelanganIkan_model');
    }

    public function index()
    {
        $data['query'] = $this->TempatPelelanganIkan_model->getAll();
        $data['title'] = 'Tempat Pelelangan Ikan';
        $data['link'] = 'tempatpelelanganikan';
        $this->load->view('templates/header', $data);
        $this->load->view('tempatpelelanganikan/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Tempat Pelelangan Ikan';
        $data['query'] = $this->TempatPelelanganIkan_model->getDetail($code);    
        $data['link'] = '/tempatpelelanganikan';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('tempatpelelanganikan/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
