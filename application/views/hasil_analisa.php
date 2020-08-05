<!-- Description -->
<div class="description-container">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-sm-12 description-title">
                    <h2>Hasil Analisa Sistem</h2>
                    <h4>Sistem Pakar Strategi Pembelajaran</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Multi Step Form -->
<div class="msf-container">
    <div class="container">
  <div class="row">
    <div class="col-md-8">
        <table border="0">
            <tr>
                <td width="100" class="text-left">Nama</td>
                <td width="30">:</td>
                <td width="300" class="text-left"><?= $nama_pengguna ?></td>
            </tr>
            <tr>
                <td width="100" class="text-left">Pekerjaan</td>
                <td width="30">:</td>
                <td width="100" class="text-left"><?= $pekerjaan_pengguna ?></td>
            </tr>
            <tr>
                <td width="100" class="text-left">Gender</td>
                <td width="30">:</td>
                <td width="100" class="text-left"><?= $jenis_kelamin ?></td>
            </tr>
            <tr>
                <td width="100" class="text-left">Tanggal</td>
                <td width="30">:</td>
                <td width="300" class="text-left"><?= $tanggal ?></td>
            </tr>
        </table>
        <br>
        <br>
    </div>
  </div>
</div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 msf-form">
                <table class="table table-bordere table-dark mb-" border="0">
                    <thead>
                        <tr>
                            <th class="text-center">Kode</th>
                            <th class="text-center">Indikator Terpilih</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    <?php $ig = 0;
                    // var_dump($indikator);
                    foreach ($indikator as $key) {
                        // $kondisi = $value;
                        // $ig++;
                        // $ind = $key;
                        $query = $this->db->query("SELECT * FROM indikator where indikator_id = $key");
                        $row = $query->result_array();
                        foreach ($row as $data) {
                            # code...
                            // var_dump($data['indikator_nama']);
                            // echo '<td class="text-center">' . $ig . '</td>';
                            // echo '<td class="text-center"></td>';
                            // echo '<td class="text-left">'"</td>";
                            // echo '<td><span class="kondisipilih" style="color:' . $arcolor[$kondisi] . '">' . $arkondisitext[$kondisi] . "</span></td></tr>";
                            echo '<tr><td class="text-center">I' . str_pad($data['indikator_id'], 3, '0', STR_PAD_LEFT) . '</td>
                            <td class="text-left">' . $data['indikator_nama'] . '</td>';
                            
                        echo '</tr>';
                    } 
                }
                    ?>
                                      
                        
                    </tbody>
                </table>
            </div>
            <div class="col-md-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">Kondisi Terpilih</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php  
                        foreach ($kondisi as $key => $value) {
                            $query = $this->db->query("SELECT * FROM kondisi where kondisi_id = $value");
                            $row = $query->result_array();
                            foreach ($row as $k => $v) {
                                echo ' <tr>
                                    <td>' . $v['kondisi_nama'] . '</td>
                                </tr>';
                            }
                        
                            } 
                        ?>
                       
                    </tbody>
                </table>
            </div>
                <br />
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="text-left">Direkomendasikan</h4>
                        </div>
                        <div class="col-md-6">
                            <!-- <h4 for="last-name">Email</h4> -->
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="col-md-4">
                            <h5 class="text-left">Direkomendasikan</h5>
                            </div> -->
                        <div class="col-md-8">
                            <!-- <h3 class="text-info"> -->
                                <?php
                                    
                                    $query_strategi = $this->db->query("SELECT * FROM strategi order by strategi_id");
                                    foreach ($query_strategi->result_array() as $row) {
                                        $nama[$row['strategi_nama']] = $row['strategi_id'];
                                        $detail[$row['strategi_detail']] = $row['strategi_id'];
                                        $saran[$row['strategi_saran']] = $row['strategi_id'];
                                        $foto[$row['foto']] = $row['strategi_id'];
                                        // $nama[$k['strategi_id']] = $v['strategi_nama'];
                                        // $detail[$k['strategi_id']]    = $v['strategi_detail'];
                                        // $saran[$k['strategi_id']]     = $v['strategi_saran'];
                                        // $foto[$k['strategi_id']]      = $v['foto'];
                                    
                                    }
                                    $np = 1;
                                    $ns =0 ;
                                    foreach ($strategi as $row) {
                                        
                                        $np++;
                                        
                                        // $id_strategi[$np] = $row;
                                        // $nama_strategi[$np] = $nama[$key];
                                        // var_dump($nama[$row]);
                                    }
                                    $query = $this->db->query("SELECT * FROM strategi WHERE strategi_id = $strategi_terpilih");
                                    foreach ($query->result_array() as $strategi) {
                                        echo '<h4 class="judul"> Strategi Pembelajaran '. $strategi['strategi_nama'] . '</h4>';
                                    }
                                echo '<br><h4><span class="step">Nilai CF : '. $hasil .' <br><br> ( '. $persentasi .'% )</span></h4>';
                                
                                   echo'<br>
                                   </h3>
                               </div>
                               <div class="col-md-4">
                               <div class="card">
                               <img src="' . base_url('assets/img/strategi/'. $strategi['foto']) .'" width="350" class="rounded" alt="..." />
                               </div>';
                               
                               ?>
                            
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <button type="button" class="btn" data-toggle="modal" data-target="#detail<?= $strategi['strategi_id'] ?>">
                                Detail
                            </button>
                            <button type="button" class="btn-success" data-toggle="modal" data-target="#saran<?= $strategi['strategi_id'] ?>">
                                Saran
                            </button>
                        </div>
                        <div class="col-sm-4">
                        
                        </div>
                    </div>
                </div>  
                <br>
                <br>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-bordere table-dark mb-" border="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">Kode</th>
                                        <th class="text-center">Kemungkinan Lain</th>
                                        <th class="text-center">Nilai CF</th>
                                        <th class="text-center">Persentase</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // print_r($strategi_lain);
                                        $num = 1;
                                        foreach ($strategi_lain as $key => $value) : ?>
                                        
                                        <tr>

                                            <?php if($value == $hasil){ ?>
                                            <?php }if($strategi['strategi_id'] == $key){ ?>
                                            <?php }else{ ?>
                                                    <th class="text-center">S0<?= $key ?></th>
                                            <?php } ?>

                                            <?php if($key == 1 && $strategi['strategi_id'] != $key) { ?>
                                                <th class="text-center">Inkuiry</th>
                                            <?php }if($key == 2 && $strategi['strategi_id'] != $key) { ?>
                                                <th class="text-center">Ekspository</th>
                                            <?php }if($key == 3 && $strategi['strategi_id'] != $key) { ?>
                                                <th class="text-center">Konstektual</th>
                                            <?php }if($key == 4 && $strategi['strategi_id'] != $key) { ?>
                                                <th class="text-center">Kooperatif</th>
                                            <?php }if($key == 5 && $strategi['strategi_id'] != $key) { ?>
                                                <th class="text-center">Peningkatan Kemampaun Berfikir</th>
                                            <?php }if($strategi['strategi_id'] == $key) { ?>
                                                <!-- <th class="text-center">sudah ad</th> -->
                                            <?php }else { ?>
                                            <?php } ?>
                                            <?php if($value == $hasil){ ?>
                                            <?php }if($strategi['strategi_id'] == $key){ ?>
                                            <?php }else{ ?>
                                                    <td><?= $value; ?></td>
                                                    <td><?= round($value*100) . '%'; ?></td>
                                            <?php } ?>
                                        </tr>
                                        
                                        <?php endforeach; ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="detail<?= $strategi['strategi_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="detail">Detail</h5>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <img src="<?= base_url('assets/img/strategi/'. $strategi['foto'])?>" width="350" class="rounded" alt="..." />
                </div>
                <div class="col-md-12">
                    <br>
                        <h5><?= $strategi['strategi_detail'] ?></h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="saran<?= $strategi['strategi_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="detail">Saran</h5>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                        <h5><?= $strategi['strategi_saran'] ?></h5>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>