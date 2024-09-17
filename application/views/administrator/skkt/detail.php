            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Detail Data Buku Pokok Pemakaman | <?= $id ?></h3>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <a href="<?= base_url('data-skkt') ?>" class="btn btn-warning btn-sm mb-2">Kembali</a>
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
                                                <td>Tanggal dan Jam Pengajuan</td>
                                                <td> : <?= $data->created_at ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Surat Keterangan Kematian</td>
                                                <td> : <?= $data->nomor_surat_terbit ?> wib</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Tanggal dan Jam Upload</td>
                                                <td> : <?= $data->uploaded_at ?></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Surat Keterangan Kematian</td>
                                                <td colspan="2"><iframe src="<?= base_url('./assets/file_skkt/') . $data->file_berkas ?>" width="900" height="600"></iframe></td>
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

                                            

                                        <?php } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>