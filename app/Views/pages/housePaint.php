<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section style="margin-top:75px;">
    <div class="container housePaint" style="background-color:white; padding:20px;">
        <div class="row d-flex justify-content-center">
            <?php foreach ($produk as $p) : ?>
                    <div class="card">
                        <a href="/housePaint/<?= $p['id']; ?>" class="btnDetail" style="text-align:right"><button>></button></a>
                        <img src="/assets/img/housePaint/<?= $p['produk']; ?>">
                        <div class="card-body">
                        <h4 class="mt-2"><?= $p['nama']; ?></h4>
                        <h5><?= $p['kegunaan']; ?> usage</h5>
                        <h6>5 kg</h6>
                        <h5 style="text-align:right"><strong>Rp.<?= $p['harga']; ?>/kg</strong></h5>
                        </div>
                    </div>
                
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>