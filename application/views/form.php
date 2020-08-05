			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title"><?= $title?></h4>
					</div>
					<div class="row">
						<div class="col-lg-12">
							<div class="card">
								<div class="card-body">
									<button type="button" class="btn btn-danger mt-3 mb-3" data-toggle="modal" data-target="#modal-xl">
										<i class="fas fa-exclamation-triangle"></i> Petunjuk Pengisian Nilai CF Pakar
									</button>
                                <div class="table table-responsive">
                                    <table>
                                        <thead class="thead-dark">
                                            <tr>
                                            <th width="10">No. </th>
                                            <!-- <th scope="col">Kode Strategi</th> -->
                                            <th width="70">Strategi</th>
                                            <!-- <th scope="col">Kode Indikator</th> -->
                                            <th>Indikator</th>
                                            <th width="250">MB</th>
                                            <th width="250">MD</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
											<form class="form-inline" action="<?= base_url('Form/simpan') ?>" method="post">
												
											
                                        <?php

                                            $no = 1;
                                            foreach ($rule->result() as $row) :
                                        ?>
                                            <tr>
                                            <th scope="row"><?= $no++; ?></th>
                                            <!-- <td><?= $row->strategi_id; ?></td> -->
												<?php if($row->strategi_nama == 'Inquiry'){?>
                                            		<td><div class="badge badge-success">Inkuiry</div></td>
												<?php } if($row->strategi_nama == 'Ekspository'){?>
													<td><div class="badge badge-primary"> Ekspository</div></td>
												<?php } if($row->strategi_nama == 'Kontekstual'){?>
													<td><div class="badge badge-danger"> Kontekstual</div></td>
												<?php } if($row->strategi_nama == 'Kooperatif'){?>
													<td><div class="badge badge-warning"> Kooperatif</div></td>
												<?php } if ($row->strategi_nama == 'Peningkatan Kemampuan Berpikir'){?>
													<td><div class="badge badge-info"> P. Kemampuan Berfikir</div></td>
												<?php } ?>

                                            <!-- <td><?= $row->indikator_id; ?></td> -->
                                            <td><?= $row->indikator_nama; ?></td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <select name="<?= $row->basis_id; ?>mb" class="custom-select">
                                                        <option value="<?= $row->mb; ?>"><?= $row->mb; ?></option>
                                                        <option value="0.1">0.1 | Pasti Tidak</option>
                                                        <option value="0.2">0.2 | Hampir Pasti Tidak</option>
                                                        <option value="0.3">0.3 | Kemungkinan Besar Tidak</option>
                                                        <option value="0.4">0.4 | Mungkin Tidak</option>
                                                        <option value="0.5">0.5 | Tidak Tahu</option>
                                                        <option value="0.6">0.6 | Mungkin</option>
                                                        <option value="0.7">0.7 | Kemungkinan Besar</option>
                                                        <option value="0.8">0.8 | Hampir Pasti</option>
                                                        <option value="0.9">0.9 | Pasti</option>
														<option value="1.0">1.0 | Sangat Pasti</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="input-group mb-3">
                                                    <select name="<?= $row->basis_id; ?>md" class="custom-select">
														<option value="<?= $row->md; ?>"><?= $row->md; ?></option>
														<option value="0.1">0.1 | Pasti Tidak</option>
                                                        <option value="0.2">0.2 | Hampir Pasti Tidak</option>
                                                        <option value="0.3">0.3 | Kemungkinan Besar Tidak</option>
                                                        <option value="0.4">0.4 | Mungkin Tidak</option>
                                                        <option value="0.5">0.5 | Tidak Tahu</option>
                                                        <option value="0.6">0.6 | Mungkin</option>
                                                        <option value="0.7">0.7 | Kemungkinan Besar</option>
                                                        <option value="0.8">0.8 | Hampir Pasti</option>
                                                        <option value="0.9">0.9 | Pasti</option>
														<option value="1.0">1.0 | Sangat Pasti</option>
                                                    </select>
                                                </div>
                                            </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
										</table>
										<button type="submit" name="" id="" class="btn btn-success btn-lg btn-block mt-3">Selesai dan Simpan</button>
									</div>
									</form>
	
									
									<div class="modal fade" id="modal-xl">
										<div class="modal-dialog modal-xl">
											<div class="modal-content">
												<div class="modal-header">
													<h4 class="modal-title"><i class='icon fa fa-exclamation-triangle'></i> Petunjuk Pengisian Nilai CF Pakar !</></h4>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">&times;</span>
													</button>
												</div>
												
											
												<div class="modal-body">
												
													Silahkan pilih nilai CF yang sesuai dengan Strategi dan indikator yang ada, dimana nilai kepastian <b>(MB & MD)</b> dengan cakupan sebagai berikut:<br><br>
													<b>0.1</b> (Pasti Tidak)&nbsp;&nbsp;<br>
													<b>0.2</b> (Hampir Pasti Tidak)&nbsp;&nbsp;<br>
													<b>0.3</b> (Kemungkinan Besar Tidak)&nbsp;&nbsp;<br>
													<b>0.4</b> (Mungkin Tidak)&nbsp;&nbsp;<br>
													<b>0.5</b> (Tidak Tahu)&nbsp;&nbsp;<br>
													<b>0.6</b> (Mungkin)&nbsp;&nbsp;<br>
													<b>0.7</b> (Kemungkinan Besar)&nbsp;&nbsp;<br>
													<b>0.8</b> (Hampir Pasti)&nbsp;&nbsp;<br>
													<b>0.9</b> (Pasti)&nbsp;&nbsp;<br>
													<b>1.0</b> (Sangat Pasti)&nbsp;&nbsp;<br>
													
													<br>

													<b>CF(Pakar) = MB – MD</b><br>
													MB : Peluang kepercayaan (measure of increased belief) <br> MD : Peluang ketidakpercayaan (measure of increased disbelief) <br> <br>
													<b>Contoh:</b><br>
													Jika kepercayaan <b>(MB)</b> anda terhadap indikator <b>Menempatkan siswa sebagai subjek belajar</b> untuk Strategi <b>Inkuiry</b> adalah <b>0.8 (Hampir Pasti)</b><br>
													Dan ketidakpercayaan <b>(MD)</b> anda terhadap indikator <b>Menempatkan siswa sebagai subjek belajar</b> untuk Strategi <b>Inkuiry</b> adalah <b>0.2 (Hampir Pasti Tidak)</b><br><br>
													<b>Maka:</b> CF(Pakar) = MB – MD (0.8 - 0.2) = <b>0.6</b> <br>
													Dimana nilai kepastian anda terhadap indikator <b>Menempatkan siswa sebagai subjek belajar</b> untuk Strategi <b>Inkuiry</b> adalah <b>0.6 (Mungkin)</b> <br>
												</br>
												<div class="modal-footer justify-content-between">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												</div>
											</div>
											<!-- /.modal-content -->
										</div>
										<!-- /.modal-dialog -->
									</div>
									<!-- /.modal -->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
        </div>
            

            <script src="<?= base_url()?>assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?= base_url()?>assets/js/core/popper.min.js"></script>
	<script src="<?= base_url()?>assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?= base_url()?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?= base_url()?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?= base_url()?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


	<!-- Chart JS -->
	<script src="<?= base_url()?>assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="<?= base_url()?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="<?= base_url()?>assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="<?= base_url()?>assets/js/plugin/datatables/datatables.min.js"></script>

	
	<script src="<?= base_url()?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?= base_url()?>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?= base_url()?>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Sweet Alert -->
	<script src="<?= base_url('assets/') ?>sweetalert2/dist/sweetalert2.all.min.js"></script>

	<!-- Atlantis JS -->
	<script src="<?= base_url()?>assets/js/atlantis.min.js"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="<?= base_url()?>assets/js/setting-demo.js"></script>
</body>
</html>