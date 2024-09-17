            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Detail Data Operator Desa | <?= $nik ?></h3>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <a href="<?= base_url('data-warga') ?>" class="btn btn-warning btn-sm mb-2">Kembali</a>
                                    <table class="table" style="width:100%">
                                        <?php foreach ($detail as $data) { ?>
                                            <tr>
                                                <td>Nik</td>
                                                <td> : <?= $data->nik ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <td> : <?= $data->nama ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin</td>
                                                <td> : <?= $data->jekel ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Nomor Hp/WA Operator</td>
                                                <td> : <?= $data->no_hp ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Kecamatan</td>
                                                <td> : <?= $data->kecamatan ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Desa</td>
                                                <td> : <?= $data->desa ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Kantor Desa</td>
                                                <td> : <?= $data->alamat_desa ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Kepala Desa</td>
                                                <td> : <?= $data->nama_kades ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Email Desa</td>
                                                <td> : <?= $data->email_desa ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kodepos Desa</td>
                                                <td> : <?= $data->kodepos_desa ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal dibuat</td>
                                                <td> : <?= $data->created_at ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal diubah</td>
                                                <td> : <?= $data->updated_at ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>