</div>
<script src="<?= base_url() ?>./assets/js/feather-icons/feather.min.js"></script>
<script src="<?= base_url(); ?>./assets/alertifyjs/alertify.min.js"></script>
<script src="<?= base_url(); ?>./assets/jQuery/jQuery.js"></script>
<script src="<?= base_url() ?>./assets/js/app.js"></script>

<script src="assets/js/main.js"></script>

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