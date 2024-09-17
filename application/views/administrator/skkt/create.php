            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h3>Upload Penerbitan Surat Keterangan Kematian</h3>
            	</div>
            	<section class="section">
            		<div class="row">
            			<div class="col-lg-12">

            				<div class="card">
            					<div class="card-body">
            						<div class="btn-group mb-3">
            							<a href="<?= base_url('data-skkt') ?>" class="btn btn-warning btn-sm">Kembali</a>
            						</div>
            						<div class="row">
            							<div class="col-lg-12">
            								<form action="<?= base_url('create-skkt') ?>" method="post" enctype="multipart/form-data">
            									<div class="row">
            										<div class="form-group">
            											
            											<div class="form-group">
            												<label for="">Nomor Registrasi</label>
            												<input type="text" name="nomor_surat" class="form-control" value="<?= set_value('nomor_surat') ?>" style='text-transform:uppercase'>
            											</div>

                                                        <div class="form-group">
                                                            <label for="">Nomor Surat Keterangan Kematian (sudah di ttd kepala desa dan berikan stempel cap basah)</label>
                                                            <input type="text" name="nomor_surat_terbit" class="form-control" value="<?= set_value('nomor_surat_terbit') ?>" style='text-transform:uppercase'>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="">Upload Surat Keterangan Kematian (sudah di ttd kepala desa dan berikan stempel cap basah, ukuran file maks. 2 mb, jenis pdf)</label>
                                                            <input type="file" name="file_berkas" value="<?= set_value('file_berkas') ?>" class="form-control" required>
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
