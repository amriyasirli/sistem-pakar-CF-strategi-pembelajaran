<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Keterangan extends CI_Controller {

    function __construct(){
        parent::__construct();
       $this->load->model('Strategi_model');
       $this->load->library('form_validation');

       // ------Authentication-------
       if(!$this->session->userdata('email')){
        redirect ('Auth/blocked');
    }
    
    // ----------------------------
   }

    public function index()
    {
        $data['title'] = 'Keterangan';
        $data['keterangan'] = $this->Strategi_model->get_stra()->result_array();
        $data['visitor'] 	= $this->Beranda_model->visitor_count();
        $data['analisa'] 	= $this->Beranda_model->analisa_count();
        $data['data']		=$this->Diagnosa_model->data_statistisk();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('keterangan/keterangan', $data);
        $this->load->view('layout/footer', $data);       
    }
        
}
        
    /* End of file  keterangan.php */
        
                            