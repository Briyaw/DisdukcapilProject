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
                            <img src="<?= base_url() ?>./assets/logo/jpr.png" width="100px" height="130px">
                        </td>
                        <td>
                            <center>
                                <strong>
                                    <h5>PEMERINTAHAN KABUPATEN JEPARA</h5>
                                    <h5>KECAMATAN WELAHAN</h5>
                                    <h5>DESA BRANTAKSEKARJATI</h5>
                                    <small>Jalan Serut Raya No. 1 Kode Pos : 59464</small>
                                </strong>
                            </center>
                        </td>
                    </tr>
                </table>
            </center>
            <hr>

            <div class="identitas">
                <?php foreach ($data as $d) { ?>
                    <p class="text-end fw-bold">
                        <small>
                            <?= $d->tanggal_surat ?>
                        </small>
                    </p>
                    <span class="text-center">
                        <strong>
                            <p>
                                <u><?= $d->jenis_surat ?></u>
                            </p>
                        </strong>
                        <p>Nomor : <?= $d->nomor_surat ?></p>
                    </span>
                <?php } ?>
            </div>
            <div class="text-surat">
                <p>Yang bertanda tangan di bawah ini Kepada Desa Brantaksekarjati, Kecamatan Welahan Kabupaten Jepara,
                    menerangkan dengan sebenarnya, bahwa :</p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama Bayi </td>
                            <td>: </td>
                            <td><?= $d->nama_bayi ?></td>
                        </tr>
                        <tr>
                            <td>No. KK</td>
                            <td>: </td>
                            <td><?= $d->no_kk ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: </td>
                            <td><?= $d->jekel_b ?></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>: </td>
                            <td><?= $d->tempat_lahir_b ?>, <?= $d->tanggal_lahir_b ?></td>
                        </tr>
                        <tr>
                            <td>Anak Ke</td>
                            <td>: </td>
                            <td><?= $d->anak_ke ?></td>
                        </tr>
                        <tr>
                            <td>Nama Lengkap Orang Tua</td>
                            <td>: </td>
                            <td>Ayah : <?= $d->ayah ?></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Ibu : <?= $d->ibu ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>: </td>
                            <td><?= $d->agama_b ?></td>
                        </tr>
                        <tr>
                            <td>Kewarganegaraan</td>
                            <td>: </td>
                            <td><?= $d->kewarganegaraan_b ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: </td>
                            <td><?= $d->alamat_b ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p>Demikian Surat Pengantar Akte Kelahiran ini dibuat agar digunakan
                    sebagaimana mestinya.</p>
                <br>
                <div class="kades float-end">
                    <span class="mb-n2">Berantakskarjati, <?= date('d M Y') ?></span>
                    <p>KEPALA DESA BRANTAKSEKARJATI</p>
                    <img src="<?= base_url('./assets/ttd/ttd.png') ?>" class="ttd-kades" width="80%" style="margin-top: -25px; z-index:9999;">
                    <p class="fw-bold" style="margin-top: -30px; z-index:2;">MUSYAFAK BAIHAQY</p>
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