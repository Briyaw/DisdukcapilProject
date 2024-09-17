            <div class="main-content container-fluid">
                <div class="page-title">
                    <h6><strong>Surat Keterangan Kematian</strong></h6>
                </div>
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="btn-group">
                                <a href="<?= base_url('list-surat') ?>" class="btn btn-warning btn-sm mb-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg> Kembali</a>
                            </div>
                            <div class="card ml-5 mr-5">
                                <div class="card-body">
                                    <form action="<?= base_url('skk/proses') ?>" method="post" enctype="multipart/form-data">
                                        <p class="text-center"><hr size="5"></p>
                                        <p class="text-center">DATA PELAPOR</p>
                                        <p class="text-center"><hr size="5"></p>
                                        <!-- <div class="form-group">
                                            <label for="">Hubungan dengan yang meninggal <small class="text-danger">(*Harus dengan ahli waris.)</small></label>
                                            <input type="text" name="hubungan" class="form-control" value="<?= set_value('hubungan') ?>" required>
                                        </div> -->
                                       
                                                <div class="form-group">
                                                    <label for="">Hubungan dengan yang meninggal</label>
                                                    <select name="hubungan" id="" class="form-control" required>
                                                        <option selected disabled>Pilih Hubungan</option>
                                                        <option value="Suami">Suami</option>
                                                        <option value="Istri">Istri</option>
                                                        <option value="Orangtua">Orangtua</option>
                                                        <option value="Anak Kandung">Anak Kandung</option>
                                                        <option value="Kakak Kandung">Kakak Kandung</option>
                                                        <option value="Adik Kandung">Adik Kandung</option>
                                                        <option value="Ipar">Ipar</option>
                                                        <option value="Famili Lain">Famili Lain</option>
                                                    </select>
                                                </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">NIK Pelapor (sesuai KTP-el)</label>
                                                    <input type="text" name="nik_p" class="form-control" value="<?= set_value('nik_p') ?>" maxlength = "16" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Nama Pelapor (sesuai KTP-el) </label>
                                                    <input type="text" name="nama_p" class="form-control" value="<?= set_value('nama_p') ?>" style='text-transform:uppercase' required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Lahir</label>
                                                    <input type="text" name="tempat_lahir_p" class="form-control" value="<?= set_value('tempat_lahir_p') ?>" style='text-transform:uppercase' required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class=" form-group">
                                                    <label for="">Tanggal Lahir Pelapor</label>
                                                    <input type="date" name="tanggal_lahir_p" class="form-control" value="<?= set_value('tanggal_lahir_p') ?>" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                            <label for="">Alamat Pelapor</label>
                                            <textarea name="alamat_p" id="" cols="30" rows="5" class="form-control" required><?= set_value('alamat_p') ?></textarea>
                                        </div>
                                        </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Nomor Hp/WhatsApp Pelapor</label>
                                                    <input type="number" name="nohp_p" class="form-control" value="<?= set_value('nohp_p') ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                            



                                        <p class="text-center"><hr size="5"></p>
                                        <p class="text-center">BIODATA YANG MENINGGAL</p>
                                        <p class="text-center"><hr size="5"></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Nama Almarhum / Almarhumah (sesuai KTP-el)</label>
                                                    <input type="text" name="nama_alm" class="form-control" value="<?= set_value('nama_alm') ?>" style='text-transform:uppercase' required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Bin / Binti</label>
                                                    <input type="text" name="bin" class="form-control" value="<?= set_value('bin') ?>" style='text-transform:uppercase' required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">NIK (sesuai KTP-el)</label>
                                                    <input type="text" name="nik_a" class="form-control" value="<?= set_value('nik') ?>" maxlength = "16" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Jenis Kelamin</label>
                                                    <select name="jekel_a" id="" class="form-control" required>
                                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                                        <option value="Laki - Laki">Laki - Laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Lahir </label>
                                                    <input type="text" name="tempat_lahir_a" class="form-control" value="<?= set_value('tempat_lahir') ?>" style='text-transform:uppercase' required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class=" form-group">
                                                    <label for="">Tanggal Lahir</label>
                                                    <input type="date" name="tanggal_lahir_a" class="form-control" value="<?= set_value('tanggal_lahir') ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class=" form-group">
                                                    <label for="">Kewarganegaraan</label>
                                                    <select name="kewarganegaraan_a" class="form-control" id="" required>
                                                        <option selected disabled>Pilih Kewarganegaraan</option>
                                                        <option value="WNI">WNI</option>
                                                        <option value="WNA">WNA</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Status Perkawinan</label>
                                                    <select name="status_perkawinan_a" id="" class="form-control" required>
                                                        <option selected disabled>Pilih Status Perkawinan</option>
                                                        <option value="Kawin">Kawin</option>
                                                        <option value="Belum Kawin">Belum Kawin</option>
                                                        <option value="Janda">Janda</option>
                                                        <option value="Duda">Duda</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pekerjaan</label>
                                            <input type="text" name="pekerjaan_a" value="<?= set_value('pekerjaan') ?>" class="form-control" style='text-transform:uppercase' required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat</label>
                                            <textarea name="alamat_a" id="" cols="30" rows="5" class="form-control" required><?= set_value('alamat') ?></textarea>
                                        </div>

                                        <!-- <div class="form-group">
                                            <label for="">Foto Kartu Keluarga</label>
                                            <input type="file" name="file_kk" value="<?= set_value('file_kk') ?>" class="form-control" id="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Foto KTP</label>
                                            <input type="file" name="file_ktp" value="<?= set_value('file_ktp') ?>" class="form-control" required>
                                        </div> -->

                                        <div class="form-group">
                                            <label for="">Upload Berkas Persyaratan (ukuran file maksimal 2 mb, berjenis pdf)</label>
                                            <input type="file" name="file_berkas" value="<?= set_value('file_berkas') ?>" class="form-control" required>
                                        </div>



                                        <p class="text-center"><hr size="5"></p>
                                        <p class="text-center">TELAH MENINGGAL DUNIA PADA :</p>
                                        <p class="text-center"><hr size="5"></p>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Hari</label>
                                                    <select name="hari" class="form-control" id="">
                                                        <option selected disabled>Pilih Hari</option>
                                                        <option value="Senin">Senin</option>
                                                        <option value="Selasa">Selasa</option>
                                                        <option value="Rabu">Rabu</option>
                                                        <option value="Kamis">Kamis</option>
                                                        <option value="Jumat">Jumat</option>
                                                        <option value="Sabtu">Sabtu</option>
                                                        <option value="Minggu">Minggu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tanggal Meninggal</label>
                                                    <input type="date" name="tanggal_meninggal" class="form-control" value="<?= set_value('tanggal_meninggal') ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Jam Meninggal</label>
                                                    <input type="time" name="jam_meninggal" class="form-control" value="<?= set_value('jam_meninggal') ?>" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Meninggal</label>
                                                    <input type="text" name="tempat_meninggal" placeholder="Contoh : RSUD Palabuhan Ratu " class="form-control" value="<?= set_value('tempat_meninggal') ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Sebab Meninggal</label>
                                                    <input type="text" name="sebab_meninggal" placeholder="Contoh : Sakit" class="form-control" value="<?= set_value('sebab_meninggal') ?>" required>
                                                </div>
                                            </div> -->

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Sebab Meninggal</label>
                                                    <select name="sebab_meninggal" class="form-control" id="">
                                                        <option selected disabled>Pilih Sebab Meninggal</option>
                                                        <option value="Sakit biasa/Tua">Sakit biasa/Tua</option>
                                                        <option value="Pandemi/Wabah Penyakit">Pandemi/Wabah Penyakit</option>
                                                        <option value="Kecelakaan">Kecelakaan</option>
                                                        <option value="Kriminalitas">Kriminalitas</option>
                                                        <option value="Bunuh Diri">Bunuh Diri</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Tempat Pemakaman</label>
                                                    <input type="text" name="tempat_pemakaman" placeholder="Contoh : TPU Desa" class="form-control" value="<?= set_value('sebab_meninggal') ?>" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Alamat Pemakaman</label>
                                            <textarea name="alamat_pemakaman" class="form-control" id="" cols="30" rows="5" placeholder="Masukkan alamat pemakaman secara lengkap" required><?= set_value('alamat_pemakaman') ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Keperluan Surat</label>
                                            <textarea name="keperluan" class="form-control" id="" cols="30" rows="5" placeholder="Masukkan keperluan permintaan surat" required><?= set_value('keperluan') ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-block btn-primary btn-sm" type="submit"><b>Kirim Permohonan Surat</b> <i class="bi bi-send-fill" required></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
            </div>