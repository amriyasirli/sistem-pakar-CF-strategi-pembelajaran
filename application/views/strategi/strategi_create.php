<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <h4 class="page-title"><?= $title?></h4>
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="#">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#"><?= $title?></a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#"><?= $subtitle?></a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?= $subtitle?></h4>
                        </div>
                        <div class="card-body">
                            
                        <!-- ################# FORM CREATE ################### -->

                        <?= form_open_multipart('Strategi/create') ?>
                        <div class="row p-t-20">
							<div class="col-md-6">
                        <div class="form-group form-floating-label">
                            <input id="inputFloatingLabel" type="text" name="strategi_nama" id="" class="form-control input-border-bottom" required>
							<label for="inputFloatingLabel" class="placeholder">Nama Strategi</label>
                          <?= form_error('strategi_nama') ?>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group form-floating-label">
                            <label for="inputFloatingLabel">Foto</label>
                            <input id="inputFloatingLabel" type="file"
                            class="form-control" name="foto" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        </div>
                        <div class="col-md-12 mt-3 mb-3">
                        <!-- <div class="form-group form-floating-label"> -->
                        
                          <?= form_error('strategi_detail') ?>
							<label for="inputFloatingLabel" class="placeholder mb-3">Detail</label>
                        <section id="editor">
                            <textarea name="strategi_detail" id="edit"></textarea>
                        </section>
                            <!-- <div id='edit' style="margin-top: 30px;"> -->
                            <!-- <textarea id="inputFloatingLabel" type="text" name="strategi_detail" id="" class="form-control input-border-bottom" required></textarea> -->
                        
                        <!-- <textarea id="inputFloatingLabel" type="text" name="strategi_detail" id="" class="form-control input-border-bottom" required></textarea>-->
                        <!-- </div> -->
                        </div> 
                        <div class="col-md-12 mt-3 mb-3">
                        <!-- <div class="form-group form-floating-label"> -->
                        
							<label for="" class="placeholder mb-3">Saran</label> 
                          <?= form_error('strategi_saran') ?>
                        <section id="editor">
                            <textarea name="strategi_saran" id="edit"></textarea>
                        </section>
                            <!-- <div id='edit' style="margin-top: 30px;"> -->
                            <!-- <textarea id="inputFloatingLabel" type="text" name="strategi_saran" id="" class="form-control input-border-bottom" required></textarea> -->
                            
                        
                        <!-- <textarea id="inputFloatingLabel" type="text" name="strategi_saran" id="" class="form-control input-border-bottom" required></textarea>-->
                        <!-- </div> -->
                        </div>
                        
                        <input type="submit" name="simpan" class="btn btn-success btn-block mt-3" href="#" value="Simpan">
                        <?= form_close() ?>

                        <!-- #################################################s -->

                        </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>