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
                        
                        <a name="" id="" class="btn btn-info btn-round ml-3 mb-3" href="<?= base_url('Indikator/create') ?>" role="button"><i class="fas fa-paper-plane"></i> Tambah</a>
                        <div class="table-responsive">
                            <table id="basic-datatables" class="table table-head-bg-info mt-4 table-hover">
                                <thead>
                                    <tr>
                                        <th width="5">No</th>
                                        <th class="text-center">Indikator</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $no=1; foreach ($indikator as $indi) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $indi->indikator_nama?></td>
                                        <td class="text-center"><a name="" id="" class="btn btn-xs btn-success mt-1" href="<?= base_url('Indikator/update/'. $indi->indikator_id) ?>" class="hapus" data="<?= $indi->indikator_nama?>"><i class="far fa-edit"></i></a>
                                        <a class="btn btn-xs btn-danger mt-1" href="<?= base_url('Indikator/delete/'. $indi->indikator_id) ?>" onclick="javascript: return confirm('Anda yakin ingin HAPUS data ini ? ')"><i class="far fa-trash-alt"></i></a></td>
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