<body>

	<!-- Top menu -->
	<nav class="navbar navbar-inverse" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
					data-target="#top-navbar-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= base_url('') ?>"></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="top-navbar-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="<?= base_url('Diagnosa') ?>" class="li-text">
							<i class="fa fa-spinner"></i> Analisa
                        </a>
                        <a href="<?= base_url('Diagnosa/riwayat') ?>" class="li-text">
						<i class="fa fa-clone"></i> Riwayat
                        </a>
                        <a href="<?= base_url('Diagnosa/statistik') ?>" class="li-text">
						<i class="fa fa-area-chart"></i> Statistik
						</a>
						<!-- <a href="" class="li-text">
						<i class="fa fa-comments"></i> FAQ
                        </a> -->
						<a href="<?= base_url('Diagnosa/about') ?>" class="li-text">
						<i class="fa fa-info"></i> Tentang
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>