            <div class="main-content container-fluid">
            	<div class="page-title">
            		<h4>Priview Surat Keterangan Tidak Mampu</h4>
            	</div>
            	<a href="<?= base_url('verifikasi-surat-kematian') ?>" class="btn btn-primary btn-sm mb-2"><i class="bi bi-arrow-left-circle-fill"></i> Kembali</a>
            	<section class="section">
            		<div class="row">
            			<div class="col-lg-12">
            				<div class="card">
            					<div class="card-body">
            						<div class="table-responsive overflow-auto">
            							<h6>Data Pengajuan :</h6>
            							<table class="table" style="width:100%">
            								<?php foreach ($datas as $data) { ?>
                                                <tr>
                                                    <td>Nomor Registrasi</td>
                                                    <td>:</td>
                                                    <td><?= $data->nomor_surat ?></td>
                                                </tr>
            									<tr>
            										<td>NIK</td>
            										<td>:</td>
            										<td><?= $data->nik ?></td>
            									</tr>
            									<tr>
            										<td>Nama</td>
            										<td>:</td>
            										<td><?= $data->nama ?></td>
            									</tr>
            									<tr>
            										<td>No. Hp/WhatsApp</td>
            										<td>:</td>
            										<td><?= $data->no_hp ?></td>
            									</tr>
            									<tr>
            										<td>Kecamatan</td>
            										<td>:</td>
            										<td><?= $data->kecamatan ?></td>
            									</tr>
            									<tr>
            										<td>Desa</td>
            										<td>:</td>
            										<td><?= $data->desa ?></td>
            									</tr>
            									<p>Surat</p>
            									<tr>
            										<td>Keperluan</td>
            										<td>:</td>
            										<td><?= $data->keperluan ?></td>
            									</tr>

                                                
                                                <tr>
                                                    <td><h6>Data Pelapor</h6></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                                <tr>
                                                    <td>Hubungan dengan almarhum/almarhumah</td>
                                                    <td>:</td>
                                                    <td><?= $data->hubungan ?></td>
                                                </tr>

                                                <tr>
                                                    <td>NIK</td>
                                                    <td>:</td>
                                                    <td><?= $data->nik_p ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td>:</td>
                                                    <td><?= $data->nama_p ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tempat Lahir</td>
                                                    <td>:</td>
                                                    <td><?= $data->tempat_lahir_p ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Tanggal Lahir</td>
                                                    <td>:</td>
                                                    <td><?= $data->tanggal_lahir_p ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td>:</td>
                                                    <td><?= $data->alamat_p ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Nomor Hp/WhatsApp</td>
                                                    <td>:</td>
                                                    <td><?= $data->nohp_p ?></td>
                                                </tr>

                                                <!-- <tr>
                                                    <td>File KTP</td>
                                                    <td colspan="2"><iframe src="<?= base_url('./assets/file_ktp/') . $data->file_ktp ?>" width="800" height="600"></iframe></td><td> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>File KK</td>
                                                    <td colspan="2"><iframe src="<?= base_url('./assets/file_kk/') . $data->file_kk ?>" width="800" height="600"></iframe></td>
                                                    <td></td>
                                                </tr> -->

                                                <tr>
                                                    <td>Berkas Persyaratan</td>
                                                    <td colspan="2"><iframe src="<?= base_url('./assets/file_berkas/') . $data->file_berkas ?>" width="900" height="600"></iframe></td>
                                                    <td></td>
                                                </tr>

                                                <div>
    
    
</div>



            									<!-- <tr>
            										<td>File KTP</td>
            										<td>:</td>
            										<td>
            											<img src="<?= base_url('./assets/file_ktp/') . $data->file_ktp ?>" class="img-thumbnail">
            										</td>
            									</tr>
            									<tr>
            										<td>File KK</td>
            										<td>:</td>
            										<td>
            											<img src="<?= base_url('./assets/file_kk/') . $data->file_kk ?>" class="img-thumbnail">
            										</td>
            									</tr> -->


            								<?php } ?>
            							</table>
            							<h6>Data Almarhum / Almarhumah</h6>
            							<table class="table" style="width:100%">
            								<?php foreach ($datas as $data) { ?>
            									
            									<tr>
            										<td>Nama Alm/h</td>
            										<td>:</td>
            										<td><?= $data->nama_alm ?></td>
            									</tr>
            									<tr>
            										<td>Bin/i</td>
            										<td>:</td>
            										<td><?= $data->bin ?></td>
            									</tr>
            									<tr>
            										<td>NIK</td>
            										<td>:</td>
            										<td><?= $data->nik ?></td>
            									</tr>
            									<tr>
            										<td>Jenis Kelamin</td>
            										<td>:</td>
            										<td><?= $data->jekel ?></td>
            									</tr>
            									<tr>
            										<td>TTL</td>
            										<td>:</td>
            										<td><?= $data->tempat_lahir_a ?>, <?= $data->tanggal_lahir_a ?></td>
            									</tr>
            									<tr>
            										<td>Kewarganegaraan</td>
            										<td>:</td>
            										<td><?= $data->kewarganegaraan_a ?></td>
            									</tr>
            									<tr>
            										<td>Status Pernikahan</td>
            										<td>:</td>
            										<td><?= $data->status_perkawinan_a ?></td>
            									</tr>
            									<tr>
            										<td>Pekerjaan</td>
            										<td>:</td>
            										<td><?= $data->pekerjaan_a ?></td>
            									</tr>
            									<tr>
            										<td>Alamat</td>
            										<td>:</td>
            										<td><?= $data->alamat_a ?></td>
            									</tr>
            									<tr>
            										<td>Hari Meninggal</td>
            										<td>:</td>
            										<td><?= $data->hari ?></td>
            									</tr>
            									<tr>
            										<td>Tanggal Meninggal</td>
            										<td>:</td>
            										<td><?= $data->tanggal_meninggal ?></td>
            									</tr>
            									<tr>
            										<td>Jam Meninggal</td>
            										<td>:</td>
            										<td><?= $data->jam_meninggal ?></td>
            									</tr>
            									<tr>
            										<td>Tempat Meninggal</td>
            										<td>:</td>
            										<td><?= $data->tempat_meninggal ?></td>
            									</tr>
            									<tr>
            										<td>Tempat Pemakaman</td>
            										<td>:</td>
            										<td><?= $data->tempat_pemakaman ?></td>
            									</tr>
            									<tr>
            										<td>Sebab Meninggal</td>
            										<td>:</td>
            										<td><?= $data->sebab_meninggal ?></td>
            									</tr>
            								<?php } ?>
            							</table>
            						</div>
            					</div>
            				</div>

            			</div>
            		</div>
            	</section>
            </div>
