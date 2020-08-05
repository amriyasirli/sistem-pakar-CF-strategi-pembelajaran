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
						</ul>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"><?= $subtitle?></h4>
								</div>
								<div class="card-body">
								<a name="" id="" class="btn btn-info btn-round ml-3 mb-3" href="<?= base_url('Strategi/create') ?>" role="button"><i class="fas fa-paper-plane"></i> Tambah</a>
									<div class="table-responsive">
										<table class="table table-head-bg-info mt-4 table-hover">
											<thead>
                                                <tr>
                                                    <!-- <th>Id</th> -->
                                                    <th>Nama</th>
                                                    <th>Pekerjaan</th>
                                                    <th>Tanggal</th>
                                                    <th>Strategi Terpilih</th>
                                                    <th>Nilai CF</th>
                                                </tr>
											</thead>
											<tbody>
                                            <?php
                    
                                                    foreach ($riwayat as $row) :
                                                ?>
                                                <tr>
                                                    <!-- <td class="text-left"><?= $row['id_hasil'] ?></td> -->
                                                    <td class="text-left"><?= $row['nama'] ?></td>
                                                    <td class="text-left"><?= $row['pekerjaan'] ?></td>
                                                    <td class="text-left"><?= $row['tanggal'] ?></td>
                                                    <td class="text-left"><?= $row['strategi_nama'] ?></td>
                                                    <td class="text-left"><?= $row['hasil_nilai'] ?></td>
                                                </tr>
                                            <?php endforeach; ?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card full-height">
								<div class="card-header">
									<div class="card-title">Riwayat Aktivitas</div>
								</div>
								<div class="card-body">
								<div class="text-center">
								<div class="badge badge-lg badge-default mt-3 mb-4"><i class="fas fa-clock"></i> Update Sistem : <?= date('d F Y') ?></div>
								</div>
									<ol class="activity-feed">
										<?php
										$no = 0;
											$warna =['warning', 'success', 'danger', 'primary', 'default', 'info', 'secondary'];
											foreach ($feed as $row) :
										?>
										<li class="feed-item feed-item-<?= $warna[$no++] ?>">
											<time class="date" datetime="9-25"><?= $row['nama'] ?> (<?= $row['pekerjaan'] ?>)</time>
											<span class="text">Telah melakukan analisa Pada <h6 class="text-info"><?= $row['tanggal'] ?></h6 class="text-info"></span>
										</li>
											<?php endforeach; ?>
									</ol>
								</div>
							</div>
					</div>
				</div>
			</div>