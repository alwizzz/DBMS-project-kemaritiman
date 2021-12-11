<?php 

class AktivitasPenangkapanIkan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AktivitasPenangkapanIkan_model');
    }

    public function index()
    {
        $data['query'] = $this->AktivitasPenangkapanIkan_model->getAll();
        $data['title'] = 'Aktivitas Penangkapan Ikan';
        $data['link'] = 'aktivitaspenangkapanikan';
        $this->load->view('templates/header', $data);
        $this->load->view('aktivitaspenangkapanikan/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Aktivitas Penangkapan Ikan';
        $data['query'] = $this->AktivitasPenangkapanIkan_model->getDetail($code);    
        $data['link'] = '/aktivitaspenangkapanikan';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('aktivitaspenangkapanikan/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
