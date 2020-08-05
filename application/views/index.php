

	<!-- Description -->
	<div class="description-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 description-title">
					<h2>STRATEGI PEMBELAJARAN</h2>  <h4>Sistem Pakar</h4>
				</div>
			</div>
		</div>
	</div>
	

	<!-- Multi Step Form -->
	<div class="msf-container">
		<div class="container">
			<div class="row">
				
			</div>
			<div class="row">
				<div class="col-sm-12 msf-form">

					<form role="form" action="<?= base_url('Diagnosa/diagnosa') ?>" method="post" class="form-inline">
					
					<fieldset>
						<span>Sistem Pakar <i>Certainty Factor</i>. Sebuah Rekomendasi Strategi Pembelajaran Untuk Para Guru </span>
                            <div class="col-sm-12 msf-title">
                            </div>
							<h4>Profil <span class="step">(1 / 2)</span></h4>
							<div class="form-group">
								<label for="nama">Nama Lengkap</label><br>
								<input type="text" name="nama" class="first-name form-control" id="nama" required>
							</div>
							<div class="form-group">
								<label for="pekerjaan">Anda Seorang ?</label><br>
								<input type="text" name="pekerjaan" class="last-name form-control" id="pekerjaan" placeholder="Contoh : Guru">
                            </div>
                            <div class="selects-1">
							<label for="gender">Jenis Kelamin</label><br>
								<select name="gender" class="form-control" name="select-1">
                                    <option value=""></option>
									<option value="Laki-Laki">Laki-Laki</option>
									<option value="Perempuan">Perempuan</option>
								</select>
							</div>
                            <!-- 
							<div class="form-group">
								<label for="height">Saya Seorang</label><br>
								<input type="text" name="height" class="height form-control" id="height">
							</div>
							<div class="form-group">
								<label for="weight">Bekerja di</label><br>
								<input type="text" name="weight" class="weight form-control" id="weight">
							</div> -->
							<br>
							<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
						</fieldset>

						<fieldset>
                            <h3>Temukan Strategi Mu Sekarang !</h3>
                            
							<br>
							<!-- <button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i>
								Previous</button> -->
							<button type="button" class="btn btn-next"><i class="fa fa-send"></i> Mulai</button>
                        </fieldset>
                        
                        <fieldset>
						<div class="col-xl-12">
							
						
							<h4>Indikator Strategi Pembelajaran <span class="step">(2 / 2)</span></h4>
							<h4 class="text-danger bg-dark">*Pilih jika dirasa perlu</i></h4>
							<?php
								$null='';
								foreach ($analisis as $row) :
							?>
							<div class="col-md-6 mt-5">
							<div class="selects-1 mt-5">
							<label for="kondisi"><?= $row->indikator_nama; ?></label><br>
								<select class="form-control" name="kondisi[]" required>
									<option value="<?= $null .'_'. $null; ?>"></option>
									<option value="<?= $row->indikator_id .'_'. 1; ?>">Sangat Pasti</option>
									<option value="<?= $row->indikator_id .'_'. 2; ?>">Pasti</option>
									<option value="<?= $row->indikator_id .'_'. 3; ?>">Hampir Pasti</option>
									<option value="<?= $row->indikator_id .'_'. 4; ?>">Kemungkinan Besar</option>
									<option value="<?= $row->indikator_id .'_'. 5; ?>">Mungkin</option>
									<option value="<?= $row->indikator_id .'_'. 6; ?>">Tidak Tahu</option>
									<option value="<?= $row->indikator_id .'_'. 7; ?>">Mungkin Tidak</option>
									<option value="<?= $row->indikator_id .'_'. 8; ?>">Kemungkinan Besar Tidak</option>
									<option value="<?= $row->indikator_id .'_'. 9; ?>">Hampir Pasti Tidak</option>
									<option value="<?= $row->indikator_id .'_'. 10; ?>">Pasti Tidak</option>
								</select>
							</div>
							<br>
							<br>
							</div>
								<?php endforeach; ?>
							<!-- <div class="selects-2">
								<p>Select 2:</p>
								<select class="form-control" name="select-2">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-1">
								<p>Select 1:</p>
								<select class="form-control" name="select-1">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Optionstyled-select 4</option>
								</select>
							</div>
							<div class="selects-2">
								<p>Select 2:</p>
								<select class="form-control" name="select-2">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-1">
								<p>Select 1:</p>
								<select class="form-control" name="select-1">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-2">
								<p>Select 2:</p>
								<select class="form-control" name="select-2">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-1">
								<p>Select 1:</p>
								<select class="form-control" name="select-1">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-2">
								<p>Select 2:</p>
								<select class="form-control" name="select-2">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-1">
								<p>Select 1:</p>
								<select class="form-control" name="select-1">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-2">
								<p>Select 2:</p>
								<select class="form-control" name="select-2">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-1">
								<p>Select 1:</p>
								<select class="form-control" name="select-1">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-2">
								<p>Select 2:</p>
								<select class="form-control" name="select-2">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-1">
								<p>Select 1:</p>
								<select class="form-control" name="select-1">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-2">
								<p>Select 2:</p>
								<select class="form-control" name="select-2">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-1">
								<p>Select 1:</p>
								<select class="form-control" name="select-1">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-2">
								<p>Select 2:</p>
								<select class="form-control" name="select-2">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div> -->
							<!-- <div class="form-group">
								<label for="birth-city">City:</label><br>
								<input type="text" name="birth-city" class="birth-city form-control" id="birth-city">
							</div>
							<div class="form-group">
								<label for="birth-state">State / Province:</label><br>
								<input type="text" name="birth-state" class="birthspinner-state form-control" id="birth-state">
							</div>
							<div class="form-group">
								<label for="birth-country">Country:</label><br>
								<input type="text" name="birth-country" class="birth-country form-control"
									id="birth-country">
							</div>
							<div class="form-group">
								<label for="birth-date">Date (YYYY/MM/DD):</label><br>
								<input type="text" name="birth-date" class="birth-date form-control" id="birth-date">
							</div> -->
							<br>
							<button type="submit" class="btn"><i class="fa fa-spinner"></i> Analisa</button>
						</div>
						</fieldset>

						<!-- <fieldset>
							<h4>Keadaan Peserta Didik <span class="step">(3 / 7)</span></h4>
							<div class="form-group">
								<label for="address">Address:</label><br>
								<input type="text" name="address" class="address form-control" id="address">
							</div>
							<div class="form-group">
								<label for="address-city">City:</label><br>
								<input type="text" name="address-city" class="address-city form-control"
									id="address-city">
							</div>
							<div class="form-group">
								<label for="address-state">State / Province:</label><br>
								<input type="text" name="address-state" class="address-state form-control"
									id="address-state">
							</div>
							<div class="form-group">
								<label for="address-country">Country:</label><br>
								<input type="text" name="address-country" class="address-country form-control"
									id="address-country">
							</div>
							<div class="form-group">
								<label for="address-postal-code">Postal Code:</label><br>
								<input type="text" name="address-postal-code" class="address-postal-code form-control"
									id="address-postal-code">
							</div>
							<div class="form-group">
								<label for="telephone">Telephone:</label><br>
								<input type="text" name="telephone" class="telephone form-control" id="telephone">
							</div>
							<div class="form-group">
								<label for="mobile-phone">Mobile Phone:</label><br>
								<input type="text" name="mobile-phone" class="mobile-phone form-control"
									id="mobile-phone">
							</div>
							<div class="form-group">
								<label for="email">Email:</label><br>
								<input type="text" name="email" class="email form-control" id="email">
							</div>
							<br>
							<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i>
								Previous</button>
							<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
						</fieldset>

						<fieldset>
							<h4>Sumber dan Fasilitas Yang Tersedia <span class="step">(4 / 7)</span></h4>
							<div class="form-group">
								<label for="social-facebook">Facebook:</label><br>
								<input type="text" name="social-facebook" class="social-facebook form-control"
									id="social-facebook">
							</div>
							<div class="form-group">
								<label for="social-twitter">Twitter:</label><br>
								<input type="text" name="social-twitter" class="social-twitter form-control"
									id="social-twitter">
							</div>
							<div class="form-group">
								<label for="social-google-plus">Google Plus:</label><br>
								<input type="text" name="social-google-plus" class="social-google-plus form-control"
									id="social-google-plus">
							</div>
							<div class="form-group">
								<label for="social-instagram">Instagram:</label><br>
								<input type="text" name="social-instagram" class="social-instagram form-control"
									id="social-instagram">
							</div>
							<div class="form-group">
								<label for="social-pinterest">Pinterest:</label><br>
								<input type="text" name="social-pinterest" class="social-pinterest form-control"
									id="social-pinterest">
							</div>
							<br>
							<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i>
								Previous</button>
							<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
						</fieldset>

						<fieldset>
							<h4>Karakteristik dan Metode <span class="step">(5 / 7)</span></h4>
							<div class="form-group">
								<label for="about-you">Tell us a bit about yourself:</label><br>
								<textarea name="about-you" class="about-you form-control" id="about-you"></textarea>
							</div>
							<br>
							<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i>
								Previous</button>
							<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
						</fieldset>

						<fieldset>
							<h4>Why You Want To Join <span class="step">(6 / 7)</span></h4>
							<div class="form-group">
								<label for="why-join">Tell us why you want to join our application:</label><br>
								<textarea name="why-join" class="why-join form-control" id="why-join"></textarea>
							</div>
							<br>
							<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i>
								Previous</button>
							<button type="button" class="btn btn-next">Next <i class="fa fa-angle-right"></i></button>
						</fieldset>

						<fieldset>
							<h4>Other Form Elements <span class="step">(7 / 7)</span></h4>
							<div class="radio-buttons-1">
								<p>Radio Buttons 1:</p>
								<label class="radio-inline">
									<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-1">
									Option 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-2">
									Option 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-3">
									Option 3
								</label>
								<label class="radio-inline">
									<input type="radio" name="radio-buttons-1-options" value="radio-buttons-1-option-4">
									Option 4
								</label>
							</div>
							<div class="radio-buttons-2">
								<p>Radio Buttons 2:</p>
								<label class="radio-inline">
									<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-1">
									Option 1
								</label>
								<label class="radio-inline">
									<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-2">
									Option 2
								</label>
								<label class="radio-inline">
									<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-3">
									Option 3
								</label>
								<label class="radio-inline">
									<input type="radio" name="radio-buttons-2-options" value="radio-buttons-2-option-4">
									Option 4
								</label>
							</div>
							<br>
							<div class="checkboxes-1">
								<p>Checkboxes 1:</p>
								<label class="checkbox-inline">
									<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-1">
									Option 1
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-2">
									Option 2
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-3">
									Option 3
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="checkboxes-1-options" value="checkboxes-1-option-4">
									Option 4
								</label>
							</div>
							<div class="checkboxes-2">
								<p>Checkboxes 2:</p>
								<label class="checkbox-inline">
									<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-1">
									Option 1
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-2">
									Option 2
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-3">
									Option 3
								</label>
								<label class="checkbox-inline">
									<input type="checkbox" name="checkboxes-2-options" value="checkboxes-2-option-4">
									Option 4
								</label>
							</div>
							<br>
							<div class="selects-1">
								<p>Select 1:</p>
								<select class="form-control" name="select-1">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<div class="selects-2">
								<p>Select 2:</p>
								<select class="form-control" name="select-2">
									<option value="1">Option 1</option>
									<option value="2">Option 2</option>
									<option value="3">Option 3</option>
									<option value="4">Option 4</option>
								</select>
							</div>
							<br>
							<button type="button" class="btn btn-previous"><i class="fa fa-angle-left"></i>
								Previous</button>
							<button type="submit" class="btn">Submit</button>
						</fieldset> -->

					</form>

				</div>
			</div>
		</div>
	</div>



	