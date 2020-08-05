<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class User extends CI_Controller {

    function __construct(){
        parent::__construct();
       $this->load->model('User_model');
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
       $data['users'] = $this->User_model->get();
       $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
       $this->load->view('layout/header', $data);
       $this->load->view('layout/sidebar');
       $this->load->view('user/user', $data);
       $this->load->view('layout/footer', $data);       
   }

   public function profil ($id)
   {
       $data['title'] = 'Profil';
       $data['subtitle'] = 'Profil';
       $data['user']= $this->User_model->get_by_id($id);
       
       $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
       $this->load->view('layout/header', $data);
       $this->load->view('layout/sidebar', $data);
       $this->load->view('user/profil', $data);
       $this->load->view('layout/footer', $data);

   }

   public function create(){
    if($this->input->post('simpan')) {
        $this->_rules();

        if($this->form_validation->run() == FALSE) {
            $data['subtitle'] = 'Registrasi';
            $data['title'] = 'User';
            $data['user']=$this->db->get('user')->result();
            $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('user/user_create', $data);    
            $this->load->view('layout/footer', $data); 
        } else {     
            $nama = htmlspecialchars($this->input->post('nama'));
            $email = htmlspecialchars($this->input->post('email'));
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            
            $upload_image = $_FILES['foto'];

            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/user/';
            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {

                $foto = $this->upload->data('file_name');                 
                
                $data = array(
                    "nama"    => $nama,
                    "email"   => $email,
                    "password"=> $password,
                    "foto"    => $foto,
                    "role"    => 2,
                    "data_created"    => time()
                );
                $this->User_model->insert($data);
                $this->session->set_flashdata('create', '<div class="badge badge-success">Data Berhasil Di Tambahkan</div>');
                redirect('User', 'refresh');
            } else {
                echo $this->upload->display_errors();
            }
        }
    } else {
        $data['subtitle'] = 'Tambah Strategi Pembelajaran';
        $data['title'] = 'Strategi';
        $data['user']=$this->db->get('user')->result();
        $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('user/user_create', $data);    
        $this->load->view('layout/footer', $data);
    }
}


public function update($id){
    if($this->input->post('update')) {
        $this->form_validation->set_message('required', 'Tidak Boleh Kosong');
        $this->form_validation->set_rules(
                'password1',
                'Password',
                'required|trim|min_length[5]|matches[password2]',
                [
                    'min_length' => 'Password terlalu pendek',
                    'matches' => 'Password tidak cocok !',
                ]
            );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

        if($this->form_validation->run() == FALSE) {
            $data['subtitle'] = 'Update User';
            $data['title'] = 'User';
            $data['user']=$this->User_model->get_by_id($id);
            $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
            $this->load->view('layout/header', $data);
            $this->load->view('layout/sidebar');
            $this->load->view('user/user_update', $data);    
            $this->load->view('layout/footer', $data);
        } else {     
            $id = $this->input->post('user_id');
            $nama = htmlspecialchars($this->input->post('nama'));
            $role = $this->input->post('role');
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            
            $upload_image = $_FILES['foto'];

            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '2048';
            $config['upload_path'] = './assets/img/user/';
            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

            $path		= './assets/img/user/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('foto')) {
                @unlink($path.$this->input->post('fotolama'));               

                $foto = $this->upload->data('file_name');
                
                $data = array(
                    "nama"    => $nama,
                    "password"=> $password,
                    "foto"    => $foto,
                    "role"    => $role
                );
                $this->User_model->update($id, $data);
                $this->session->set_flashdata('update', '<div class="badge badge-success">Data Berhasil Di Tambahkan</div>');
                redirect('Beranda', 'refresh');
            } else {
                $data = array(
                    "nama"    => $nama,
                    "password"=> $password,
                    "role"    => $role
                );
                $this->User_model->update($id, $data);
                $this->session->set_flashdata('update', '<div class="badge badge-success">Data Berhasil Di Tambahkan</div>');
                redirect('Beranda', 'refresh');
            }
        }
    } else {
        $data['subtitle'] = 'Update User';
        $data['title'] = 'User';
        $data['user']= $this->User_model->get_by_id($id);
        $data['visitor'] 	= $this->Beranda_model->visitor_count();
			$data['analisa'] 	= $this->Beranda_model->analisa_count();
			$data['data']		=$this->Diagnosa_model->data_statistisk();
        $this->load->view('layout/header', $data);
        $this->load->view('layout/sidebar');
        $this->load->view('user/user_update', $data);    
        $this->load->view('layout/footer', $data);
    }
}

public function delete($id) 
{
    $row = $this->User_model->get_by_id($id);
    $path		= './assets/img/user/';
    $foto = $row->foto;

    if ($row) {
        @unlink($path.$foto); //hapus foto pada direktori penyimpanan
        $this->User_model->delete($id);
        $this->session->set_flashdata('delete', 'Data Dihapus');
        redirect(site_url('user'));
    } else {
        $this->session->set_flashdata('delete', 'Data Tidak Ditemukan');
        redirect(site_url('user'));
    }
}

public function _rules() 
    {
    $this->form_validation->set_message('required', 'Tidak Boleh Kosong');
    $this->form_validation->set_rules(
                 'email',
                 'Email',
                 'required|trim|valid_email|is_unique[user.email]',
                 [
                     'is_unique' => 'Email Sudah Terdaftar !',
                 ]
             );
    $this->form_validation->set_rules(
             'password1',
             'Password',
             'required|trim|min_length[5]|matches[password2]',
             [
                 'min_length' => 'Password terlalu pendek',
                 'matches' => 'Password tidak cocok !',
             ]
         );
         $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
    
    $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }


        
}
        
    /* End of file  user.php */
        
                            