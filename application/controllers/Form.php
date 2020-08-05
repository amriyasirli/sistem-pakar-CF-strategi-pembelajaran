<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('Pengetahuan_model');
        }

	
	public function index()
	{
		$data['title'] = 'Form Angket Basis Pengetahuan';
        $data['subtitle'] = 'Angket';
        $data['rule'] = $this->Pengetahuan_model->get();
        $this->load->view('layout/header',$data);
        $this->load->view('layout/topbar_form',$data);
		$this->load->view('form',$data);
    }
    
    public function simpan ()
    {
        // $data ['rule']= $this->Pengetahuan_model->get();
        // $mb = $this->input->post('10mb');
        // $md = $this->input->post('11md');
        // var_dump($mb, $md);

        $mb = 10; 
        $md = 10;
        $id = 10;
        $kali= 33;

        //lakukan perubahan data MB & MD secara berulang-ulang sebanyak 33 kali
        for($i=1;$i<=$kali;$i++){
            
            $data = array(
                    // 'basis_id' => $row->basis_id,
                    'mb' => $this->input->post($mb++ . 'mb'),
                    'md' => $this->input->post($md++ . 'md')
            );

            $this->db->where('basis_id', $id++);
            $this->db->update('basis_pengetahuan', $data);

        }
        redirect('Form'); //setelah selesai dikembalikan ke halaman semula
    //     var_dump($data);
    // endforeach;

                // $data = array($data1);
            
            
    }
}
