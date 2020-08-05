<?php 
class Diagnosa extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Beranda_model');
        $this->load->model('Indikator_model');
        $this->load->model('Strategi_model');
        $this->load->model('Diagnosa_model');
        $this->load->model('Hasil_model');
        $this->load->library('user_agent');
        
        }
    public function index ()
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
        $data['analisis'] = $this->Indikator_model->get();
        $this->load->view('layout/header_user', $data);
        $this->load->view('layout/topbar_user', $data);
        $this->load->view('index', $data);
        $this->load->view('layout/footer_user', $data);

      }else{

        $data['analisis'] = $this->Indikator_model->get();
        $this->load->view('layout/header_user', $data);
        $this->load->view('layout/topbar_user', $data);
        $this->load->view('index', $data);
        $this->load->view('layout/footer_user', $data);
      }
    }

    public function diagnosa ()
    {
    /*
    | ----------------------------------------------------------------------------
    |  CEK DAN COCOKKAN KONDISI SERTA INDIKATOR YANG DI PILIH USER DENGAN DATABASE
    | ----------------------------------------------------------------------------
    |*/
    
    $name_semua = count($this->input->post('kondisi[]'));
    $inptanggal = date('Y-m-d H:i:s');
    $nama       = $this->input->post('nama');
    $gender     = $this->input->post('gender');
    $pekerjaan  = $this->input->post('pekerjaan');
    //    var_dump($name_semua);
    
          $arbobot = array('1.0', '0.9', '0.8', '0.7', '0.6', '0.5', '0.4', '0.3', '0.2', '0.1');
          $arindikator = array();
          $arkondisi = array();
    
          $k = 1;
          for ($i = 0; $i < 26; $i++) {
            $kondisi = explode("_", $_POST['kondisi'][$i]);
            if (strlen($_POST['kondisi'][$i]) > 1) {
              $arindikator += array($kondisi[0] => $kondisi[0]); // array indikator di pilih user
              // var_dump($arindikator);
              $arkondisi += array($kondisi[0] => $kondisi[1]); // array kondisi yang dipilih
            }
          }
            //  print_r($arkondisi);
          

            $query_strategi = $this->db->query("SELECT * FROM strategi order by strategi_id");
            foreach ($query_strategi->result_array() as $key => $value) {
                $indikator[$key['strategi_id']] = $value['strategi_nama'];
                $detail[$key['strategi_id']]    = $value['strategi_detail'];
                $saran[$key['strategi_id']]     = $value['strategi_saran'];
                $foto[$key['strategi_id']]      = $value['foto'];
            }
            
        
        
      
    /*
    | ------------------------------------------------------------------------
    |  PERHITUNGAN NILAI CF
    | ------------------------------------------------------------------------
    |*/
        $sql_strategi = $this->db->query("SELECT * FROM strategi order by strategi_id");
        $array_strategi = array();
        foreach ($sql_strategi->result_array() as $key) {
            // var_dump($rpenyakit);
            
            $cftotal_temp = 0;
            $cf = 0;
            $query_indikator = $this->db->query("SELECT * FROM basis_pengetahuan where strategi_id = $key[strategi_id]");
            $cflama = 0;
            // $rgejala = mysqli_fetch_array($query_indikator);
            
            
            foreach ($query_indikator->result_array() as $key => $value) {
              // var_dump($value['strategi_id']);
              $array_kondisi = explode("_", $_POST['kondisi'][0]);
              $indikator = $array_kondisi[0];
              
              
              
              
              for ($i = 0; $i < 26; $i++) {
                $array_kondisi = explode("_", $_POST['kondisi'][$i]);
                $indikator = $array_kondisi[0];
                // var_dump($array_kondisi);
                if ($value['indikator_id'] == $indikator) {
                  $cf = ($value['mb'] - $value['md']) * $arbobot[$array_kondisi[1]];
                  if (($cf >= 0) && ($cf * $cflama >= 0)) {
                    $cflama = $cflama + ($cf * (1 - $cflama));
                    // var_dump($cflama);
                  }
                  if ($cf * $cflama < 0) {
                    $cflama = ($cflama + $cf) / (1 - Min(abs($cflama), abs($cf)));
                    // var_dump($cflama);
                  }
                  if (($cf < 0) && ($cf * $cflama >= 0)) {
                    $cflama = $cflama + ($cf * (1 + $cflama));
                    // var_dump($cflama);
                    
                  }
                }
              }
            }
            // var_dump($array_kondisi);
            if ($cflama > 0) {
              $array_strategi += array($value['strategi_id'] => number_format($cflama, 4));
              
            } 
            
          }
          
          // if(empty($array_strategi)){
          //   echo 'Terjadi Kesalahan';
          // }else{
            arsort($array_strategi);

          
          

            $input_indikator = serialize($arindikator);
            $input_strategi = serialize($array_strategi);

            $np1 = 0;
            foreach ($array_strategi as $key1 => $value1) {
                $np1++;
                $strategi_1[$np1] = $key1;
                $nilai[$np1] = $value1;
                
            }

            $this->db->query("INSERT INTO hasil(
                        strategi,
                        indikator,
                        tanggal,
                        hasil_id,
                        hasil_nilai,
                        nama,
                        gender,
                        pekerjaan
                        ) 
                    VALUES(
                        '$input_strategi',
                        '$input_indikator',
                        '$inptanggal',
                        '$strategi_1[1]',
                        '$nilai[1]',
                        '$nama',
                        '$gender',
                        '$pekerjaan'
                        )");
      
        $data['nama_pengguna']      = $nama;
        $data['jenis_kelamin']      = $gender;
        $data['pekerjaan_pengguna'] = $pekerjaan;
        $data['tanggal'] = $inptanggal;
        $data['hasil'] = round($nilai[1], 3);
        $data['persentasi'] = round($nilai[1]*100);
        $data['strategi'] = $array_strategi;
        $data['strategi_lain'] = $array_strategi;
        $data['kondisi'] = $arkondisi;
        $data['strategi_terpilih'] = $strategi_1[1];
        // var_dump($data['strategi']);
        $data['indikator'] = $arindikator;
        $data['title'] = 'Hasil Analisa';
        $this->load->view('layout/header_user', $data);
        $this->load->view('layout/topbar_user', $data);
        $this->load->view('hasil_analisa', $data);
        $this->load->view('layout/footer_user', $data);
      // }
                  
    }

    public function riwayat ()
    {
        $data['riwayat'] = $this->Diagnosa_model->gabung()->result_array();
        $data['title'] = 'Riwayat Hasil Analisa Sistem';
        $this->load->view('layout/header_user', $data);
        $this->load->view('layout/topbar_user', $data);
        $this->load->view('riwayat', $data);
        $this->load->view('layout/footer_user', $data);
    }

    public function statistik ()
    {
        // $data['riwayat'] = $this->Diagnosa_model->gabung()->result_array();
        $data['data']=$this->Diagnosa_model->data_statistisk();
        $data['strategi'] = $this->Diagnosa_model->sqlstrategi()->result();
        $data['title'] = 'Statistik';
        $this->load->view('layout/header_user', $data);
        $this->load->view('layout/topbar_user', $data);
        $this->load->view('statistik', $data);
        $this->load->view('layout/footer_user', $data);
    }

    public function about ()
    {
        // // $data['riwayat'] = $this->Diagnosa_model->gabung()->result_array();
        // $data['data']=$this->Diagnosa_model->data_statistisk();
        // $data['strategi'] = $this->Diagnosa_model->sqlstrategi()->result();
        $data['title'] = 'Tentang Aplikasi';
        $this->load->view('layout/header_user', $data);
        $this->load->view('layout/topbar_user', $data);
        $this->load->view('about', $data);
        $this->load->view('layout/footer_user', $data);
    }
}
?>