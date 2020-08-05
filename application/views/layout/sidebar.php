<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="light-blue">
				
				<a href="<?= base_url('Beranda')?>" class="logo">
					<img src="<?= base_url()?>assets/img/logo/image10.png" alt="navbar brand" width="60" class="navbar-brand"><img src="<?= base_url()?>assets/img/logo/text.png" alt="navbar brand" width="93" class="navbar-brand">
				</a> 
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="light-blue">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<!-- <li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages 									
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="<?= base_url()?>assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="<?= base_url()?>assets/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="<?= base_url()?>assets/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="<?= base_url()?>assets/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li> -->
						<!-- <li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">2</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-icon notif-success"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														New user registered
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
												<div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="<?= base_url()?>assets/img/profile2.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
												<div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li> -->
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-globe"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Halaman Analisa</span>
									<span class="subtitle op-8">Sistem Pakar</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a href="<?= base_url('Diagnosa') ?>" class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="fas fa-spinner mt-2"></i>
													<span class="text">Analisa</span>
												</div>
											</a>
											<a href="<?= base_url('Diagnosa/riwayat') ?>" class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-clock"></i>
													<span class="text">Riwayat Analisa</span>
												</div>
											</a>
											<a href="<?= base_url('Diagnosa/statistik') ?>" class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-analytics"></i>
													<span class="text">Grafik Analisa</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="<?= base_url('assets/img/user/'. $this->session->userdata('foto') )?>" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="<?= base_url('assets/img/user/'. $this->session->userdata('foto'))?>" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4><?= $this->session->userdata('nama'); ?></h4>
												<p class="text-muted"><?= $this->session->userdata('email'); ?></p><a href="<?= base_url('User/profil/'. $this->session->userdata('user_id')) ?>" class="btn btn-xs btn-secondary btn-sm">Lihat Profil</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="<?= base_url('User/update/'. $this->session->userdata('user_id')) ?>">Pengaturan Akun</a>
										<a class="dropdown-item" href="#">Ganti Password</a>
										<a class="dropdown-item" href="<?= base_url('Auth/logout') ?>">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-1">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="<?= base_url('assets/img/user/'. $this->session->userdata('foto') )?>" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= $this->session->userdata('nama'); ?>
									<?php if($this->session->userdata('role') == 1){ ?>
											<span class="user-level">Administrator</span>
											<span class="caret"></span>

										<?php } else{ ?>
											<span class="user-level">Member</span>
											<span class="caret"></span>
										<?php }
									?>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="<?= base_url('User/profil/'. $this->session->userdata('user_id')) ?>">
											<span class="link-collapse">Profil</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('User/update/'. $this->session->userdata('user_id')) ?>">
											<span class="link-collapse">Pengaturan Akun</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('Auth/logout') ?>">
											<span class="link-collapse">Logout</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-light-blue">
						<li <?= $this->uri->segment(1) == 'Beranda' || $this->uri->segment(1) == '' ? 'class="nav-item active"' : 'class="nav-item"' ?>>
							<a href="<?= base_url('Beranda') ?>">
								<i class="flaticon-imac"></i>
								<p>Beranda</p>
								
							</a>
						</li>
						<li <?= $this->uri->segment(1) == 'Strategi'? 'class="nav-item active"' : 'class="nav-item"' ?>>
							<a href="<?= base_url('Strategi') ?>">
								<i class="flaticon-coins"></i>
								<p>Strategi</p>
								
							</a>
						</li>
						<li <?= $this->uri->segment(1) == 'Indikator'? 'class="nav-item active"' : 'class="nav-item"' ?>>
							<a href="<?= base_url('Indikator') ?>">
								<i class="flaticon-list"></i>
								<p>Indikator</p>
								<span class="badge badge-default"><?= $this->db->count_all('indikator'); ?></span>
							</a>
						</li>
						<li <?= $this->uri->segment(1) == 'Pengetahuan'? 'class="nav-item active"' : 'class="nav-item"' ?>>
							<a href="<?= base_url('Pengetahuan') ?>">
								<i class="flaticon-network"></i>
								<p>Pengetahuan</p>
								
							</a>
						</li>
						<!-- <li <?= $this->uri->segment(1) == 'Keterangan'? 'class="nav-item active"' : 'class="nav-item"' ?>>
							<a href="<?= base_url('Keterangan') ?>">
								<i class="flaticon-exclamation"></i>
								<p>Keterangan</p>
								
							</a>
						</li> -->
						<li <?= $this->uri->segment(1) == 'Riwayat'? 'class="nav-item active"' : 'class="nav-item"' ?>>
							<a href="<?= base_url('Riwayat') ?>">
								<i class="flaticon-clock"></i>
								<p>Riwayat</p>
								
							</a>
						</li>
						<!-- <li <?= $this->uri->segment(1) == 'Analisis'? 'class="nav-item active"' : 'class="nav-item"' ?>>
							<a href="<?= base_url('Analisis') ?>">
								<i class="flaticon-analytics"></i>
								<p>Analisis</p>
								
							</a>
						</li>
						<li <?= $this->uri->segment(1) == 'Laporan'? 'class="nav-item active"' : 'class="nav-item"' ?>>
							<a href="<?= base_url('Laporan') ?>">
								<i class="flaticon-envelope-3"></i>
								<p>Laporan</p>
								
							</a>
						</li> -->
						<li <?= $this->uri->segment(1) == 'Panduan'? 'class="nav-item active"' : 'class="nav-item"' ?>>
							<a href="<?= base_url('Panduan') ?>">
								<i class="flaticon-agenda-1"></i>
								<p>Panduan</p>
								
							</a>
						</li>
						<li <?= $this->uri->segment(1) == 'User'? 'class="nav-item active"' : 'class="nav-item"' ?>>
							<a href="<?= base_url('User') ?>">
								<i class="flaticon-user-5"></i>
								<p>User Management</p>
								
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->