<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section style="margin-top:75px;">
    <div class="container housePaint" style="background-color:white; padding:20px;">
        <div class="row d-flex justify-content-center">
            <h2 class="text-center">Drawing Paint</h2>
            <?php foreach ($produk as $p) : ?>
                <div class="card">
                    <img src="/assets/img/produk/<?= $p['produk']; ?>">
                    <div class="card-body">
                        <h4 class="mt-2"><?= $p['nama']; ?></h4>
                        <h5><?= $p['kegunaan']; ?> usage</h5>
                        <h6>1 pcs</h6>
                        <h5 style="text-align:right"><strong>Rp.<?= $p['harga']; ?></strong></h5>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
    </div>
</section>
<?= $this->endSection(); ?>