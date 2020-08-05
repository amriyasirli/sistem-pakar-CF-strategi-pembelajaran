



		<div class="main-panel">
			<div class="content">
				<div class="panel-header bg-info-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold"><?= $title?></h2>
								<h5 class="text-white op-7 mb-2">Sistem Pakar Strategi Pembelajaran</h5>
							</div>
							<!-- <div class="ml-md-auto py-2 py-md-0">
								<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
								<a href="#" class="btn btn-white btn-round">Add Customer</a>
							</div> -->
						</div>
					</div>
				</div>
				
				<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-coins text-warning"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Strategi</p>
												<h4 class="card-title"><?= $strategi ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body ">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-list text-success"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Indikator</p>
												<h4 class="card-title"><?= $indikator ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-network text-danger"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">Pengetahuan</p>
												<h4 class="card-title"><?= $pengetahuan ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="card card-stats card-round">
								<div class="card-body">
									<div class="row">
										<div class="col-5">
											<div class="icon-big text-center">
												<i class="flaticon-profile-1 text-primary"></i>
											</div>
										</div>
										<div class="col-7 col-stats">
											<div class="numbers">
												<p class="card-category">User</p>
												<h4 class="card-title"><?= $user ?></h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Overall statistics</div>
									<div class="card-category">Informasi tentang statistik sistem</div>
									<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-1"></div>
											<h6 class="fw-bold mt-3 mb-0">Pengunjung</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-2"></div>
											<h6 class="fw-bold mt-3 mb-0">Analisa</h6>
										</div>
										<div class="px-2 pb-2 pb-md-0 text-center">
											<div id="circles-3"></div>
											<h6 class="fw-bold mt-3 mb-0">Pakar</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php
												// $url = file_get_contents('https://api.kawalcorona.com/indonesia/');
												// $data = json_decode($url, true);
											?>
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">Grafik Hasil Analisa Sistem</div>
									<div class="row py-3">
										<div class="col-md-4 d-flex flex-column justify-content-around">
											<div>
											
												<h6 class="fw-bold text-uppercase text-warning op-8">Inkuiry</h6>
											</div>
											<div>
												<h6 class="fw-bold text-uppercase text-success op-8">Ekspository</h6>
											</div>
											<div>
												<h6 class="fw-bold text-uppercase text-danger op-8">Kontekstual</h6>
											</div>
											<div>
												<h6 class="fw-bold text-uppercase text-info op-8">Kooperatif</h6>
											</div>
											<div>
												<h6 class="fw-bold text-uppercase text-default op-8">P.Kemampaun Berfikir</h6>
											</div>
										</div>
										<div class="col-md-8">
											<div id="chart-container">
												<canvas id="totalIncomeChart"></canvas>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						
						<div class="col-md-4">
							<div class="card full-height">
								<div class="card-header">
									<div class="card-title">Riwayat Aktivitas</div>
								</div>
								<div class="card-body">
									<ol class="activity-feed">
										<?php
										$no = 0;
											$warna =['warning', 'success', 'danger', 'info'];
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
						

						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="card-head-row">
										<div class="card-title">Grafik Hasil Analisa Sistem</div>
										<div class="card-tools">
											<!-- <a href="#" class="btn btn-info btn-border btn-round btn-sm mr-2">
												<span class="btn-label">
													<i class="fa fa-pencil"></i>
												</span>
												Export
											</a>
											<a href="#" class="btn btn-info btn-border btn-round btn-sm">
												<span class="btn-label">
													<i class="fa fa-print"></i>
												</span>
												Print
											</a> -->
										</div>
									</div>
								</div>
								<div class="card-body">
									<div class="chart-container" style="min-height: 375px">
										<canvas id="statisticsChart"></canvas>
									</div>
									<div id="myChartLegend"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			
			