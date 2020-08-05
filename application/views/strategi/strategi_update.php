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

                        <?= form_open_multipart('Strategi/update/'. $strategi->strategi_id) ?>
                        <div class="row p-t-20">
                        <div class="col-md-6">
                        <div class="form-group form-floating-label">
                            <input type="hidden" class="form-control" name="strategi_id" value="<?= $strategi->strategi_id?>" aria-describedby="helpId" placeholder="">
                            <input id="inputFloatingLabel" type="text" name="strategi_nama" id="" value="<?= $strategi->strategi_nama?>" class="form-control input-border-bottom" required>
							<label for="inputFloatingLabel" class="placeholder">Nama Strategi</label>
                          <?= form_error('strategi_nama') ?>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group form-floating-label">
                          <label for="inputFloatingLabel">Foto</label>
                          <input type="hidden" class="form-control" name="fotolama" value="<?= $strategi->foto?>" aria-describedby="helpId" placeholder="">
                          <input type="file" id="inputFloatingLabel" class="form-control" name="foto" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        </div>
                        <div class="col-md-12 mt-3">
                          <?= form_error('strategi_detail') ?>
							<label for="inputFloatingLabel" class="placeholder mb-3 ml-2">Detail Strategi <?= $strategi->strategi_nama?></label>
                            <section id="editor">
                                <textarea name="strategi_detail" id="edit"><?= $strategi->strategi_detail?></textarea>
                            </section>
                        </div>
                        <div class="col-md-12 mt-3">
                          <?= form_error('strategi_saran') ?>
							<label for="inputFloatingLabel" class="placeholder mb-3 ml-2">Saran Strategi <?= $strategi->strategi_nama?></label>
                            <section id="editor">
                                <textarea name="strategi_saran" id="edit"><?= $strategi->strategi_saran?></textarea>
                            </section>
                        </div>
                        
                        <input type="submit" name="update" class="btn btn-success btn-block mt-3" href="#" value="Update">
                        <?= form_close() ?>

                        <!-- #################################################s -->

                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>