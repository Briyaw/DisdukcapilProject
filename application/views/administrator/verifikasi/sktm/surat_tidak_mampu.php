            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h4>Verifikasi Surat Keterangan Tidak Mampu</h4>
            	</div>
            	<section class="section">
            		<div class="row">
            			<div class="col-lg-12">
            				<div class="card">
            					<div class="card-body">
            						<div class="table-responsive overflow-auto">
            							<table id="verifikasi" class="table table-striped table-bordered text-center" style="width:100%">
            								<thead>
            									<tr>
            										<th>No</th>
            										<th>Jenis Surat</th>
            										<th>Nomor Surat</th>
            										<th>Status</th>
            										<th>Priview Data</th>
            										<th>Aksi</th>
            									</tr>
            								</thead>
            								<tbody>
            									<?php $n = 1;
												foreach ($datas as $data) { ?>
            										<tr>
            											<td><?= $n ?></td>
            											<td>
            												<?= $data->jenis_surat ?>
            											</td>
            											<td><?= $data->nomor_surat ?></td>
            											<td>
            												<?php
															if ($data->status == 'Menunggu Verifikasi') {
																echo '<span class="badge bg-warning">Menunggu Verifikasi</span>';
															} else if ($data->status == 'Terverifikasi') {
																echo '<span class="badge bg-primary">Terverifikasi</span>';
															} else if ($data->status == 'Diterima') {
																echo '<span class="badge bg-success">Diterima</span>';
															} else if ($data->status == 'Ditolak') {
																echo '<span class="badge bg-danger">Ditolak</span>';
															}
															?>
            											</td>
            											<td>
            												<a href="<?= base_url('preview-sktm/' . $data->id) ?>"><span class="badge bg-info">Preview Data</span></a>
            											</td>
            											<td>
            												<?php if ($this->session->userdata('role_id') == 1) { ?>

            													<?php if ($data->status == 'Menunggu Verifikasi') { ?>
            														<div class="btn-group">
            															<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#tambahKomentar<?= $data->id ?>">Komentar</button>
            															<form action="<?= base_url('update-status-sktm') ?>" method="post" enctype="multipart/form-data">
            																<input type="hidden" name="id" value="<?= $data->id ?>" class="form-control" readonly>
            																<input type="hidden" name="id_warga" value="<?= $data->id_warga ?>" class="form-control" readonly>
            																<input type="hidden" name="status" value="Terverifikasi" class="form-control" readonly>
            																<button class="btn btn-success btn-sm" type="submit">Verifikasi</button>
            															</form>
            															<form action="<?= base_url('update-status-sktm') ?>" method="post" enctype="multipart/form-data">
            																<input type="hidden" name="id" value="<?= $data->id ?>" class="form-control readonly">
            																<input type="hidden" name="id_warga" value="<?= $data->id_warga ?>" class="form-control" readonly>
            																<input type="hidden" name="status" value="Ditolak" class="form-control" readonly>
            																<button class="btn btn-danger btn-sm" type="submit">Tolak</button>
            															</form>
            														</div>
            													<?php } else if ($data->status == 'Terverifikasi') { ?>
            														<small class="text-center text-danger font-bold">No Action</small>
            													<?php } else if ($data->status == 'Diterima') { ?>
            														<div class="btn-group">
            															<a href="<?= base_url('cetak-surat-tidak-mampu/' . $data->id . '?nomor=' . $data->nomor_surat) ?>" class="btn btn-primary btn-sm" target="blank_"><i class="bi bi-printer-fill"></i></a>
            															<button type="button" class="btn btn-danger sm" data-toggle="modal" data-target="#hapus<?= $data->id ?>">
            																<i class="bi bi-trash-fill"></i>
            															</button>
            														</div>
            													<?php } else if ($data->status == 'Ditolak') { ?>
            														<div class="btn-group">
            															<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#tambahKomentar<?= $data->id ?>">Komentar</button>
            															<button type="button" class="btn btn-danger sm" data-toggle="modal" data-target="#hapus<?= $data->id ?>">
            																<i class="bi bi-trash-fill"></i>
            															</button>
            														</div>
            													<?php } ?>

            													<div class="modal fade" id="hapus<?= $data->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            														<div class="modal-dialog">
            															<div class="modal-content">
            																<div class="modal-header bg-warning">
            																	<h5 class="modal-title" id="exampleModalLabel">Konfirmasin Hapus Data</h5>
            																	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            																		<span aria-hidden="true">&times;</span>
            																	</button>
            																</div>
            																<div class="modal-body">
            																	<div class="alert alert-danger" role="alert">
            																		<h6 class="text-center">Apakah Anda yakin menghapus data surat ini ?</h6>
            																		<small class="text-cen"><?= $data->nomor_surat ?></small>
            																	</div>
            																</div>
            																<div class="modal-footer">
            																	<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            																	<a href="<?= base_url('hapus-surat-tidak-mampu/' . $data->id) ?>" class="btn btn-danger btn-sm">Hapus</a>
            																</div>
            															</div>
            														</div>
            													</div>

            												<?php } else if ($this->session->userdata('role_id') == 2) { ?>

            													<?php if ($data->status == 'Menunggu Verifikasi') { ?>
            														<small class="text-center text-danger font-bold">No Action</small>
            													<?php } else if ($data->status == 'Terverifikasi') { ?>
            														<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#tambahKomentar<?= $data->id ?>">Komentar</button>
            														<div class="btn-group">
            															<form action="<?= base_url('update-status-sktm') ?>" method="post" enctype="multipart/form-data">
            																<input type="hidden" name="id" value="<?= $data->id ?>" class="form-control" readonly>
            																<input type="hidden" name="id_warga" value="<?= $data->id_warga ?>" class="form-control" readonly>
            																<input type="hidden" name="status" value="Diterima" class="form-control" readonly>
            																<button class="btn btn-<?= $data->status == 'Diterima' ? 'success' : 'light' ?> btn-sm" type="submit">Terima</button>
            															</form>
            															<form action="<?= base_url('update-status-sktm') ?>" method="post" enctype="multipart/form-data" readonly>
            																<input type="hidden" name="id" value="<?= $data->id ?>" class="form-control" readonly>
            																<input type="hidden" name="id_warga" value="<?= $data->id_warga ?>" class="form-control" readonly>
            																<input type="hidden" name="status" value="Ditolak" class="form-control" readonly>
            																<button class="btn btn-<?= $data->status == 'Ditolak' ? 'danger' : 'light' ?> btn-sm" type="submit">Tolak</button>
            															</form>
            														</div>
            													<?php } else if ($data->status == 'Diterima') { ?>
            														<div class="btn-group">
            															<a href="<?= base_url('cetak-surat-tidak-mampu/' . $data->id . '?nomor=' . $data->nomor_surat) ?>" class="btn btn-primary btn-sm" target="blank_"><i class="bi bi-printer-fill"></i></a>
            														</div>
            													<?php } else if ($data->status == 'Ditolak') { ?>
            														<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#tambahKomentar<?= $data->id ?>">Komentar</button>
            													<?php } ?>

            												<?php } ?>

            												<div class="modal fade" id="tambahKomentar<?= $data->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            													<div class="modal-dialog">
            														<div class="modal-content">
            															<div class="modal-header bg-info">
            																<h5 class="modal-title text-dark" id="exampleModalLabel">Tambah Komentar</h5>
            																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            																	<span aria-hidden="true">&times;</span>
            																</button>
            															</div>
            															<div class="modal-body">
            																<div class="row">
            																	<div class="col-lg-12">
            																		<form action="<?= base_url('komentar-sktm/') . $data->id ?>" method="post" enctype="multipart/form-data">
            																			<div class="form-group">
            																				<label for="">Komentar</label>
            																				<textarea name="komentar" class="form-control" cols="30" rows="10"><?= $data->komentar ?></textarea>
            																			</div>
            																			<div class="form-group">
            																				<button class="btn btn-success btn-sm" type="submit">Simpan</button>
            																			</div>
            																		</form>
            																	</div>
            																</div>
            															</div>
            															<div class="modal-footer">
            															</div>
            														</div>
            													</div>
            												</div>
            											</td>
            										</tr>
            									<?php $n++;
												} ?>
            								</tbody>
            							</table>
            						</div>
            					</div>
            				</div>

            			</div>
            		</div>
            	</section>
            </div>
