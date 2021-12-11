<?php 

class KotaKabupaten extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('KotaKabupaten_model');
    }
 
    public function index()
    {
        $data['query'] = $this->KotaKabupaten_model->getAll();
        $data['title'] = 'Kota / Kabupaten';
        $data['link'] = 'kotakabupaten';
        $this->load->view('templates/header', $data);
        $this->load->view('kotakabupaten/index', $data);
        $this->load->view('templates/footer');
    }
    
    public function detail($code=false)
    {
        if( !$code){
            return $this->index();
        }
        $data['title'] = 'Kota / Kabupaten';
        $data['query'] = $this->KotaKabupaten_model->getDetail($code);    
        $data['n1_pb'] = $this->KotaKabupaten_model->getPelabuhan_N1($code);    
        $data['n1_pnt'] = $this->KotaKabupaten_model->getPantai_N1($code);    
        $data['n1_hm'] = $this->KotaKabupaten_model->getHutanMangrove_N1($code);    
        $data['n1_tpi'] = $this->KotaKabupaten_model->getTPI_N1($code);    
        $data['link'] = '/kotakabupaten';

        $this->load->view('templates/header', $data);
        if( $data['query'] == NULL ){
            $this->load->view('templates/norecord', $data);
        } else {
            $this->load->view('kotakabupaten/detail', $data);
        }
        $this->load->view('templates/footer');
    }
}
