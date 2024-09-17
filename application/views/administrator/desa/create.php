            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h3>Tambah Data Operator Desa</h3>
            	</div>
            	<section class="section">
            		<div class="row">
            			<div class="col-lg-12">

            				<div class="card">
            					<div class="card-body">
            						<div class="btn-group mb-3">
            							<a href="<?= base_url('data-desa') ?>" class="btn btn-warning btn-sm">Kembali</a>
            						</div>
            						<div class="row">
            							<div class="col-lg-12">
            								<form action="<?= base_url('create-desa') ?>" method="post" enctype="multipart/form-data">
            									<div class="row">
            										<div class="col-lg-6">
            											<div class="form-group">
            												<label for="">NIK</label>
            												<input type="number" name="nik" class="form-control" value="<?= set_value('nik') ?>">
            											</div>
            											<small class="text-danger"><?= form_error('nik') ?></small>
            											<div class="form-group">
            												<label for="">Nama Lengkap</label>
            												<input type="text" name="nama" class="form-control" value="<?= set_value('nama') ?>" style='text-transform:uppercase'>
            											</div>
            											<small class="text-danger"><?= form_error('nama') ?></small>
            											<div class="form-group">
            												<label for="">Jenis Kelamin</label>
            												<select name="jekel" class="form-control" id="">
            													<option selected disabled>-- Pilih Jenis Kelamin --</option>
            													<option value="Laki-laki">Laki-laki</option>
            													<option value="Perempuan">Perempuan</option>
            												</select>
            											</div>
                                                        <small class="text-danger"><?= form_error('jekel') ?></small>

                                                        <div class="form-group">
                                                            <label for="">Nama Kecamatan</label>
                                                            <input type="text" name="kecamatan" class="form-control" value="<?= set_value('kecamatan') ?>" style='text-transform:uppercase'>
                                                        </div>
                                                        <small class="text-danger"><?= form_error('kecamatan') ?></small>

                                                        <div class="form-group">
                                                            <label for="">Nama Desa</label>
                                                            <input type="text" name="desa" class="form-control" value="<?= set_value('desa') ?>" style='text-transform:uppercase'>
                                                        </div>
                                                        <small class="text-danger"><?= form_error('desa') ?></small>

                                                    </div>

            										<div class="col-lg-6">


                                                        <div class="form-group">
                                                            <label for="">Alamat Desa</label>
                                                            <textarea name="alamat_desa" id="" class="form-control"><?= set_value('alamat_desa') ?></textarea>
                                                        </div>
                                                        <small class="text-danger"><?= form_error('alamat_desa') ?></small>


                                                        <div class="form-group">
                                                            <label for="">Nama Kepala Desa</label>
                                                            <input type="text" name="nama_kades" class="form-control" value="<?= set_value('nama_kades') ?>" style='text-transform:uppercase'>
                                                        </div>
                                                        <small class="text-danger"><?= form_error('nama_kades') ?></small>

                                                        <div class="form-group">
                                                            <label for="">Email Desa</label>
                                                            <input type="text" name="email_desa" class="form-control" value="<?= set_value('email_desa') ?>">
                                                        </div>
                                                        <small class="text-danger"><?= form_error('email_desa') ?></small>

                                                        <div class="form-group">
                                                            <label for="">Kodepos Desa</label>
                                                            <input type="text" name="kodepos_desa" class="form-control" value="<?= set_value('kodepos_desa') ?>">
                                                        </div>
                                                        <small class="text-danger"><?= form_error('kodepos_desa') ?></small>

            											
            											
            										</div>
            									</div>
            									<div class="btn-group">
            										<button class="btn btn-success btn-sm" type="submit">Simpan</button>
            									</div>
            								</form>
            							</div>
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
            	</section>
            </div>
