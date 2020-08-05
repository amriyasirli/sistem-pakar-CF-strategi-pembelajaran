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
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?= $subtitle?></h4>
                        </div>
                        <div class="card-body">
                            
                        <!-- ################# FORM CREATE ################### -->
                        
                        <a name="" id="" class="btn btn-info btn-round ml-3 mb-3" href="<?= base_url('User/create') ?>" role="button"><i class="fas fa-paper-plane"></i> Tambah</a>
                        <div class="table-responsive">
                            <table id="basic-datatables" class="table table-head-bg-info mt-4 table-hover">
                                <thead>
                                    <tr>
                                        <th width="5">No</th>
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Foto</th>
                                        <th class="text-center">Role</th>
                                        <th class="text-center">Terdaftar</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=1; foreach ($users as $user) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $user->nama?></td>
                                        <td><?= $user->email?></td>
                                        <td><img src="<?= base_url('assets/img/user/'.$user->foto) ?>" class="img-profile rounded" width="70"></td>
                                        
                                        <?php if ($user->role == 1) { ?>
                                            <td><div class="badge badge-danger">Admin</div></td>  <!-- Jika 1 berarti sebagai Admin -->
                                        <?php }else{ ?>
                                            <td><div class="badge badge-info">Member</div></td> <!-- Jika 2 berarti sebagai Member -->
                                        <?php } ?>
                                        
                                        <td><?= date('d F Y', $user->data_created)?></td>
                                        <td class="text-center"><a name="" id="" class="btn btn-xs btn-success mt-1" href="<?= base_url('User/update/'. $user->user_id) ?>"><i class="far fa-edit"></i></a>
                                        <a class="btn btn-xs btn-danger mt-1" href="<?= base_url('User/delete/'. $user->user_id) ?>" onclick="javascript: return confirm('Anda yakin ingin HAPUS data ini ? ')"><i class="far fa-trash-alt"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        

                        <!-- #################################################s -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>