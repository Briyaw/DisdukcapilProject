            <div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Data Buku Pokok Pemakaman</h3>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-3 ">
                                        <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#tambahData">Tambah Data</button>        
                                        
                                    </div>
                            
                                    <form action="" method="POST">
                                        <div class="row mb-3">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Tanggal Meninggal Dari</label>
                                                    <input type="date" name="from_date" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>Tanggal Meninggal Sampai</label>
                                                    <input type="date" name="to_date" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label>&nbsp;</label><br>
                                                    <button type="submit" name="filter" class="btn btn-primary">Filter</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                        
                                    <div class="table-responsive overflow-auto">
                                        <table id="data-warga" class="table table-striped table-bordered text-center overflow-auto" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>No Reg</th>
                                                    <th>NIK a/h</th>
                                                    <th>Nama a/h</th>
                                                    <th>NIK Pelapor</th>
                                                    <th>Nama Pelapor</th>
                                                    <th>Tanggal Meninggal</th>
                                                    <th>Sebab Meninggal</th>
                                                    <th>Tanggal Proses</th>
                                                    <th>Operator</th>
                                                    <th>Kecamatan</th>
                                                    <th>Desa</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $n = 1;  
                                                    foreach ($bpp as $data) {
                                                    ?>
                                                    
                                                    <tr>
                                                            <td><?= $n ?></td>
                                                            <td><?= $data->nomor_surat ?></td>
                                                            <td><?= $data->nik_a ?></td>
                                                            <td><?= $data->nama_alm ?></td>
                                                            <td><?= $data->nik_p ?></td>
                                                            <td><?= $data->nama_p ?></td>
                                                            <td><?= $data->tanggal_meninggal ?></td>
                                                            <td><?= $data->sebab_meninggal ?></td>
                                                            <td><?= $data->created_at ?></td>
                                                            <td><?= $data->nama ?></td>
                                                            <td><?= $data->kecamatan ?></td>
                                                            <td><?= $data->desa ?></td>
                                                            <td>
                                                                <div class="btn-group">
                                                                    <a href="<?= base_url('detail-bpp/' . $data->id . '?id=' . $data->id) ?>" class="btn btn-info btn-sm">Detail</a>
                                                                </div>

                                                                <!-- Modal -->
                                                                <div class="modal fade" id="hapus<?= $data->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header bg-danger">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus</h5>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12">
                                                                                        <div class="alert alert-warning text-center" role="alert">
                                                                                            <h5>Apakah anda yakin akan menghapus data ini ?</h5>
                                                                                            <p>NIK : <?= $data->nik ?></p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Close</button>
                                                                                <a href="<?= base_url('delete-warga/' . $data->id) ?>" type="button" class="btn btn-danger btn-sm">Hapus</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </td>
                                                               

                                                        </tr>
                                                        
                                                        
                                                    
                                                    <?php
                                                    $n++;
                                                    }
                                                    ?>
                                                    
                                                     <?php
                                                
                                                
                                                 ?>
                                            </tbody>
                                        </table>
                                        
                                    </div>
                                    <br>
                                        <?php if ($n > 1) {?>      
                                            <div>
                                                <a  href="<?= base_url('cetak-surat-bpp/'. $data->id . '?nomor=' . $data->nomor_surat) ?>) ?>" class="btn btn-primary btn-lg " target="_blank"><i class="bi bi-printer-fill"></i></a>
                                            </div>
                                        <?php }
                                        ?>
                                  
                                    
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
                            <h5 class="modal-title text-dark" id="exampleModalLabel">Tambah</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action="" method="post" enctype="multipart/form-data">

                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>