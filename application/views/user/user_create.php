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

                        <?= form_open_multipart('User/create') ?>
                        <div class="row p-t-20">
							<div class="col-md-6">
                        <div class="form-group form-floating-label">
                            <input id="inputFloatingLabel" type="text" name="nama" id="" value="<?= set_value('nama'); ?>" class="form-control input-border-bottom" required>
							<label for="inputFloatingLabel" class="placeholder">Nama</label>
                          <?= form_error('nama') ?>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group form-floating-label">
                            <input id="inputFloatingLabel" type="email" name="email" id="" value="<?= set_value('email'); ?>" class="form-control input-border-bottom" required>
							<label for="inputFloatingLabel" class="placeholder">Email</label>
                          <?= form_error('email') ?>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group form-floating-label">
                            <input id="inputFloatingLabel" type="password" name="password1" id="" value="<?= set_value('password1'); ?>" class="form-control input-border-bottom" required>
							<label for="inputFloatingLabel" class="placeholder">Password</label>
                          <?= form_error('password1') ?>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group form-floating-label">
                            <input id="inputFloatingLabel" type="password" name="password2" id="" value="<?= set_value('password2'); ?>" class="form-control input-border-bottom" required>
							<label for="inputFloatingLabel" class="placeholder">Ulangi Password</label>
                          <?= form_error('password2') ?>
                        </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                          <label for="">Foto</label>
                          <input type="file" class="form-control" name="foto" id="" aria-describedby="helpId" placeholder="">
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