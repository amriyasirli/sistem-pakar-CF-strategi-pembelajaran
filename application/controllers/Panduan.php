<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panduan extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Beranda_model');
		// ------Authentication-------
        if(!$this->session->userdata('email')){
            redirect ('Auth/blocked');
        }
        
        // ----------------------------
		}
	

	public function index ()
	{
		$data['title'] = 'Panduan Sistem';
		$data['subtitle'] = '';
		$data['visitor'] 	= $this->Beranda_model->visitor_count();
		$data['analisa'] 	= $this->Beranda_model->analisa_count();
		$data['data']		=$this->Diagnosa_model->data_statistisk();
		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('pages/panduan', $data);
		$this->load->view('layout/footer', $data);
	}
}
