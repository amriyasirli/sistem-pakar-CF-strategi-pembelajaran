<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title"><?= $title?></h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="<?= base_url('Beranda') ?>">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url($title) ?>"><?= $title?></a>
                    </li>
                </ul>
            </div>
            
                            
                        <!-- ################# FORM CREATE ################### -->
                        
                        <!-- TimeLine -->
                        <div class="row">
                            <div class="col-md-12">
                                
                                <ul class="timeline">
                                    <li>
                                        <div class="timeline-badge warning"><i class="flaticon-message"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">Url Website</h4>
                                                <!-- <p><small class="text-muted"><i class="flaticon-message"></i> 11 hours ago via Twitter</small></p> -->
                                            </div>
                                            <div class="timeline-body">
                                                <p>Untuk melakukan analisa strategi pembelajaran kunjungi : <a href="<?= base_url('Diagnosa') ?>">http://sistempakar.my.id/Diagnosa</a> </p>
                                                <p>Jika untuk masuk ke admin panel kunjungi :<strong class="text-danger"> *</strong> <a href="<?= base_url('Diagnosa') ?>">http://sistempakar.my.id/Auth</a></p>
                                                <p class="text-danger">*) Telah Memiliki akun baik untuk admin maupun untuk pakar</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge success"><i class="flaticon-network"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">Halaman Diagnosa</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p>Silahkan masukkan <strong>nama</strong>, <strong>pekerjaan</strong>, dan <strong>jenis kelamin</strong> anda. 
                                                Setelah lanjut akan di sediakan beberapa pilihan <strong>indikator</strong> pertanyaan, dan silahkan pilih sesuai
                                                 yang anda rasakan. Dan setelah itu mulai lakukan <strong class="badge badge-success"><i class="fas fa-spinner"></i> analisa</strong>. Jika analisa berhasil 
                                                 akan di tampilkan hasil analisa.</p> 
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-badge danger"><i class="flaticon-customer-support"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">Panel Admin</h4>
                                            </div>
                                            <div class="timeline-body">
                                            <p>Halaman admin tersedia untuk mengatur semua kebutuhan dari aplikasi sistem pakar. Halaman admin disediakan beberapa menu di bagian kiri yang bisa anda gunakan. Dengan cacatan anda perlu masuk melalui akun yang di 
                                                sediakan oleh admin. Perlu di ketahuai bahwa di pojok kanan atas pada logo <strong class="badge badge-danger"><i class="fas fa-globe"></i></strong> 
                                                akan mengentarkan anda dengan cepat ke halaman diagnosa. Juga pada foto pengguna bisa anda klik untuk beberapa pilihan termasuk lihat profil dan keluar dari aplikasi</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="timeline-inverted">
                                        <div class="timeline-badge info"><i class="flaticon-graph-2"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">Statistics Overview</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p>Pada aplikasi ini sudah tersedia statistik informasi analisa sistem yang terdapat di halaman <strong class="badge badge-info"><i class="fas fa-laptop"></i> Beranda</strong>, informasi berupa grafik hasil analisa sistem dan lainnya.</p>
                                                <p>Untuk pengguna selain admin dan pakar juga bisa melihat statistik informasi hasil analisa sistem pada : <a href="<?= base_url('Diagnosa') ?>">http://sistempakar.my.id/Diagnosa/statistik</a></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="timeline-badge default"><i class="flaticon-exclamation"></i></div>
                                        <div class="timeline-panel">
                                            <div class="timeline-heading">
                                                <h4 class="timeline-title">More Information</h4>
                                            </div>
                                            <div class="timeline-body">
                                                <p>Untuk informasi lebih lanjut silahkan kunjungi <a href="<?= base_url('Diagnosa') ?>">http://sistempakar.my.id/Diagnosa/about</a>.
                                                Pada halaman pengguna selain admin dan pakar terdapat pada menu <strong class="badge badge-default"><i class="fas fa-info"></i> About</strong></p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- #################################################s -->

                        
        </div>
    </div>