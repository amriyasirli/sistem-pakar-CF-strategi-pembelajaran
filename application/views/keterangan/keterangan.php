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
            <div class="row justify-content-center align-items-center mb-5">
            <?php $no=1; foreach ($keterangan as $data) : ?>
                <div class="col-md-4 pl-md-0 mt-3">
                <div class="card card-post card-round">
                <img class="card-img-top" src="<?= base_url('assets/img/strategi/'. $data['foto']) ?>" alt="Card image cap">
                    <div class="d-flex">
                        <div class="avatar">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-default mt-2 mr-2 ml-2" data-toggle="modal" data-target="#detail<?= $data['strategi_id'] ?>">
                            Detail
                            </button>
                        </div>
                        <div class="avatar">
                        <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-info mt-2 ml-4" data-toggle="modal" data-target="#saran<?= $data['strategi_id'] ?>">
                            Saran
                            </button>
                        </div>
                        <div class="info-post ml-5 mt-3">
                            <p class="username"><?= $data['strategi_nama'] ?></p>
                            <p class="date text-muted"></p>
                        </div>
                    </div>
             </div>
                </div>
                
            <?php endforeach; ?>
            </div>
        </div>
    </div>

   

<!-- Modal -->
<div class="modal fade" id="#detail<?= $data['strategi_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="#saran<?= $data['strategi_id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>