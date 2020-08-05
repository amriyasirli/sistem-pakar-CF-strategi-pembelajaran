<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Pengetahuan extends CI_Controller {

     function __construct(){
         parent::__construct();
        $this->load->model('Pengetahuan_model');
        $this->load->library('form_validation');

        // ------Authentication-------
        if(!$this->session->userdata('email')){
            redirect ('Auth/blocked');
        }
        
        // ----------------------------
    }

    public function index()
    {
        $data['title'] = 'Pengetahuan';
        $data['subtitle'] = 'Pengetahuan Strategi Pembelajaran';
        $data['pengetahuan'] = $this->Pengetahuan_model->get()->result();
        $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('pengetahuan/pengetahuan', $data);
        $this->load->view('layout/footer', $data);       
    }

    public function create(){
        if($this->input->post('simpan')) {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $data['subtitle'] = 'Tambah Pengetahuan Strategi Pembelajaran';
                $data['title'] = 'Pengetahuan';
                $data['strategi']=$this->db->get('strategi')->result();
                $data['indikator']=$this->db->get('indikator')->result();
                $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
                $this->load->view('layout/header', $data);
                $this->load->view('layout/sidebar');
                $this->load->view('pengetahuan/pengetahuan_create', $data);    
                $this->load->view('layout/footer', $data); 
            } else {     
                $strategi = $this->input->post('strategi');
                $indikator = $this->input->post('indikator');
                $mb = $this->input->post('mb');
                $md = $this->input->post('md');
                
                $data = array(
                    "strategi_id"     => $strategi,
                    "indikator_id"     => $indikator,
                    "mb"     => $mb,
                    "md"     => $md
                );
                $this->Pengetahuan_model->insert($data);
                $this->session->set_flashdata('create', '<div class="badge badge-success">Data Berhasil Di Tambahkan</div>');
                redirect('Pengetahuan', 'refresh');
            }
        } else {
            $data['subtitle'] = 'Tambah Basis Pengetahuan';
            $data['title'] = 'Pengetahuan';
            $data['strategi']=$this->db->get('strategi')->result();
            $data['indikator']=$this->db->get('indikator')->result();
            $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('pengetahuan/pengetahuan_create', $data);    
            $this->load->view('layout/footer', $data);
        }
    }
    
    public function update($id){
        if($this->input->post('update')) {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $data['subtitle'] = 'Update Basis Pengetahuan';
                $data['title'] = 'Pengetahuan';
                $data['strategi']=$this->db->get('strategi')->result();
                $data['indikator']=$this->db->get('indikator')->result();
                $data['pengetahuan']=$this->Pengetahuan_model->get_by_id($id);
                $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
                $this->load->view('layout/header', $data);
                $this->load->view('layout/sidebar');
                $this->load->view('pengetahuan/pengetahuan_update', $data);    
                $this->load->view('layout/footer', $data); 
            } else {     
                $id = $this->input->post('basis_id');
                $strategi = $this->input->post('strategi');
                $indikator = $this->input->post('indikator');
                $mb = $this->input->post('mb');
                $md = $this->input->post('md');
                             
                    
                    $data = array(
                        "strategi_id"   => $strategi,
                        "indikator_id"  => $indikator,
                        "mb"            => $mb,
                        "md"            => $md
                    );
                    $this->Pengetahuan_model->update($id, $data);
                    $this->session->set_flashdata('update', '<div class="badge badge-success">Data Berhasil Di Tambahkan</div>');
                    redirect('Pengetahuan', 'refresh');
            }
        } else {
            $data['subtitle'] = 'Update Basis Pengetahuan';
            $data['title'] = 'Pengetahuan';
            $data['strategi']=$this->db->get('strategi')->result();
            $data['indikator']=$this->db->get('indikator')->result();
            $data['pengetahuan']= $this->Pengetahuan_model->get_by_id($id);
            $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('pengetahuan/pengetahuan_update', $data);    
            $this->load->view('layout/footer', $data);
        }
    }

    public function delete($id) 
    {
        $row = $this->Pengetahuan_model->get_by_id($id);

        if ($row) {
            $this->Pengetahuan_model->delete($id);
            $this->session->set_flashdata('delete', 'Data Dihapus');
            redirect(site_url('Pengetahuan'));
        } else {
            $this->session->set_flashdata('delete', 'Data Tidak Ditemukan');
            redirect(site_url('Pengetahuan'));
        }
    }

    public function _rules() 
        {
        $this->form_validation->set_message('required', 'Tidak Boleh Kosong');
        $this->form_validation->set_message('numeric', 'Isi dengan angka');
        $this->form_validation->set_rules('strategi', 'Strategi', 'trim|required');
        $this->form_validation->set_rules('indikator', 'Indikator', 'trim|required');
        $this->form_validation->set_rules('mb', 'MB', 'trim|required|numeric');
        $this->form_validation->set_rules('md', 'MD', 'trim|required|numeric');
        
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        }
}