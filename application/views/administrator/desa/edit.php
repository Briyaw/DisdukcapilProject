            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h3>Edit Data Operator Desa</h3>
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
            								<form action="<?= base_url('aksi-edit-desa/' . $this->uri->segment(2)) ?>" method="post" enctype="multipart/form-data">
            									<?php foreach ($desa as $data) { ?>
            										<div class="row">
            											<div class="col-lg-6">
            												<div class="form-group">
            													<label for="">NIK</label>
            													<input type="number" name="nik" class="form-control" value="<?= $data->nik ?>">
            												</div>

            												<div class="form-group">
            													<label for="">Nama Lengkap</label>
            													<input type="text" name="nama" class="form-control" value="<?= $data->nama ?>">
            												</div>
            												<div class="form-group">
            													<label for="">Jenis Kelamin</label>
            													<select name="jekel" class="form-control" id="">
            														<option selected disabled>-- Pilih Jenis Kelamin --</option>
            														<option value="Laki-laki" <?= $data->jekel == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
            														<option value="Perempuan" <?= $data->jekel == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
            													</select>
            												</div>

                                                            <div class="form-group">
                                                                <label for="">Nama Kecamatan</label>
                                                                <input type="text" name="kecamatan" class="form-control" value="<?= $data->kecamatan ?>">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="">Nama Desa/Kelurahan</label>
                                                                <input type="text" name="desa" class="form-control" value="<?= $data->desa ?>">
                                                            </div>
            											</div>
                                                        
            											<div class="col-lg-6">
            												<div class="form-group">
                                                                <label for="">Alamat Kantor Desa/Kelurahan</label>
                                                                <textarea name="alamat_desa" id="" class="form-control"><?= $data->alamat_desa ?></textarea>
                                                            </div>

            												<div class="form-group">
            													<label for="">Nama Kepala Desa/Lurah</label>
            													<input type="text" name="nama_kades" class="form-control" value="<?= $data->nama_kades ?>">
            												</div>

            												<div class="form-group">
            													<label for="">Email Desa/Kelurahan</label>
            													<input type="text" name="email_desa" class="form-control" value="<?= $data->email_desa ?>">
            												</div>

            												<div class="form-group">
            													<label for="">Kode Pos Desa/Kelurahan</label>
            													<input type="text" name="kodepos_desa" class="form-control" value="<?= $data->kodepos_desa ?>" id="">
            												</div>

            												

            											</div>
            										</div>
            									<?php } ?>
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
