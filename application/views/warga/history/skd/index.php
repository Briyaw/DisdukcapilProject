            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h4>History Surat Keterangan Domisili</h4>
            	</div>
            	<section class="section">
            		<div class="row">
            			<div class="col-lg-12">
            				<div class="card">
            					<div class="card-body">
            						<div class="table-responsive overflow-auto">
            							<table id="histori" class="table table-striped table-bordered text-center" style="width:100%">
            								<thead>
            									<tr>
            										<th>No</th>
            										<th>Jenis Surat</th>
            										<th>Nomor Surat</th>
            										<th>Status</th>
            										<th>Aksi</th>
            									</tr>
            								</thead>
            								<tbody>
            									<?php $n = 1;
												foreach ($datas as $data) { ?>
            										<tr>
            											<td><?= $n ?></td>
            											<td><?= $data->jenis_surat ?></td>
            											<td><?= $data->nomor_surat ?></td>
            											<td>
            												<?php
															if ($data->status == 'Menunggu Verifikasi') {
																echo '<span class="badge bg-warning">Menunggu Verifikasi</span>';
															} else if ($data->status == 'Terverifikasi') {
																echo '<span class="badge bg-primary">Data Tervalidasi Admin</span>';
															} else if ($data->status == 'Diterima') {
																echo '<span class="badge bg-success">Diterima</span>';
															} else if ($data->status == 'Ditolak') {
																echo '<span class="badge bg-danger">Ditolak</span>';
															}
															?>
            											</td>
            											<td>
            												<?php if ($data->status == 'Diterima') { ?>
            													<a href="<?= base_url('cetak-surat-domisili/' . $data->id . '?nomor=' . $data->nomor_surat) ?>" class="btn btn-primary btn-sm" target="_blank"><i class="bi bi-printer-fill"></i> Cetak</a>
            												<?php } else if ($data->status == 'Ditolak' || $data->komentar !== "") { ?>
            													<button class="btn btn-info btn-sm" data-toggle="modal" data-target="#komentar<?= $data->id ?>">Komentar</button>
            												<?php } else { ?>
            													<small class="text-center text-danger font-bold">No Action</small>
            												<?php } ?>
            											</td>
            											<div class="modal fade" id="komentar<?= $data->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            												<div class="modal-dialog">
            													<div class="modal-content">
            														<div class="modal-header bg-info">
            															<h5 class="modal-title text-dark" id="exampleModalLabel">Komentar</h5>
            															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            																<span aria-hidden="true">&times;</span>
            															</button>
            														</div>
            														<div class="modal-body">
            															<div class="row">
            																<div class="col-lg-12">
            																	<div class="form-group">
            																		<label for="">Komentar</label>
            																		<textarea name="komentar" class="form-control" cols="30" rows="10"><?= $data->komentar ?></textarea>
            																	</div>
            																</div>
            															</div>
            														</div>
            														<div class="modal-footer">
            														</div>
            													</div>
            												</div>
            											</div>
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
