<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Strategi extends CI_Controller {

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
        $data['subtitle'] = 'Data Strategi Pembelajaran';
        $data['title'] = 'Strategi';
        $data['strategi'] = $this->Strategi_model->get_stra()->result();
        $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('strategi/strategi', $data);
        $this->load->view('layout/footer', $data);       
    }

    public function create(){
        if($this->input->post('simpan')) {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $data['subtitle'] = 'Tambah Strategi Pembelajaran';
                $data['title'] = 'Strategi';
                $data['strategi']=$this->db->get('strategi')->result();
                $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
                $this->load->view('layout/header', $data);
                $this->load->view('layout/sidebar');
                $this->load->view('strategi/strategi_create', $data);    
                $this->load->view('layout/footer', $data); 
            } else {     
                $strategi_nama = $this->input->post('strategi_nama');
                $strategi_detail = $this->input->post('strategi_detail');
                $strategi_saran = $this->input->post('strategi_saran');
                
                $upload_image = $_FILES['foto'];

                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/strategi/';
                $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {

                    $foto = $this->upload->data('file_name');                 
                    
                    $data = array(
                        "strategi_nama"     => $strategi_nama,
                        "strategi_detail"   => $strategi_detail,
                        "strategi_saran"    => $strategi_saran,
                        "foto"              => $foto
                    );
                    $this->Strategi_model->insert($data);
                    $this->session->set_flashdata('create', '<div class="badge badge-success">Data Berhasil Di Tambahkan</div>');
                    redirect('Strategi', 'refresh');
                } else {
                    echo $this->upload->display_errors();
                }
            }
        } else {
            $data['subtitle'] = 'Tambah Strategi Pembelajaran';
            $data['title'] = 'Strategi';
            $data['strategi']=$this->db->get('strategi')->result();
            $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('strategi/strategi_create', $data);    
            $this->load->view('layout/footer', $data);
        }
    }
    
    public function update($id){
        if($this->input->post('update')) {
            $this->_rules();

            if($this->form_validation->run() == FALSE) {
                $data['subtitle'] = 'Update Strategi Pembelajaran';
                $data['title'] = 'Strategi';
                $data['strategi']=$this->Strategi_model->get_by_id($id);
                $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
                $this->load->view('layout/header', $data);
                $this->load->view('layout/sidebar');
                $this->load->view('strategi/strategi_update', $data);    
                $this->load->view('layout/footer', $data); 
            } else {     
                $id = $this->input->post('strategi_id');
                $strategi_nama = $this->input->post('strategi_nama');
                $strategi_detail = $this->input->post('strategi_detail');
                $strategi_saran = $this->input->post('strategi_saran');
                
                $upload_image = $_FILES['foto'];

                $config['allowed_types'] = 'gif|jpg|png|jpeg';
                $config['max_size']     = '2048';
                $config['upload_path'] = './assets/img/strategi/';
                $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

                $path= './assets/img/strategi/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('foto')) {
                    @unlink($path.$this->input->post('fotolama'));

                    $foto = $this->upload->data('file_name');                 
                    
                    $data = array(
                        "strategi_nama"     => $strategi_nama,
                        "strategi_detail"   => $strategi_detail,
                        "strategi_saran"    => $strategi_saran,
                        "foto"              => $foto
                    );
                    $this->Strategi_model->update($id, $data);
                    $this->session->set_flashdata('update', '<div class="badge badge-success">Data Berhasil Di Tambahkan</div>');
                    redirect('Strategi', 'refresh');
                } else {

                    $data = array(
                        "strategi_nama"     => $strategi_nama,
                        "strategi_detail"   => $strategi_detail,
                        "strategi_saran"    => $strategi_saran
                    );
                    $this->Strategi_model->update($id, $data);
                    $this->session->set_flashdata('update', '<div class="badge badge-success">Data Berhasil Di Tambahkan</div>');
                    redirect('Strategi', 'refresh');
                }
            }
        } else {
            $data['subtitle'] = 'Update Strategi Pembelajaran';
            $data['title'] = 'Strategi';
            $data['strategi']= $this->Strategi_model->get_by_id($id);
            $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('strategi/strategi_update', $data);    
            $this->load->view('layout/footer', $data);
        }
    }

    public function delete($id) 
    {
        $row = $this->Strategi_model->get_by_id($id);
        $path		= './assets/img/strategi/';
        $foto = $row->foto;

        if ($row) {
            @unlink($path.$foto); //hapus foto pada direktori penyimpanan
            $this->Strategi_model->delete($id);
            $this->session->set_flashdata('delete', 'Data Dihapus');
            redirect(site_url('Strategi'));
        } else {
            $this->session->set_flashdata('delete', 'Data Tidak Ditemukan');
            redirect(site_url('Strategi'));
        }
    }

    public function _rules() 
        {
        $this->form_validation->set_message('required', 'Tidak Boleh Kosong');
        $this->form_validation->set_rules('strategi_nama', 'Strategi Nama', 'trim|required');
        $this->form_validation->set_rules('strategi_detail', 'Strategi Detail', 'trim|required');
        $this->form_validation->set_rules('strategi_saran', 'Strategi Saran', 'trim|required');
        
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        }
        
}
        
    /* End of file  penyakit.php */
        
                            