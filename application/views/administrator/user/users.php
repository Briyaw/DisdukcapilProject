            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h3>Data Users</h3>
            	</div>
            	<section class="section">
            		<div class="row">
            			<div class="col-lg-12">

            				<div class="card">
            					<div class="card-body">
            						<div class="btn-group mb-3">
            							<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahData">Tambah Data</button>
            						</div>
            						<div class="table-responsive overflow-auto">
            							<table id="data-users" class="table table-striped table-bordered text-center" style="width:100%">
            								<thead>
            									<tr>
            										<th>No</th>
            										<th>Aksi</th>
            										<th>NIK</th>
            										<th>Nama</th>
            										<th>Alamat Email</th>
            									</tr>
            								</thead>
            								<tbody>
            									<?php $n = 1;
												foreach ($users as $user) { ?>
            										<tr>
            											<td><?= $n ?></td>
            											<td>
            												<div class="btn-group">
            													<button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $user->id_users ?>">Edit</button>
            													<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $user->id_users ?>">Hapus</button>
            												</div>

            												<div class="modal fade" id="hapus<?= $user->id_users ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            													<div class="modal-dialog">
            														<div class="modal-content">
            															<div class="modal-header bg-danger">
            																<h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
            															</div>
            															<div class="modal-body">
            																<div class="row">
            																	<div class="col-md-12">
            																		<div class="alert alert-warning text-center" role="alert">
            																			<h5>Apalah anda yakin ingin menghapus data ini ?</h5>
            																			<p><?= $user->email ?></p>
            																		</div>
            																	</div>
            																</div>
            															</div>
            															<div class="modal-footer">
            																<button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
            																<a href="<?= base_url('hapus-user/' . $user->id_users) ?>" type="button" class="btn btn-danger btn-sm">Hapus</a>
            															</div>
            														</div>
            													</div>
            												</div>


            											</td>

            											<div class="modal fade" id="edit<?= $user->id_users ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            												<div class="modal-dialog">
            													<div class="modal-content">
            														<div class="modal-header bg-warning">
            															<h5 class="modal-title text-dark" id="exampleModalLabel">Edit Data User</h5>
            															<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            																<span aria-hidden="true">&times;</span>
            															</button>
            														</div>
            														<div class="modal-body">
            															<div class="row">
            																<div class="col-lg-12">
            																	<form action="<?= base_url('edit-user/' . $user->id_users) ?>" method="post" enctype="multipart/form-data">
            																		<div class="form-group">
            																			<label for="">Nik</label>
            																			<input type="number" value="<?= $user->nik ?>" class="form-control" id="" readonly disabled>
            																		</div>
            																		<div class="form-group">
            																			<label for="">Email</label>
            																			<input type="email" name="email" value="<?= $user->email ?>" class="form-control">
            																		</div>
            																		<div class="form-group">
            																			<label for="">Password</label>
            																			<input type="password" name="password" class="form-control">
            																			<small class="text-danger">*Kosongi password jika tidak di ubah !</small>
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

            											<td><?= $user->nik ?></td>
            											<td><?= $user->nama ?></td>
            											<td><?= $user->email ?></td>
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


            <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            	<div class="modal-dialog">
            		<div class="modal-content">
            			<div class="modal-header bg-success">
            				<h5 class="modal-title text-dark" id="exampleModalLabel">Tambah Data User</h5>
            				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            					<span aria-hidden="true">&times;</span>
            				</button>
            			</div>
            			<div class="modal-body">
            				<div class="row">
            					<div class="col-lg-12">
            						<form action="<?= base_url('tambah-user') ?>" method="post" enctype="multipart/form-data">
            							<div class="form-group">
            								<label for="">Nik</label>
            								<input type="number" name="nik" class="form-control" id="">
            							</div>
            							<div class="form-group">
            								<label for="">Email</label>
            								<input type="email" name="email" class="form-control">
            							</div>
            							<div class="form-group">
            								<label for="">Password</label>
            								<input type="password" name="password" class="form-control">
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
