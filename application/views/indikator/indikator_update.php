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
                            
                        <!-- ################# FORM UPDATE ################### -->

                        <?= form_open_multipart('Indikator/update/'. $indikator->indikator_id) ?>
                        <div class="form-group form-floating-label">
                            <input type="hidden" class="form-control" name="indikator_id" value="<?= $indikator->indikator_id?>" aria-describedby="helpId" placeholder="">
                            <input id="inputFloatingLabel" type="text" name="indikator" id="" value="<?= $indikator->indikator_nama?>" class="form-control input-border-bottom" required>
							<label for="inputFloatingLabel" class="placeholder">Indikator</label>
                          <?= form_error('indikator') ?>
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