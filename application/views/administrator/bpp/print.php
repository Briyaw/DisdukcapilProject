<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>./assets/css/printlandscape.css">
</head>

<body>
    <div class="container mt-3 page">
        <div class="sub-page">
            <h1 class="text-center text-uppercase" style="font-size:22px;" >Buku Pokok Pemakaman</h1>
            <div>
                <div>
                    <?php
                        $from_date = date('d-m-Y', strtotime($_GET['from_date'])); 
                        $to_date = date('d-m-Y', strtotime($_GET['to_date'])) 
                    ?>
                    Tanggal : <?=$from_date?> s.d  <?=$to_date?>
                </div>
                    
                    <div>
                        <?php if(($this->session->userdata('role_id')) == 4){ ?>
                             Kecamatan : <?= $this->session->userdata('kecamatan') ?>  <?php }
                        else{?> 
                            Kecamatan : <?=$_GET['kec']?>  <?php } ?>
                    </div>
                    <div>
                        Desa : <?=$_GET['des']?>
                    </div>
            </div>
            
            <?php $n=1;
            foreach ($data as $d) { ?>
            
            <div>
                <?php $n++; } ?>
                <br>
                <table class="table table-bordered ukuranfont ">
                    <thead class="text-center" style="vertical-align : middle">
                        <tr>
                            <th rowspan="2">NO</th>
                            <th rowspan="2">NAMA</th>
                            <th rowspan="2">NIK</th>
                            <th rowspan="2">TEMPAT TGL LAHIR</th>
                            <th rowspan="2">JENIS KELAMIN</th>
                            <th rowspan="2">TEMPAT TGL MENINGGAL</th>
                            <th rowspan="2">TGL PEMAKAMAN</th>
                            <th colspan="2">PELAPOR</th>
                            
                            <th rowspan="2">KELUARGA YANG DAPAT DIHUBUNGI & NO. TELP</th>
                            <th rowspan="2">ALAMAT</th>
                            <th rowspan="2">PENYEBAB KEMATIAN</th>
                            <th rowspan="2">NAMA TEMPAT PEMAKAMAN</th>
                            <th rowspan="2">ALAMAT PEMAKAMAN</th>
                        </tr>
                        <tr>
                            <th >NAMA</th>
                            <th >NIK</th>
                        </tr>
                    </thead>
                    <tbody class="text-center" style="vertical-align : middle">
                        <?php $n=1;
                        foreach ($data as $d) { ?>
                        <tr>
                            <td><?= $n ?></td>
                            <td><?= $d->nama_alm ?></td>
                            <td><?= $d->nik_a ?></td>
                            <td><?= $d->tempat_lahir_a ?>, <?= date('d-m-Y', strtotime($d->tanggal_lahir_a)) ?></td>
                            <td><?= $d->jekel_a ?></td>
                            <td><?= $d->tempat_meninggal?>, <?= date('d-m-Y', strtotime($d->tanggal_meninggal))?></td>
                            <td>-</td>
                            <td><?= $d->nama_p?></td>
                            <td><?= $d->nik_p ?></td>
                            <td><?= $d->nama_p ?> (<?= $d->nohp_p ?>)</td>
                            <td><?= $d->alamat_p ?></td>
                            <td><?= $d->sebab_meninggal ?></td>
                            <td><?= $d->tempat_pemakaman ?></td>
                            <td><?= $d->alamat_pemakaman ?></td>
                        </tr>
                        <?php $n++; } ?>
                    </tbody>
                </table>
            
            </div>
        </div>
        <script>
            window.print();
        </script>
    </div>
    <script src="<?= base_url(); ?>./assets/bootstrap/js/bootstrap.min.js"></script>
    
</body>

</html>