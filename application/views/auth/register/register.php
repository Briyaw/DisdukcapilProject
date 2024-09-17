<div class="container">
	<div class="row">
		<div class="col-md-7 col-sm-12 mx-auto">
			<div class="card pt-2">
				<div class="card-body">
					<div class="text-center mb-2">
						<img src="<?= base_url() ?>./assets/logo/jpr.png" height="100" class='mb-3'>
						<!-- <h3>Sign In</h3> -->
						<h5><strong>PEMERINTAH KABUPATEN SUKABUMI</strong></h5>
                        <h5><strong>APLIKASI MELATI ASRI</strong></h5>
                        <h6><strong>(Mencatat Laporan Kematian Terintegrasi)</strong></h6>
					</div>
					<form action="<?= base_url('user-register-proses') ?>" method="post" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6 col-12">
								<div class="form-group">
									<label for="first-name-column">NIK</label>
									<input type="number" name="nik" value="<?= set_value('nik') ?>" id="first-name-column" class="form-control">
								</div>
								<small class="text-danger"><?= form_error('nik') ?></small>
							</div>
							<div class="col-md-6 col-12">
								<div class="form-group">
									<label for="last-name-column">Alamat Email</label>
									<input type="email" name="email" value="<?= set_value('email') ?>" id="last-name-column" class="form-control" placeholder="gunakan akun gmail yang aktif">
								</div>
								<small class="text-danger"><?= form_error('email') ?></small>
							</div>
							<div class="col-md-6 col-12">
								<div class="form-group">
									<label for="username-column">Password</label>
									<input type="password" name="password" id="username-column" class="form-control">
								</div>
								<small class="text-danger"><?= form_error('password') ?></small>
							</div>
							<div class="col-md-6 col-12">
								<div class="form-group">
									<label for="country-floating">Konfirmasi Password</label>
									<input type="password" name="konfirmasi_password" id="country-floating" class="form-control">
								</div>
								<small class="text-danger"><?= form_error('konfirmasi_password') ?></small>
							</div>
						</diV>

						<a href="<?= base_url('user/login') ?>">Sudah punya akun? Login</a>
						<div class="clearfix">
							<a href="<?= base_url('login') ?>" type="button" class="btn btn-danger float-left">Kembali</a>
							<button class="btn btn-primary float-right">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
