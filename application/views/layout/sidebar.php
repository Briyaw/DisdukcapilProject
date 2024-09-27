<?php
if ($this->session->userdata('role_id') == 3) {
    //get notifikasi
    $skd = $this->M_notifikasi->nSkd();
    $sktm = $this->M_notifikasi->nSktm();
    $sku = $this->M_notifikasi->nSku();
    $skp = $this->M_notifikasi->nSkp();
    $spak = $this->M_notifikasi->nSpak();
    $skk = $this->M_notifikasi->nSkk();

    //jumlah data notifikasi surat users
    $all = $skd['jumlah'] + $sktm['jumlah'] + $sku['jumlah'] + $skp['jumlah'] + $spak['jumlah'] + $skk['jumlah'];
}

if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2) {
    //get notifikasi admin
    $Skd = $this->M_notifikasi->aSkd();
    $Sktm = $this->M_notifikasi->aSktm();
    $Sku = $this->M_notifikasi->aSku();
    $Skp = $this->M_notifikasi->aSkp();
    $Spak = $this->M_notifikasi->aSpak();
    $Skk = $this->M_notifikasi->aSkk();

    $adminAll = $Skd['jumlah'] + $Sktm['jumlah'] + $Sku['jumlah'] + $Skp['jumlah'] + $Spak['jumlah'] + $Skk['jumlah'];
}

?>
<div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <img src="<?= base_url() ?>./assets/logo/logo_sidebar.png" width="100%" height="150px">
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <!-- <li class='sidebar-title'>Main Menu</li> -->
                <?php if ($this->session->userdata('role_id') == 1 || $this->session->userdata('role_id') == 2 || $this->session->userdata('role_id') == 3 || $this->session->userdata('role_id') == 4) { ?>
                    <li class="sidebar-item <?= $this->uri->segment(1) == 'dashboard' ? 'active ' : '' ?>">
                        <a href="<?= base_url('dashboard') ?>" class='sidebar-link'>
                            <i class="bi bi-speedometer"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                <?php } ?>

                <!-- sidemenu Administrator dengan role 1 -->
                <?php if ($this->session->userdata('role_id') == 1) { ?>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-envelope-check-fill"></i>
                            <span>Verifikasi Surat</span>
                            <span class="badge badge bg-danger text-white"><?= $adminAll; ?></span>
                        </a>
                        <ul class="submenu
                        <?=
                        $this->uri->segment(1) == 'verifikasi-surat-domisili' ||
                            $this->uri->segment(1) == 'verifikasi-surat-usaha' ||
                            $this->uri->segment(1) == 'verifikasi-surat-tidak-mampu' ||
                            $this->uri->segment(1) == 'verifikasi-surat-keterangan-pengantar' ||
                            $this->uri->segment(1) == 'verifikasi-surat-kelahiran' ||
                            $this->uri->segment(1) == 'verifikasi-surat-kematian'||
                            $this->uri->segment(1) == 'verifikasi-bpp'
                            ? 'active ' : ''
                        ?>">
                            <li>
                                <a href="<?= base_url('verifikasi-surat-tidak-mampu') ?>">Surat Tidak Mampu
                                    <span class="badge badge bg-danger text-white"><?= $Sktm['jumlah'] ?></span></a>
                            </li>
                            <li>
                                <a href="<?= base_url('verifikasi-surat-usaha') ?>">Surat Usaha
                                    <span class="badge badge bg-danger text-white"><?= $Sku['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('verifikasi-surat-domisili') ?>">Surat Domisili
                                    <span class="badge badge bg-danger text-white"><?= $Skd['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('verifikasi-surat-keterangan-pengantar') ?>">Keterangan Pengantar
                                    <span class="badge badge bg-danger text-white"><?= $Skp['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('verifikasi-surat-kelahiran') ?>">Surat Kelahiran
                                    <span class="badge badge bg-danger text-white"><?= $Spak['jumlah'] ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="<?= base_url('verifikasi-surat-kematian') ?>">Surat Kematian
                                    <span class="badge badge bg-danger text-white"><?= $Skk['jumlah'] ?></span></a>
                            </li>

                            <li>
                                <a href="<?= base_url('verifikasi-bpp') ?>">Buku Pokok Pemakaman
                                    <span class="badge badge bg-danger text-white"><?= $Skk['jumlah'] ?></span></a>
                            </li>


                        </ul>
                    </li>

                    <!-- <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-desa' || $this->uri->segment(1) == 'tambah-data-desa' || $this->uri->segment(1) == 'edit-desa' || $this->uri->segment(1) == 'detail-desa' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-desa') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Data Opr Desa</span>
                        </a>
                    </li> -->

                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-warga' || $this->uri->segment(1) == 'tambah-data-warga' || $this->uri->segment(1) == 'edit-warga' || $this->uri->segment(1) == 'detail-warga' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-warga') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Data Operator Desa</span>
                        </a>
                    </li>

                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-kec'  ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-kec') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Data Operator Kecamatan</span>
                        </a>
                    </li>

                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-bpp' || $this->uri->segment(1) == 'tambah-data-bpp' || $this->uri->segment(1) == 'edit-bpp' || $this->uri->segment(1) == 'detail-bpp' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-bpp') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Data Buku Pokok Pemakaman</span>
                        </a>
                    </li>

                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-skkt' || $this->uri->segment(1) == 'tambah-data-skkt' || $this->uri->segment(1) == 'edit-skkt' || $this->uri->segment(1) == 'detail-skkt' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-skkt') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Upload Surat Keterangan Kematian</span>
                        </a>
                    </li>

                    
                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-users' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-users') ?>" class='sidebar-link'>
                            <i class="bi bi-person-lines-fill"></i>
                            <span>Data Users</span>
                        </a>
                    </li>
                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-administrator' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-administrator') ?>" class='sidebar-link'>
                            <i class="bi bi-person-circle"></i>
                            <span>Administrator</span>
                        </a>
                    </li>

                <?php } else if ($this->session->userdata('role_id') == 2) { ?>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-envelope-check-fill"></i>
                            <span>Verifikasi Surat</span>
                            <span class="badge badge bg-danger text-white"><?= $adminAll; ?></span>
                        </a>
                        <ul class="submenu
                        <?=
                        $this->uri->segment(1) == 'verifikasi-surat-domisili' ||
                            $this->uri->segment(1) == 'verifikasi-surat-usaha' ||
                            $this->uri->segment(1) == 'verifikasi-surat-tidak-mampu' ||
                            $this->uri->segment(1) == 'verifikasi-surat-keterangan-pengantar' ||
                            $this->uri->segment(1) == 'verifikasi-surat-kelahiran' ||
                            $this->uri->segment(1) == 'verifikasi-surat-kematian'
                            ? 'active ' : ''
                        ?>">

                            <li>
                                <a href="<?= base_url('verifikasi-surat-kematian') ?>">Surat Kematian
                                    <span class="badge badge bg-danger text-white"><?= $Skk['jumlah'] ?></span></a>
                            </li>

                            <!-- <li>
                                <a href="<?= base_url('verifikasi-surat-tidak-mampu') ?>">Surat Tidak Mampu
                                    <span class="badge badge bg-danger text-white"><?= $Sktm['jumlah'] ?></span></a>
                            </li> -->
                            <li>
                                <a href="#">Surat Tidak Mampu
                                    <span class="badge badge bg-danger text-white"><?= $Sktm['jumlah'] ?></span></a>
                            </li>


                            <!-- <li>
                                <a href="<?= base_url('verifikasi-surat-usaha') ?>">Surat Usaha
                                    <span class="badge badge bg-danger text-white"><?= $Sku['jumlah'] ?></span>
                                </a>
                            </li> -->
                            <li>
                                <a href="#">Surat Usaha
                                    <span class="badge badge bg-danger text-white"><?= $Sku['jumlah'] ?></span>
                                </a>
                            </li>


                            <!-- <li>
                                <a href="<?= base_url('verifikasi-surat-domisili') ?>">Surat Domisili
                                    <span class="badge badge bg-danger text-white"><?= $Skd['jumlah'] ?></span>
                                </a>
                            </li> -->
                            <li>
                                <a href="#">Surat Domisili
                                    <span class="badge badge bg-danger text-white"><?= $Skd['jumlah'] ?></span>
                                </a>
                            </li>


                            <!-- <li>
                                <a href="<?= base_url('verifikasi-surat-keterangan-pengantar') ?>">Keterangan Pengantar
                                    <span class="badge badge bg-danger text-white"><?= $Skp['jumlah'] ?></span>
                                </a>
                            </li> -->
                            <li>
                                <a href="#">Keterangan Pengantar
                                    <span class="badge badge bg-danger text-white"><?= $Skp['jumlah'] ?></span>
                                </a>
                            </li>


                            <!-- <li>
                                <a href="<?= base_url('verifikasi-surat-kelahiran') ?>">Surat Kelahiran
                                    <span class="badge badge bg-danger text-white"><?= $Spak['jumlah'] ?></span>
                                </a>
                            </li> -->
                            <li>
                                <a href="#">Surat Kelahiran
                                    <span class="badge badge bg-danger text-white"><?= $Spak['jumlah'] ?></span>
                                </a>
                            </li>
                            
                        </ul>
                    </li>




                <?php } else if ($this->session->userdata('role_id') == 3) { ?>

                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'list-surat' ? 'active' : '' ?>">
                        <a href="<?= base_url('list-surat') ?>" class='sidebar-link'>
                            <i class="bi bi-envelope-plus-fill"></i>
                            <span>Pengajuan Surat</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-envelope-check-fill"></i>
                            <span>Verifikasi Surat</span>
                            
                        </a>
                        <ul class="submenu
                        <?=
                       $this->uri->segment(1) == 'verifikasi-surat-kematian'
                            ? 'active ' : ''
                        ?>">
                            <li>
                                <a href="<?= base_url('verifikasi-surat-kematian') ?>">Surat Kematian
                                    
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'histori-surat' ? 'active' : '' ?>">
                        <a href="<?= base_url('histori-surat') ?>" class='sidebar-link'>
                            <i class="bi bi-clock-history"></i>
                            <span>Pengajuan Selesai</span>
                            <span class="badge badge bg-danger text-white"><?= $all ?></span>
                        </a>
                    </li>


                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-bpp' || $this->uri->segment(1) == 'tambah-data-bpp' || $this->uri->segment(1) == 'edit-bpp' || $this->uri->segment(1) == 'detail-bpp' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-bpp') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Data Buku Pokok Pemakaman</span>
                        </a>
                    </li>

                  <!--   <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-bpp' || $this->uri->segment(1) == 'tambah-data-bpp' || $this->uri->segment(1) == 'edit-bpp' || $this->uri->segment(1) == 'detail-bpp' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-bpp') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Data Buku Pokok Pemakaman</span>
                        </a>
                    </li> -->

                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-skkt' || $this->uri->segment(1) == 'tambah-data-skkt' || $this->uri->segment(1) == 'edit-skkt' || $this->uri->segment(1) == 'detail-skkt' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-skkt') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Upload Surat Keterangan Kematian</span>
                        </a>
                    </li>

                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-operator'|| $this->uri->segment(1) == 'edit-operator' || $this->uri->segment(1) == 'detail-operator'? 'active ' : '' ?>">
                        <a href="<?= base_url('data-operator') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Profil Pengguna</span>
                        </a>
                    </li>

                <?php } else if ($this->session->userdata('role_id') == 4) {  ?>
                    
                    <li class="sidebar-item  <?= $this->uri->segment(1) == 'data-bpp' || $this->uri->segment(1) == 'tambah-data-bpp' || $this->uri->segment(1) == 'edit-bpp' || $this->uri->segment(1) == 'detail-bpp' ? 'active ' : '' ?>">
                        <a href="<?= base_url('data-bpp') ?>" class='sidebar-link'>
                            <i class="bi bi-people-fill"></i>
                            <span>Data Buku Pokok Pemakaman</span>
                        </a>
                    </li>
                    
                <?php } ?>



            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>

<div id="main">
    <nav class="navbar navbar-header navbar-expand navbar-light">
        <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
        <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <h4 style="margin-left:10px; margin-top:15px;">Aplikasi Pelayanan Surat</h4>
            <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="avatar mr-1">
                            <img src="<?= base_url(); ?>./assets/images/avatar/avatar-s-1.png" alt="" srcset="">
                        </div>
                        <div class="d-none d-md-block d-lg-inline-block">Hi, <?= $this->session->userdata('nama') ?></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- <a class="dropdown-item" href="#"><i data-feather="user"></i> Account</a>
                        <a class="dropdown-item" href="#"><i data-feather="settings"></i> Settings</a>
                        <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="<?= base_url('logout') ?>"><i data-feather="log-out"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>