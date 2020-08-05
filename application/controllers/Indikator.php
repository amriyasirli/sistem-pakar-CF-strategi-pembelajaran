<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Indikator extends CI_Controller {

     function __construct(){
         parent::__construct();
        $this->load->model('Indikator_model');
        $this->load->library('form_validation');

        // ------Authentication-------
        if(!$this->session->userdata('email')){
            redirect ('Auth/blocked');
        }
        
        // ----------------------------
    }

    public function index()
    {
        $data['title'] = 'Indikator';
        $data['subtitle'] = 'Indikator Strategi Pembelajaran';
        $data['indikator'] = $this->Indikator_model->get();
        $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('indikator/indikator', $data);
        $this->load->view('layout/footer', $data);       
    }

    public function create(){
        if($this->input->post('simpan')) {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $data['subtitle'] = 'Tambah indikator Strategi Pembelajaran';
                $data['title'] = 'indikator';
                $data['indikator']=$this->db->get('indikator')->result();
                $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
                $this->load->view('layout/header', $data);
                $this->load->view('layout/sidebar');
                $this->load->view('indikator/indikator_create', $data);    
                $this->load->view('layout/footer', $data); 
            } else {     
                $indikator = $this->input->post('indikator');
                
                $data = array(
                    "indikator_nama"     => $indikator
                );
                $this->Indikator_model->insert($data);
                $this->session->set_flashdata('create', '<div class="badge badge-success">Data Berhasil Di Tambahkan</div>');
                redirect('Indikator', 'refresh');
            }
        } else {
            $data['subtitle'] = 'Tambah indikator Strategi Pembelajaran';
            $data['title'] = 'indikator';
            $data['indikator']=$this->db->get('indikator')->result();
            $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('indikator/indikator_create', $data);    
            $this->load->view('layout/footer', $data);
        }
    }
    
    public function update($id){
        if($this->input->post('update')) {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $data['subtitle'] = 'Update indikator Strategi Pembelajaran';
                $data['title'] = 'indikator';
                $data['indikator']=$this->indikator_model->get_by_id($id);
                $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
                $this->load->view('layout/header', $data);
                $this->load->view('layout/sidebar');
                $this->load->view('indikator/indikator_update', $data);    
                $this->load->view('layout/footer', $data); 
            } else {     
                $id = $this->input->post('indikator_id');
                $indikator = $this->input->post('indikator');
                             
                    
                    $data = array(
                        "indikator_nama"     => $indikator
                    );
                    $this->Indikator_model->update($id, $data);
                    $this->session->set_flashdata('update', '<div class="badge badge-success">Data Berhasil Di Tambahkan</div>');
                    redirect('Indikator', 'refresh');
            }
        } else {
            $data['subtitle'] = 'Update indikator Strategi Pembelajaran';
            $data['title'] = 'Indikator';
            $data['indikator']= $this->Indikator_model->get_by_id($id);
            $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('indikator/indikator_update', $data);    
            $this->load->view('layout/footer', $data);
        }
    }

    public function delete($id) 
    {
        $row = $this->Indikator_model->get_by_id($id);

        if ($row) {
            $this->Indikator_model->delete($id);
            $this->session->set_flashdata('delete', 'Data Dihapus');
            redirect(site_url('Indikator'));
        } else {
            $this->session->set_flashdata('delete', 'Data Tidak Ditemukan');
            redirect(site_url('Indikator'));
        }
    }

    public function _rules() 
        {
        $this->form_validation->set_message('required', 'Tidak Boleh Kosong');
        $this->form_validation->set_rules('indikator', 'Indikator', 'trim|required');
        
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        }
}