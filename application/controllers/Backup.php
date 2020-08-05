<?php 
class Diagnosa extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Indikator_model');
        $this->load->model('Strategi_model');
        $this->load->model('Diagnosa_model');
        $this->load->model('Hasil_model');
        
        }
    public function index ()
    {
        $data['analisis'] = $this->Indikator_model->get();
        $this->load->view('layout/header_user', $data);
        $this->load->view('layout/topbar_user', $data);
        $this->load->view('index', $data);
        $this->load->view('layout/footer_user', $data);
    }

    public function diagnosa ()
    {
    /*
    | ----------------------------------------------------------------------------
    |  CEK DAN COCOKKAN KONDISI SERTA INDIKATOR YANG DI PILIH USER DENGAN DATABASE
    | ----------------------------------------------------------------------------
    |*/
    $arbobot = array('1.0', '0.9', '0.8', '0.7', '0.6', '0.5', '0.4', '0.3', '0.2', '0.1');
    $arindikator = array();
    $arkondisi = array();
    
        $name_semua = count($this->input->post('kondisi[]'));
        $inptanggal = date('Y-m-d H:i:s');
    //    var_dump($name_semua);
        // $j=0;
        // for($i=0; $i <= 25; $i++){ // Ambil id dari indikator = 1, 2, 3, 4 ,... ,26
        //     $test1 = explode("_", $this->input->post('kondisi')[$i]);
            
            
        //     if(!empty($test1[0])){ //id selain dari 0
        //         $kondisi = $this->db->query("SELECT * FROM kondisi WHERE kondisi_id IN ($test1[1])");//query kondisi
        //         $query = $this->db->query("SELECT strategi_id FROM basis_pengetahuan WHERE indikator_id IN ($i) GROUP BY strategi_id ORDER BY strategi_id");
        //         // return $query;
        //         foreach ($query->result_array() as $row) {
        //             $cari_strategi = $this->db->query("SELECT DISTINCT * FROM strategi WHERE strategi_id = $row[strategi_id]");
        //             $strategi = $row['strategi_id'];
        //             foreach($cari_strategi->result_array() as $row){
                        
        //                 // var_dump($row['strategi_nama']); // ambil nama strategi
        //                 $p = $this->db->query("SELECT strategi_id, mb, md, indikator_id FROM basis_pengetahuan WHERE indikator_id IN ($i) AND strategi_id = $row[strategi_id]");
        //                 // return $p->num_rows();
                        
                        
                        
                        
        //             }
        //             // echo $strategi;
        //         }
        //         foreach ($kondisi->result_array() as $kon) {
        //             $nama_kondisi = $kon['kondisi_nama'];
        //         }

        //     } else{
        //        echo '';
        //     }
           
        // }
        
        // echo "</br>";
        // echo $test1[0]; //menghitung jumlah indikator = 26
        // echo "</br>";
        $k = 1;
        for ($i = 0; $i < count($_POST['kondisi']); $i++) {
            $kondisi = explode("_", $_POST['kondisi'][$i]);
            if (strlen($_POST['kondisi'][$i]) > 1) {
              $arindikator += array($kondisi[0] => $kondisi[0]); // array indikator di pilih user
              $arkondisi += array($kondisi[0] => $kondisi[1]); // array kondisi yang dipilih
            }
        }
        //    var_dump($arindikator);
        //    var_dump($arkondisi);
           
            $query_kondisi = $this->db->query("SELECT * FROM kondisi order by kondisi_id");
            foreach ($query_kondisi->result_array() as $key => $value) {
                $kondisi_label[$key['kondisi_id']] = $value['kondisi_nama']; //string label kondisi
                $nilai_cf_user[$key['kondisi_id']] = $value['cf_user'];
                $coba_tampil = $kondisi_label;
            }

            $query_strategi = $this->db->query("SELECT * FROM strategi order by strategi_id");
            foreach ($query_strategi->result_array() as $key => $value) {
                $indikator[$key['strategi_id']] = $value['strategi_nama'];
                $detail[$key['strategi_id']]    = $value['strategi_detail'];
                $saran[$key['strategi_id']]     = $value['strategi_saran'];
                $foto[$key['strategi_id']]      = $value['foto'];
            }
            
        // for($j=0; $j <= 25; $j++){ //Ambil id dari kondisi = 1, 2, 3, 4 ,.. ,10
        //     $name_indikator = explode("_", $this->input->post('kondisi')[$j]);
        //     $name_kondisi = explode("_", $this->input->post('kondisi')[$j]);
        //     // var_dump($name_indikator[0]);// id indikator yang di pilih user
        // }
        // var_dump($name_kondisi[1]); // id kondisi yang di pilih user
            // if(!empty($name_indikator[0]) && !empty($name_kondisi[1])){
            //     $query_kondisi = $this->db->query("SELECT * FROM kondisi WHERE kondisi_id IN ($j)");//query kondisi
            //     $query = $this->db->query("SELECT strategi_id FROM basis_pengetahuan WHERE indikator_id IN ($j) GROUP BY strategi_id ORDER BY strategi_id"); // strategi sesuai indikator user
            //     // return $query;
            //     foreach ($query->result_array() as $row) {
            //         $cari_strategi = $this->db->query("SELECT DISTINCT * FROM strategi WHERE strategi_id = $row[strategi_id]");
                    
            //         foreach ($query_kondisi->result_array() as $row) {
            //             // var_dump($row['kondisi_id']);
            //         }
                    
            //     }
            //     // return $query;
                
            // } else{
            //     echo 'pilih indikator nya';
            // }
        // var_dump($test);
        // $j++;
    // }    
        
      
    /*
    | ------------------------------------------------------------------------
    |  PERHITUNGAN NILAI CF
    | ------------------------------------------------------------------------
    |*/
        $sql_strategi = $this->db->query("SELECT * FROM strategi order by strategi_id");
        $array_strategi = array();
        foreach ($sql_strategi->result_array() as $key => $value) {
            // var_dump($rpenyakit);
            
            $cftotal_temp = 0;
            $cf = 0;
            $query_indikator = $this->db->query("SELECT * FROM basis_pengetahuan where strategi_id = $value[strategi_id]");
            $cflama = 0;
            // $rgejala = mysqli_fetch_array($query_indikator);
            
            
            foreach ($query_indikator->result_array() as $key => $value) {
              $array_kondisi = explode("_", $_POST['kondisi'][0]);
              $indikator = $array_kondisi[0];
              
              
              
              
              
              for ($i = 0; $i < count($_POST['kondisi']); $i++) {
                $array_kondisi = explode("_", $_POST['kondisi'][$i]);
                $indikator = $array_kondisi[0];
                if ($value['strategi_id'] == $indikator) {
                  $cf = ($value['mb'] - $value['md']) * $arbobot[$array_kondisi[1]];
                  if (($cf >= 0) && ($cf * $cflama >= 0)) {
                    $cflama = $cflama + ($cf * (1 - $cflama));
                  }
                  if ($cf * $cflama < 0) {
                    $cflama = ($cflama + $cf) / (1 - Min(abs($cflama), abs($cf)));
                  }
                  if (($cf < 0) && ($cf * $cflama >= 0)) {
                    $cflama = $cflama + ($cf * (1 + $cflama));
                    
                  }
                }
              }
            }
            // var_dump($array_kondisi);
            if ($cflama > 0) {
              $array_strategi += array($value['strategi_id'] => number_format($cflama, 4));
              
            } 
        
    }

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
                        hasil_nilai
                        ) 
                    VALUES(
                        '$input_strategi',
                        '$input_indikator',
                        '$inptanggal',
                        '$strategi_1[1]',
                        '$nilai[1]'
                        )");







            // if( $sqlstra->num_rows() > 0) {
            //     $row = $sqlstra->row_array();
            //     // $result = $sqlstra->result_array(); //or $query->result_array() to get an array
            //     foreach( $sqlstra->result_array() as $data )
            //     {
            //         $id = $row['strategi_id'];
            //         $cftotal_temp = 0;
            //         $cf = 0;
            //         $sqlindikator = $this->db->query("SELECT * FROM basis_pengetahuan where strategi_id=$data[strategi_id]")->result_array();
            //         // $a = mysqli_fetch_array($sqlindikator);
            //         $cflama = 0;

            //         foreach ($sqlindikator as $baris) {
            //             $arkondisi = explode("_", $this->input->post('kondisi')[0]);
                        
            //             $indikator = $arkondisi[0];
                        

            //             for ($i = 0; $i < 6; $i++) {
            //                 $arkondisi = explode("_", $this->input->post('kondisi')[$i]);
            //                 $indikator = $arkondisi[0];
                            
            //                 if ($baris['indikator_id'] == $indikator) {
            //                     $cf = ($baris['mb'] - $baris['md']) * $arbobot[$arkondisi[1]];
            //                   if (($cf >= 0) && ($cf * $cflama >= 0)) {
            //                     $cflama = $cflama + ($cf * (1 - $cflama));
            //                   }
            //                   if ($cf * $cflama < 0) {
            //                     $cflama = ($cflama + $cf) / (1 - Min(abs($cflama), abs($cf)));
            //                 }
            //                 if (($cf < 0) && ($cf * $cflama >= 0)) {
            //                     $cflama = $cflama + ($cf * (1 + $cflama));
                                
            //                   }
            //                 }
            //               }
            //               if ($cflama > 0) {
            //                 $arstra += array($baris['strategi_id'] => number_format($cflama, 4));
                            
            //               }
 
            //         }
            //         arsort($arstra);

            //         $inpindikator = serialize($arindikator);
            //         $inpstrategi = serialize($arstra);
                    

            //         $np1 = 0;
            //         foreach ($arstra as $key1 => $value1) {
            //             $np1++;
            //             $idstra1[$np1] = $key1;
            //             $vlstra1[$np1] = $value1;
                    
            //         // $this->db->query("INSERT INTO hasil(
            //         //         strategi,
            //         //         indikator,
            //         //         tanggal,
            //         //         id_hasil,
            //         //         hasil_nilai
            //         //         ) 
            //         //     VALUES(
            //         //         '$inpstrategi',
            //         //         '$inpindikator',
            //         //         '$inptanggal',
            //         //         '$idstra1[1]',
            //         //         '$vlstra1[1]'
            //         //         )");

            //             // $hasil = array(
            //             //     'strategi' => $inpstrategi,
            //             //     'indikator' => $inpindikator,
            //             //     'tanggal' => $inptanggal,
            //             //     'id_hasil' => $idstra1[1],
            //             //     'hasil_nilai' => $vlstra1[1]
            //             // );

            //             // $this->Hasil_model->simpan($hasil);
            //         }
                    

                    
            //     }
            // }
            
            
                
                
                
            

              
                    
          
        // }               
                  
    }
}
?>