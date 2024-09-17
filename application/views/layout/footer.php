<!-- <footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-left">
            <p>2022 &copy; Aplikasi Pelayanan Surat</p>
        </div>
    </div>
</footer> -->
</div>
</div>
<script src="<?= base_url(); ?>./assets/js/feather-icons/feather.min.js"></script>
<script src="<?= base_url(); ?>./assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url(); ?>./assets/js/app.js"></script>

<script src="<?= base_url(); ?>./assets/vendors/chartjs/Chart.min.js"></script>
<script src="<?= base_url(); ?>./assets/vendors/apexcharts/apexcharts.min.js"></script>
<script src="<?= base_url(); ?>./assets/js/pages/dashboard.js"></script>
<script src="<?= base_url(); ?>./assets/alertifyjs/alertify.min.js"></script>
<script src="<?= base_url(); ?>./assets/jQuery/jQuery.js"></script>
<script src="<?= base_url(); ?>./assets/DataTables/datatables.min.js"></script>
<script src="<?= base_url(); ?>./assets/js/main.js"></script>

<script>
    $(document).ready(function() {
        $('#data-admin').DataTable();
    });

    $(document).ready(function() {
        $('#data-warga').DataTable();
    });

    $(document).ready(function() {
        $('#data-users').DataTable();
    });

    $(document).ready(function() {
        $('#verifikasi').DataTable();
    });
</script>

<script>
    $(document).ready(function() {
        $('#histori').DataTable();
    });
</script>


<script>
    <?php if ($this->session->flashdata('success')) { ?>
        alertify.set('notifier', 'position', 'top-right');
        alertify.success('<span class="text-white"><?= $this->session->flashdata('success') ?></span>');
    <?php } else if ($this->session->flashdata('danger')) { ?>
        alertify.set('notifier', 'position', 'top-right');
        alertify.error('<span class="text-white"><?= $this->session->flashdata('danger') ?></span>');
    <?php } else if ($this->session->flashdata('error')) { ?>
        alertify.set('notifier', 'position', 'top-right');
        alertify.warning('<span class="text-dark"><?= $this->session->flashdata('error') ?></span>');
        unset();
    <?php } ?>
</script>

<script>
    function clearme() {
        <?php
        if (isset($_SESSION['success'])) :
            unset($_SESSION['success']);
        elseif (isset($_SESSION['success'])) :
            unset($_SESSION['success']);
        endif;
        ?>

        <?php
        if (isset($_SESSION['danger'])) :
            unset($_SESSION['danger']);
        elseif (isset($_SESSION['danger'])) :
            unset($_SESSION['danger']);
        endif;
        ?>

        <?php
        if (isset($_SESSION['error'])) :
            unset($_SESSION['error']);
        elseif (isset($_SESSION['error'])) :
            unset($_SESSION['error']);
        endif;
        ?>
    }
</script>
</body>

</html>