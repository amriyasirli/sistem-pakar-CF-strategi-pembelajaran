<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Riwayat extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Diagnosa_model');
        }

	
	public function index()
	{
		$data['title'] = 'Riwayat';
        $data['subtitle'] = 'Riwayat Analisa';
        $data['riwayat'] = $this->Diagnosa_model->gabung()->result_array();
        $data['visitor'] 	= $this->Beranda_model->visitor_count();
        $data['analisa'] 	= $this->Beranda_model->analisa_count();
        $data['data']		=$this->Diagnosa_model->data_statistisk();
        $data['feed']		= $this->Beranda_model->feed()->result_array();
        $this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('pages/riwayat', $data);
		$this->load->view('layout/footer', $data);
    }
    
}
