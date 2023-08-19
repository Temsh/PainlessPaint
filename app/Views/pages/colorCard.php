<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="colorCard" style="margin-top:75px;">
    <div class="container-lg pb-5 pt-5" style="background-color:white;">
        <div class="colorCardHomeBorder">
            <div class="row text-center pt-3">
                <h3><strong>Select Your Shade</strong></h3>
            </div>
            <div class="d-flex justify-content-center pt-3 pb-3">
                <button id="Red" class="d-flex justify-content-center shadeBtn">
                    <div class="colorShade" style="background-color:red"></div>
                </button>
                <button id="Orange" class="d-flex justify-content-center shadeBtn">
                    <div class="colorShade" style="background-color:orange"></div>
                </button>
                <button id="Yellow" class="d-flex justify-content-center shadeBtn">
                    <div class="colorShade" style="background-color:yellow"></div>
                </button>
                <button id="Green" class="d-flex justify-content-center shadeBtn">
                    <div class="colorShade" style="background-color:green"></div>
                </button>
                <button id="Blue" class="row d-flex justify-content-center shadeBtn">
                    <div class="colorShade" style="background-color:blue"></div>
                </button>
                <button id="Purple" class="row d-flex justify-content-center shadeBtn">
                    <div class="colorShade" style="background-color:purple"></div>
                </button>
                <button id="Pink" class="row d-flex justify-content-center shadeBtn">
                    <div class="colorShade" style="background-color:pink"></div>
                </button>
            </div>
        </div>
        <div class="row d-flex justify-content-center colorCard ">
            <?php foreach ($warna as $w) : ?>
                <button class="row d-flex justify-content-center" onclick="window.location.href = '/colorCard/<?= $w['nama']; ?>';"> <img src="/assets/img/colorCard/<?= $w['gambar']; ?>"></button>
            <?php endforeach; ?>
        </div>
    </div>

    <script>
        const buttons = document.querySelectorAll('button[id]');
        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const categoryId = button.id;
                window.location.href = `<?php echo site_url('colorCard/detailWarna/'); ?>${categoryId}`;
            });
        });
    </script>

</section>
<?= $this->endSection(); ?>