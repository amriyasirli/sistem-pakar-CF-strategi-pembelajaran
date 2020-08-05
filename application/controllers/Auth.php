<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');

    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {

            $this->load->view('login');

        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'user_id' => $user['user_id'],
                        'nama' => $user['nama'],
                        'email' => $user['email'],
                        'data_created' => $user['data_created'],
                        'foto' => $user['foto'],
                        'role' => $user['role'],
                    ];
                    $this->session->set_userdata($data);

                    if ($user['role_id'] == 1) {
                        $this->session->set_flashdata('pesan', '1');
                        redirect('Beranda');
                    } else {
                        $this->session->set_flashdata('pesan', '2');
                        redirect('Beranda');
                    }
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Password Salah !</div>');
                    redirect('auth');
                }

        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert">email Tidak Terdaftar !</div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Logout Berhasil !</div>');
        redirect('auth');
    }


    public function blocked()
    {
        $data['title'] = 'Oops !';

        $this->load->view('layout/header', $data);
        $this->load->view('block', $data);
    }
}
