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

                        <?= form_open_multipart('User/update/'. $user->user_id) ?>
                        
                        <div class="form-group">
                          <input type="hidden" class="form-control" name="user_id" id="" value="<?= $user->user_id ?>">
                          <input type="hidden" class="form-control" name="role" id="" value="<?= $user->role ?>">
                          <label for="">Nama</label>
                          <input type="text" class="form-control" name="nama" id="" value="<?= $user->nama ?>">
                          <?= form_error('nama') ?>
                        </div>
                        <div class="form-group">
                          <label for="">email</label>
                          <input type="email" class="form-control" name="email" id="" value="<?= $user->email ?>" readonly>
                        </div>
                        <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" class="form-control" name="password1">
                          <?= form_error('password1') ?>
                        </div>
                        <div class="form-group">
                          <label for="">Ulangi Password</label>
                          <input type="password" class="form-control" name="password2">
                          <?= form_error('password2') ?>
                        </div>
                        <div class="form-group">
                          <label for="">Foto</label>
                          <input type="hidden" class="form-control" name="fotolama" id="" aria-describedby="helpId" value="<?= $user->foto ?>">
                          <input type="file" class="form-control" name="foto" id="" aria-describedby="helpId" placeholder="">
                        </div>
                        <input type="submit" name="update" class="btn btn-success btn-block mt-3" href="#" value="Simpan">
                        <?= form_close() ?>

                        <!-- #################################################s -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>