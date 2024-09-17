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
                <p>Yang bertanda tangan di bawah ini, saya: </p>
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td><?= $d->nama ?></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tanggal Lahir</td>
                            <td>: </td>
                            <td><?= $d->tempat_lahir ?>, <?= $d->tgl_lahir ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>: </td>
                            <td><?= $d->agama ?></td>
                        </tr>
                        <tr>
                            <td>Tempat Tinggal</td>
                            <td>: </td>
                            <td>Desa Brantaksekarjati, Rt: <?= $d->rt ?>/Rw: <?= $d->rw ?>, Kecamatan Welahan, Kabupaten Jepara Jawa Tengah.</td>
                        </tr>
                        <tr>
                            <td>Surat Bukti Diri</td>
                            <td>: </td>
                            <td>NIK : <?= $d->nik ?></td>
                        </tr>
                        <tr>
                            <td>Keperluan</td>
                            <td>: </td>
                            <td><?= $d->keperluan ?></td>
                        </tr>
                        <tr>
                            <td>Berlaku Mulai</td>
                            <td>: </td>
                            <td>Tgl <small><span class="fw-bold"><?= $d->tanggal_surat ?></span> s/d <small class="fw-bold"><?= $d->tanggal_kadaluarsa ?></small></small></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p>Dengan demikian untuk menjadikan maklum bagi yang berkepentingan.</p>
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