            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Data Administrator</h3>
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
                                        <table id="data-admin" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Aksi</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Alamat Email</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Jabatan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $n = 1;
                                                foreach ($data as $admin) { ?>
                                                    <tr>
                                                        <td><?= $n ?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit<?= $admin->id ?>">Edit</button>
                                                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?= $admin->id ?>">Hapus</button>


                                                                <div class="modal fade" id="edit<?= $admin->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-success">
                                                                                <h5 class="modal-title text-dark" id="exampleModalLabel">Edit Administrator</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <form action="<?= base_url('update-administrator/' . $admin->id) ?>" method="post" enctype="multipart/form-data">
                                                                                            <div class="form-group">
                                                                                                <label for="">Nama Lengkap</label>
                                                                                                <input type="text" name="nama" class="form-control" value="<?= $admin->nama ?>">
                                                                                            </div>
                                                                                            <div class=" form-group">
                                                                                                <label for="">Alamat Email</label>
                                                                                                <input type="email" name="email" class="form-control" value="<?= $admin->email ?>">
                                                                                            </div>
                                                                                            <div class=" form-group">
                                                                                                <label for="">Jenis kelamin</label>
                                                                                                <select name="jekel" id="" class="form-control">
                                                                                                    <option selected disabled>-- PILIH JENIS KELAMIN --</option>
                                                                                                    <option value="Laki-laki" <?= $admin->jekel == 'Laki-laki' ? 'selected' : '' ?>>Laki - Laki</option>
                                                                                                    <option value="Perempuan" <?= $admin->jekel == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="">Jabatan</label>
                                                                                                <select name="role_id" class="form-control" id="">
                                                                                                    <option selected disabled>-- PILIH JABATAN --</option>
                                                                                                    <option value="1" <?= $admin->role_id == '1' ? 'selected' : ''  ?>>Administrator</option>
                                                                                                    <option value="2" <?= $admin->role_id == '2' ? 'selected' : ''  ?>>Kepala Desa</option>
                                                                                                    <!-- <option value="4" <?= $admin->role_id == '4' ? 'selected' : ''  ?>>Operator Kecamatan</option> -->
                                                                                                </select>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="">password</label>
                                                                                                <input type="password" name="password" class="form-control">
                                                                                                <small class="text-danger">*Kosongi password jika tidak di update !</small>
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
                                                            </div>
                                                        </td>
                                                        <!-- Modal -->
                                                        <div class="modal fade" id="hapus<?= $admin->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header  bg-danger">
                                                                        <h5 class="modal-title text-dark" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="alert alert-danger text-center">
                                                                                    <h5 class="text-bold">Apakah anda yakin menghapus data ini ?</h5>
                                                                                    <p class="text-bold"><?= $admin->email ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
                                                                        <a href="<?= base_url('deleted-administrator/' . $admin->id) ?>" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <td><?= $admin->nama ?></td>
                                                        <td><?= $admin->email ?></td>
                                                        <td><?= $admin->jekel ?></td>
                                                        <td>
                                                            <?php
                                                            if ($admin->role_id == '1') {
                                                                echo '<span class="badge bg-success">Administrator</span>';
                                                            } else if ($admin->role_id == '2') {
                                                                echo '<span class="badge bg-success">Kepala Desa</span>';
                                                            }
                                                            ?>
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


            <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-success">
                            <h5 class="modal-title text-dark" id="exampleModalLabel">Tambah Administrator</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="<?= base_url('created-administrator') ?>" method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="">Nama Lengkap</label>
                                            <input type="text" name="nama" class="form-control" id="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat Email</label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jenis kelamin</label>
                                            <select name="jekel" id="" class="form-control" required>
                                                <option selected disabled>-- PILIH JENIS KELAMIN --</option>
                                                <option value="Laki-laki">Laki - Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jabatan</label>
                                            <select name="role_id" class="form-control" id="" required>
                                                <option selected disabled>-- PILIH JABATAN --</option>
                                                <option value="1">Administrator</option>
                                                <option value="2">Kepala Desa</option>
                                                <!-- <option value="4">Operator Kecamatan</option> -->
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">password</label>
                                            <input type="password" name="password" class="form-control" required>
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