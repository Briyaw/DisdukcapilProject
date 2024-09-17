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
        <h5><strong>List Pengajuan Surat</strong></h5>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="row m-3">
                    <div class="col-lg-12 overflow-auto">

                        <a href="<?= base_url('skk/buat-surat') ?>" class="mb-3">
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Keterangan Kematian</h6>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="mb-3">
                            <!-- <a href="<?= base_url('sktm/buat-surat') ?>" class="mb-3"> -->
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class=" font-bold ml-3 my-auto">Surat Keterangan Tidak Mampu</h6>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="mb-3">
                            <!-- <a href="<?= base_url('sku/buat-surat') ?>" class="mb-3"> -->
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Keterangan Usaha</h6>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="mb-3">
                            <!-- <a href="<?= base_url('skd/buat-surat') ?>" class="mb-3"> -->
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Keterangan Domisili</h6>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="mb-3">
                            <!-- <a href="<?= base_url('skp/buat-surat') ?>" class="mb-3"> -->
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Keterangan Pengantar</h6>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="mb-3">
                            <!-- <a href="<?= base_url('spak/buat-surat') ?>" class="mb-3"> -->
                            <div class="unread custom-alert-3 bg-white" role="alert">
                                <div class="alert-text w-75 mt-2 p-4 d-flex flex-row">
                                    <img src="<?= base_url() ?>./assets/icons/envelope.png" class="img-icon">
                                    <h6 class="font-bold ml-3 my-auto">Surat Pengantar Akte Kelahiran</h6>
                                </div>
                            </div>
                        </a>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>