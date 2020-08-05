<?php
class Penduduk extends CI_Controller {
 
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Penduduk_model');
	}
 
	public function index()
	{
		$data['graph'] = $this->Penduduk_model->graph();
		$this->load->view('chart', $data);
	}
 
}