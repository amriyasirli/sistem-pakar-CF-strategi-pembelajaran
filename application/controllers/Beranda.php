<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Beranda_model');
		$this->load->model('Diagnosa_model');
		$this->load->library('user_agent');
		// ------Authentication-------
        if(!$this->session->userdata('email')){
            redirect ('Auth/blocked');
        }
        
        // ----------------------------
		}
	
	public function index()
	{
		
		if ($this->agent->is_browser()){
			$agent = $this->agent->browser().' '.$this->agent->version();
		}elseif ($this->agent->is_mobile()){
			$agent = $this->agent->mobile();
		}else{
			$agent = 'Data user gagal di dapatkan';
		}
 
		$data = [
			'ip_address' => $this->input->ip_address(),
			'browser' => $agent,
			'os' => $this->agent->platform()
		];

		$ip = $this->input->ip_address();
		$query = $this->db->get_where('visitor', ['ip_address' => $ip])->row_array();
		if(!$query){

			$this->Beranda_model->visitor($data);

			$data['strategi'] 	= $this->Beranda_model->strategi_count();
			$data['indikator'] 	= $this->Beranda_model->indikator_count();
			$data['pengetahuan']= $this->Beranda_model->pengetahuan_count();
			$data['user'] 		= $this->Beranda_model->user_count();
			$data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
			$data['feed']		= $this->Beranda_model->feed_activity()->result_array();
			$data['title'] 		= 'Beranda';
			$data['subtitle'] 	= 'Beranda';
			$this->load->view('layout/header',$data);
			$this->load->view('layout/sidebar');
			$this->load->view('pages/beranda',$data);
			$this->load->view('layout/footer', $data);
			
		}else{
			
			
			$data['strategi'] 	= $this->Beranda_model->strategi_count();
			$data['indikator'] 	= $this->Beranda_model->indikator_count();
			$data['pengetahuan']= $this->Beranda_model->pengetahuan_count();
			$data['user'] 		= $this->Beranda_model->user_count();
			$data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
			$data['feed']		= $this->Beranda_model->feed_activity()->result_array();
			$data['title'] 		= 'Beranda';
			$data['subtitle'] 	= 'Beranda';
			$this->load->view('layout/header',$data);
			$this->load->view('layout/sidebar');
			$this->load->view('pages/beranda',$data);
			$this->load->view('layout/footer', $data);
		}
	}

	public function panduan ()
	{
		$data['title'] = 'Panduan Aplikasi';
		$data['subtitle'] = '';

		$this->load->view('layout/header', $data);
		$this->load->view('layout/sidebar', $data);
		$this->load->view('pages/panduan', $data);
		$this->load->view('layout/footer', $data);
	}

	
}
