            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Detail Data Buku Pokok Pemakaman | <?= $id ?></h3>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <a href="<?= base_url('data-bpp') ?>" class="btn btn-warning btn-sm mb-2">Kembali</a>
                                    <table class="table" style="width:100%">
                                        <?php foreach ($detail as $data) { ?>
                                            <tr>
                                                <td>Nomor Registrasi</td>
                                                <td> : <?= $data->nomor_surat ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal dan Waktu Proses</td>
                                                <td> : <?= $data->created_at ?> wib</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Pemakaman</td>
                                                <td> : <?= $data->tempat_pemakaman ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Pemakaman</td>
                                                <td> : <?= $data->alamat_pemakaman ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Kecamatan</td>
                                                <td> : <?=$data->kecamatan ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Desa</td>
                                                <td> : <?=$data->desa ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>Nama Meninggal</td>
                                                <td> : <?= $data->nama_alm ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>NIK Meninggal</td>
                                                <td> : <?= $data->nik_a ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Lahir a/h</td>
                                                <td> : <?= $data->tempat_lahir_a ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir a/h</td>
                                                <td> :<?= $data->tanggal_lahir_a ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Jenis Kelamin a/h</td>
                                                <td> : <?= $data->jekel_a ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Meninggal</td>
                                                <td> : <?= $data->tempat_meninggal ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Meninggal</td>
                                                <td> : <?= $data->tanggal_meninggal ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Penduduk</td>
                                                <td> : <?= $data->kewarganegaraan_a ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Sebab Meninggal</td>
                                                <td> : <?= $data->sebab_meninggal ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nama Pelapor</td>
                                                <td> : <?= $data->nama_p ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>NIK Pelapor</td>
                                                <td> : <?= $data->nik_p ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tempat Lahir Pelapor</td>
                                                <td> : <?= $data->tempat_lahir_p ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal Lahir Pelapor</td>
                                                <td> : <?= $data->tanggal_lahir_p ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Alamat Pelapor</td>
                                                <td> : <?= $data->alamat_p ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Hubungan Pelapor dengan a/h</td>
                                                <td> : <?= $data->hubungan ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Kontak Pelapor</td>
                                                <td> : <?= $data->nohp_p ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Keperluan</td>
                                                <td> : <?= $data->keperluan ?></td>
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