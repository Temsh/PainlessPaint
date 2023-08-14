<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section style="margin-top:75px;">
    <div class="container-lg  pb-5 pt-5" style="background-color:white;">
        <div class="row text-center">
            <h3><strong>Select Your Shade</strong></h3>
        </div>
        <div class="row d-flex justify-content-center text-center pt-3 colorCardHome">
            <img class="img-fluid" src="<?= base_url() ?>assets/img/home/colorRed.png">
            <img class="img-fluid" src="<?= base_url() ?>assets/img/home/colorOrange.png">
            <img class="img-fluid" src="<?= base_url() ?>assets/img/home/colorYellow.png">
            <img class="img-fluid" src="<?= base_url() ?>assets/img/home/colorGreen.png">
            <img class="img-fluid" src="<?= base_url() ?>assets/img/home/colorBlue.png">
            <img class="img-fluid" src="<?= base_url() ?>assets/img/home/colorPurple.png">
            <img class="img-fluid" src="<?= base_url() ?>assets/img/home/colorPink.png">
        </div>
    </div>
</section>
<?= $this->endSection(); ?>