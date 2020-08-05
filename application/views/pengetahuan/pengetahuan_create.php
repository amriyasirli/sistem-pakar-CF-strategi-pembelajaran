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
                            
                        <!-- ################# FORM CREATE ################### -->

                        <?= form_open_multipart('Pengetahuan/create') ?>
                        <div class="row p-t-20">
							<div class="col-md-6">
                        <div class="form-group form-floating-label">
                          <select class="form-control input-border-bottom" name="strategi" id="selectFloatingLabel" required>
                            <option>&nbsp;</option>
                            <?php foreach($strategi as $p) : ?>
                            <option value="<?= $p->strategi_id?>"><?= $p->strategi_id?> - <?= $p->strategi_nama?></option>
                            <?php endforeach; ?>
                          </select>
                          <label for="selectFloatingLabel2" class="placeholder">Strategi Pembelajaran</label>
                          <?= form_error('strategi') ?>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group form-floating-label">
                          <select class="form-control input-border-bottom" name="indikator" id="selectFloatingLabel" required>
                            <option>&nbsp;</option>
                            <?php foreach($indikator as $p) : ?>
                            <option value="<?= $p->indikator_id?>">I<?= $p->indikator_id?> - <?= $p->indikator_nama?></option>
                            <?php endforeach; ?>
                          </select>
                          <label for="selectFloatingLabel2" class="placeholder">Indikator</label>
                          <?= form_error('indikator') ?>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group form-floating-label">
                            <input id="inputFloatingLabel" type="text" name="mb" id="" class="form-control input-border-bottom">
							<label for="inputFloatingLabel" class="placeholder">Nilai MB</label>
                          <?= form_error('mb') ?>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group form-floating-label">
                            <input id="inputFloatingLabel" type="text" name="md" id="" class="form-control input-border-bottom">
							<label for="inputFloatingLabel" class="placeholder">Nilai MD</label>
                          <?= form_error('md') ?>
                        </div>
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