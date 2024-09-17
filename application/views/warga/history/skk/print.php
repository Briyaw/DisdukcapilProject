<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/css/print.css">
</head>


<body>
    <div class="container mt-3 page">
        <div class="sub-page">
            <center>
                <table width="100%">
                    <tr>
                        <td>
                            <center>
                                <strong>
                                    <small><img src="<?= base_url() ?>./assets/logo/logogaruda.png" width="100px" height="130px"></small>
                                <?php foreach ($data as $d) { ?>
                                    <h5 style='text-transform:uppercase' class="ms-5">KEPALA DESA <?= $d->desa ?></h5>
                                    <h5 style='text-transform:uppercase' class="ms-5">KECAMATAN <?= $d->kecamatan ?> KABUPATEN SUKABUMI</h5>
                                    <small class="ms-5"><?= $d->alamat_desa ?>, Email: <?= $d->email_desa ?>, Kodepos:<?= $d->kodepos_desa ?></small>
                                    
                                <?php } ?>
                                </strong>
                            </center>
                        </td>
                    </tr>
                </table>
            </center>

            <div class="identitas">
                <?php foreach ($data as $d) { ?>
                    <p class="text-end fw-bold">
                        <!-- <small>
                            <?= $d->tanggal_surat ?>
                        </small> -->
                    </p>
                    <span class="text-center">
                        <strong>
                            <p>
                                <u><?= $d->jenis_surat ?></u>
                            </p>
                        </strong>
                        <p class="ms-5">Nomor : ..............................................</p>
                    </span>
                <?php } ?>
            </div>
            <?php foreach ($data as $d) { ?>
            <div class="text-surat">
                <p class="ms-5">Kepala Desa <?= $d->desa ?> Kecamatan <?= $d->kecamatan ?> Kabupaten Sukabumi dengan ini
                menerangkan dengan sebenarnya bahwa :</p>
                <table class="ms-5">
                    
                        <tr>
                            <td width="200">Nama</td>
                            <td>: </td>
                            <td><?= $d->nama_alm ?></td>
                        </tr>
                        <tr>
                            <td width="200">NIK</td>
                            <td>: </td>
                            <td><?= $d->nik_a ?></td>
                        </tr>
                        <tr>
                            <td width="200">Tempat/Tanggal Lahir</td>
                            <td>: </td>
                            <td><?= $d->tempat_lahir_a ?>, <?= $d->tanggal_lahir_a ?></td>
                        </tr>
                        <tr>
                            <td width="200">Status Perkawinan</td>
                            <td>: </td>
                            <td><?= $d->status_perkawinan_a ?></td>
                        </tr>
                        <tr>
                            <td width="200">Jenis Kelamin</td>
                            <td>: </td>
                            <td ><?= $d->jekel_a ?></td>
                        </tr>
                        <tr>
                            <td width="200">A l a m a t</td>
                            <td>: </td>
                            <td><?= $d->alamat_a ?> Desa <?= $d->desa ?> Kecamatan <?= $d->kecamatan ?> Kabupaten Sukabumi</td>
                        </tr>
                    <?php } ?>
                </table>
                <p class="ms-5">Nama tersebut benar telah meninggal dunia di wilayah kami pada :</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td width="200">Hari</td>
                            <td>: </td>
                            <td><?= $d->hari ?></td>
                        </tr>
                        <tr>
                            <td width="200">Tanggal</td>
                            <td>: </td>
                            <td><?= $d->tanggal_meninggal ?></td>
                        </tr>
                        <tr>
                            <td width="200">Meninggal di</td>
                            <td>: </td>
                            <td><?= $d->tempat_meninggal ?></td>
                        </tr>
                        <tr>
                            <td width="200">Penyebab Kematian</td>
                            <td>: </td>
                            <td><?= $d->sebab_meninggal ?></td>
                        </tr>
                        <tr>
                            <td width="200">Tempat Penguburan</td>
                            <td>: </td>
                            <td><?= $d->tempat_pemakaman ?>, <?= $d->alamat_pemakaman ?>
                            Desa <?= $d->desa ?> Kecamatan <?= $d->kecamatan ?> Kabupaten Sukabumi</td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p style="text-align: justify;" class="ms-5">
                    Demikian keterangan ini kami buat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.
                </p>
                <br>
                <div class="kades float-end">
                    <p><span class="mb-n2">Dibuat di         : Sukabumi</span></p>
                    <p><span class="mb-n2">Pada tanggal      : <?= date('d F Y') ?></span></p>
                    <?php foreach ($data as $d) { ?>
                    <p>Kepala Desa <?= $d->desa ?></p>
                    <img src="<?= base_url('./assets/ttd/ttd2.png') ?>" class="ttd-kades" width="80%" style="margin-top: -25px; z-index:9999;">
                    <!-- <img src="" class="ttd-kades" width="80%" style="margin-top: -25px; z-index:9999;"> -->
                    <p class="fw-bold" style="margin-top: -30px; z-index:2;"><?= $d->nama_kades ?></p>

                    <?php } ?>
                </div>
            </div>
            
        </div>
    </div>
    <script>
        window.print();
    </script>
    </div>
    <script src="<?= base_url(); ?>./assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>