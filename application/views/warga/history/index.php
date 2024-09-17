<style>
    .img-icon {
        max-width: 6%;
    }

    @media screen and (max-width:346px) {
        .img-icon {
            max-width: 3%;
        }
    }
</style>
<div class="main-content container-fluid">
    <div class="page-title">
        <h5><strong>List Histori Surat</strong></h5>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="row m-3">
                    <div class="col-lg-12 overflow-auto">

                        <a href="<?= base_url('history-surat-kematian') ?>" class="mb-3">
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Keterangan Kematian
                                        <span class="badge badge bg-danger text-white"><?= $skk['jumlah'] ?></span>
                                    </h6>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="mb-3">
                            <!-- <a href="<?= base_url('history-surat-tidak-mampu') ?>" class="mb-3"> -->
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class=" font-bold ml-3 my-auto">Surat Keterangan Tidak Mampu
                                        <span class="badge badge bg-danger text-white"><?= $sktm['jumlah'] ?></span>
                                    </h6>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="mb-3">
                            <!-- <a href="<?= base_url('history-surat-usaha') ?>" class="mb-3"> -->
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Keterangan Usaha
                                        <span class="badge badge bg-danger text-white"><?= $sku['jumlah'] ?></span>
                                    </h6>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="mb-3">
                            <!-- <a href="<?= base_url('history-surat-domisili') ?>" class="mb-3"> -->
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Keterangan Domisili
                                        <span class="badge badge bg-danger text-white"><?= $skd['jumlah'] ?></span>
                                    </h6>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="mb-3">
                            <!-- <a href="<?= base_url('history-surat-keterangan-pengantar') ?>" class="mb-3"> -->
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Keterangan Pengantar
                                        <span class="badge badge bg-danger text-white"><?= $skp['jumlah'] ?></span>
                                    </h6>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="mb-3">
                            <!-- <a href="<?= base_url('history-surat-kelahiran') ?>" class="mb-3"> -->
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Pengantar Akte Kelahiran
                                        <span class="badge badge bg-danger text-white"><?= $spak['jumlah'] ?></span>
                                    </h6>
                                </div>
                            </div>
                        </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>