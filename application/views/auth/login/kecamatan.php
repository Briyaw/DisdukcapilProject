<div class="container">
        	<div class="row">
        		<div class="col-md-5 col-sm-12 mx-auto">
        			<div class="card pt-2">
        				<div class="card-body">
        					<div class="text-center mb-2">
        						<img src="<?= base_url() ?>./assets/logo/jpr.png" height="100" class='mb-3'>
        						<!-- <h3>Sign In</h3> -->
        						<h5><strong>APLIKASI MELATI ASRI</strong></h5>
        						<h6><strong>PEMERINTAH KABUPATEN SUKABUMI</strong></h6>
        					</div>
        					<form action="<?= base_url('oprkec-login-proses'); ?>" method="post" enctype="multipart/form-data">
        						<div class="form-group position-relative has-icon-left">
        							<label for="username">Alamat Email</label>
        							<div class="position-relative">
        								<input type="email" name="email" class="form-control" id="username">
        								<div class="form-control-icon">
        									<i data-feather="envelope"></i>
        								</div>
        								<small class="text-center"><?= form_error('email') ?></small>
        							</div>
        						</div>
        						<div class="form-group position-relative has-icon-left">
        							<div class="clearfix">
        								<label for="password">Password</label>
        							</div>
        							<div class="position-relative">
        								<input type="password" name="password" class="form-control" id="password">
        								<div class="form-control-icon">
        									<i data-feather="lock"></i>
        								</div>
        								<small class="text-center"><?= form_error('password') ?></small>
        							</div>
        						</div>

        						<div class='form-check clearfix my-4'>
        							<div class="float-right">
        								<!-- <a href="auth-register.html">Register disini !</a> -->
        							</div>
        						</div>
        						<div class="clearfix">
        							<a href="<?= base_url('login') ?>" type="button" class="btn btn-danger float-left">Kembali</a>
        							<button class="btn btn-primary float-right">Login</button>
        						</div>
        					</form>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
