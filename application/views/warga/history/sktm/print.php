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
                <p>Yang bertanda tangan dibawah ini Kepala Desa Brantaksekarjati, Kecamatan Welahan, Kabupaten Jepara:
                </p>
            </div>
            <div class="text-surat">
                <table class="ms-5">
                    <?php foreach ($data as $d) { ?>
                        <tr>
                            <td>Nama</td>
                            <td>: </td>
                            <td><?= $d->nama ?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>: </td>
                            <td><?= $d->nik ?></td>
                        </tr>
                        <tr>
                            <td>Tempat/Tgl Lahir</td>
                            <td>: </td>
                            <td><?= $d->tempat_lahir ?>, <?= $d->tgl_lahir ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>: </td>
                            <td><?= $d->jekel ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td>
                            <td>: </td>
                            <td><?= $d->pekerjaan ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>: </td>
                            <td><?= $d->agama ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>: </td>
                            <td><?= $d->alamat ?></td>
                        </tr>
                    <?php } ?>
                </table>
                <br>
                <p style="text-align: justify;">
                    Nama tersebut diatas adalah benar warga
                    Desa Berantaksekarjati, Kecamatan Welahan Kabupaten Jepara.
                    Berdasarkan keterangan yang ada pada kami benar bahwa
                    yang bersangkutan tergolong keluarga yang tidak mampu.
                </p>
                <?php foreach ($data as $d) { ?>
                    <p>Surat keterangan ini dibuat untuk <span class="fw-bold"><?= $d->keperluan ?>.</span></p>
                <?php } ?>
                <p style="text-align: justify;">
                    Demikian surat keterangan ini dibuat, atas perhatian dan
                    kerjasamanya
                    kami ucapkan terima kasih
                </p>
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