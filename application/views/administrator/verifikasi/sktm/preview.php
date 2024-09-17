            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h4>Priview Surat Keterangan Tidak Mampu</h4>
            	</div>
            	<a href="<?= base_url('verifikasi-surat-tidak-mampu') ?>" class="btn btn-primary btn-sm mb-2"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
            	<section class="section">
            		<div class="row">
            			<div class="col-lg-12">
            				<div class="card">
            					<div class="card-body">
            						<div class="table-responsive overflow-auto">
            							<table class="table" style="width:100%">
            								<?php foreach ($datas as $data) { ?>
            									<tr>
            										<td>Nik</td>
            										<td>:</td>
            										<td><?= $data->nik ?></td>
            									</tr>
            									<tr>
            										<td>Nama</td>
            										<td>:</td>
            										<td><?= $data->nama ?></td>
            									</tr>
            									<tr>
            										<td>Jenis Kelamin</td>
            										<td>:</td>
            										<td><?= $data->jekel ?></td>
            									</tr>
            									<tr>
            										<td>Agama</td>
            										<td>:</td>
            										<td><?= $data->agama ?></td>
            									</tr>
            									<tr>
            										<td>TTL</td>
            										<td>:</td>
            										<td><?= $data->tempat_lahir ?>, <?= $data->tgl_lahir ?></td>
            									</tr>
            									<tr>
            										<td>Perkerjaan</td>
            										<td>:</td>
            										<td><?= $data->pekerjaan ?></td>
            									</tr>
            									<tr>
            										<td>Status Pernikahan</td>
            										<td>:</td>
            										<td><?= $data->status_pernikahan ?></td>
            									</tr>
            									<tr>
            										<td>Rt</td>
            										<td>:</td>
            										<td><?= $data->rt ?></td>
            									</tr>
            									<tr>
            										<td>Rw</td>
            										<td>:</td>
            										<td><?= $data->rw ?></td>
            									</tr>
            									<tr>
            										<td>Alamat</td>
            										<td>:</td>
            										<td><?= $data->alamat ?></td>
            									</tr>
            									<p>Surat</p>
            									<tr>
            										<td>Menanggung beban orang</td>
            										<td>:</td>
            										<td><?= $data->tanggungan ?></td>
            									</tr>
            									<tr>
            										<td>Keperluan</td>
            										<td>:</td>
            										<td><?= $data->keperluan ?></td>
            									</tr>
            									<tr>
            										<td>File KTP</td>
            										<td>:</td>
            										<td>
            											<img src="<?= base_url('./assets/file_ktp/') . $data->file_ktp ?>" class="img-thumbnail">
            										</td>
            									</tr>
            									<tr>
            										<td>File KK</td>
            										<td>:</td>
            										<td>
            											<img src="<?= base_url('./assets/file_kk/') . $data->file_kk ?>" class="img-thumbnail">
            										</td>
            									</tr>
            									<tr>
            										<td>Foto Rumah</td>
            										<td>:</td>
            										<td>
            											<img src="<?= base_url('./assets/file_rumah/') . $data->file_rumah ?>" class="img-thumbnail">
            										</td>
            									</tr>
            								<?php } ?>
            							</table>
            						</div>
            					</div>
            				</div>

            			</div>
            		</div>
            	</section>
            </div>
