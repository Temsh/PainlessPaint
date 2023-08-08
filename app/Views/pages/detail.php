<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container detail" style="margin-top:75px; background-image: linear-gradient(to right, rgba(242, 159, 159, 0.8),rgba(242, 189, 159, 0.8),rgba(242, 234, 159, 0.8),rgba(195, 242, 159, 0.8),rgba(159, 217, 242, 0.8),rgba(171, 159, 242, 0.8),rgba(242, 159, 238, 0.8));">
    <div class="row d-felx justify-content-center">
        <h2 class=" text-center mt-5 mb-3">Edit Produk</h2>
        <div class="card mb-5" style="max-width:540px;">
            <div class="row no-gutters">
                <div class="col-md-5">
                    <img src="/assets/img/housePaint/<?= $produk['produk']; ?>">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <div class="card-title"><strong>Nama: </strong><?= $produk['nama']; ?>
                        </div>
                        <p class="card-text"><strong>Kegunaan: </strong><?= $produk['kegunaan']; ?></p>
                        <p class="card-text"><strong>Harga: </strong><?= $produk['harga']; ?></p>
                        <button class="btn btn-primary">Update</button>
                        <button class="btn btn-danger">Delete</button></br></br>
                        <button class="btn"><a href="/pages/housePaint">Back</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>