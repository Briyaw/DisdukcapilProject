<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Profil Pengguna</h3>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive overflow-auto">
                                        <table id="data-operator" class="table table-striped table-bordered text-center overflow-auto" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nik</th>
                                                    <th>Nama Lengkap</th>
                                                    <th>Kecamatan</th>
                                                    <th>Desa</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $n = 1;
                                                foreach ($warga as $data) { ?>
                                                    <tr>
                                                        <td><?= $n ?></td>
                                                        
                                                        <td><?= $data->nik ?></td>
                                                        <td><?= $data->nama ?></td>
                                                        <td><?= $data->kecamatan ?></td>
                                                        <td><?= $data->desa ?></td>
                                                        <td>
                                                            <div class="btn-group">
                                                                <a href="<?= base_url('edit-operator/' . $data->id_warga) ?>" class="btn btn-warning btn-sm">Edit</a>
                                                                <a href="<?= base_url('detail-operator/' . $data->id_warga . '?nik=' . $data->nik) ?>" class="btn btn-info btn-sm">Detail</a>
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