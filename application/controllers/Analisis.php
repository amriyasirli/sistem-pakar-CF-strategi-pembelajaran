<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Analisis extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Beranda_model');
		// ------Authentication-------
        if(!$this->session->userdata('email')){
            redirect ('Auth/blocked');
        }
        
        // ----------------------------
		}
	
	public function index()
	{
		$data['title'] = 'Analisis Sistem';
		$data['subtitle'] = 'Analisis Sistem';
		$this->load->view('layout/header',$data);
		$this->load->view('layout/sidebar');
		$this->load->view('pages/analisis',$data);
		$this->load->view('layout/footer');
	}

	
}
