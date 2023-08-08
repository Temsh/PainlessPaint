<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="iklan">
    <div class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1800">
                <a><img class="img-fluid" src="<?= base_url() ?>assets/img/home/iklan1.png"></a>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <a><img class="img-fluid" src="<?= base_url() ?>assets/img/home/iklan2.png"></a>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <a><img class="img-fluid" src="<?= base_url() ?>assets/img/home/iklan3.png"></a>
            </div>
            <div class="carousel-item" data-bs-interval="3000">
                <a><img class="img-fluid" src="<?= base_url() ?>assets/img/home/iklan4.png"></a>
            </div>
        </div>
    </div>
</section>
<section style="background-color:white">
    <div class="container-lg pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="homeProfil col-md-4 d-flex justify-content-center align-items-center">
                <img class="img-fluid" src="<?= base_url() ?>assets/img/home/homeProfil.png">
            </div>
            <div class="text col-md-7 mt-3">
                <div class="row">
                    <h3 class="pb-2"><strong>PaintlessPaint</strong></h3>
                    <p>
                        Selamat datang di PainlessPaint, rumah bagi cat inovatif yang ramah lingkungan dan mudah diaplikasikan pertama di Indonesia. Sebagai pelopor dalam industri ini, kami bangga menyediakan berbagai produk berkualitas tinggi untuk memenuhi kebutuhan cat rumah dan cat gambar Anda.</br></br>

                        Komitmen kami terhadap lingkungan menginspirasi pengembangan cat ramah lingkungan yang tidak hanya memberikan keindahan, tetapi juga menjaga alam. Dengan cat rumah waterproof exterior kami, Anda bisa tenang menikmati keindahan rumah Anda dalam cuaca apapun.</br></br>

                        Warna interior yang menarik dan pilihan yang beragam adalah salah satu keunggulan kami. Dengan cat pelapis kayu kami, furnitur kayu Anda akan tampil lebih cantik dan dilindungi dengan baik.</br></br>

                        Selain itu, keamanan anak-anak sangat penting bagi kami. Oleh karena itu, cat gambar kami hadir dengan kualitas terbaik dan formula yang aman bagi anak-anak, sehingga Anda dapat dengan tenang melihat kreativitas mereka berkembang tanpa khawatir tentang bahan berbahaya.</br></br>

                        Bergabunglah dengan kami di PainlessPaint dan hadirkan keindahan dan perlindungan yang tak tertandingi untuk rumah dan karya seni Anda. Bersama-sama, mari ciptakan lingkungan yang indah, aman, dan berkelanjutan.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-lg pb-5 pt-5">
        <div class="row text-center ">
            <h1><strong>Our Product</strong></h1>
        </div>
        <div class="row d-flex justify-content-center text-center pt-3 produkHome">
            <div class="col-md-6 pb-3 text-center">
                <a><img class="img-fluid" src="<?= base_url() ?>assets/img/home/produk1.png"></a>
            </div>
            <div class="col-md-6 text-center">
                <a><img class="img-fluid" src="<?= base_url() ?>assets/img/home/produk2.png"></a>
            </div>
        </div>
    </div>
</section>
<section style="background-color:white">
    <div class="container-lg  pb-5 pt-5">
        <div class="row text-center">
            <h3><strong>Embrace your imagination with our 300++ color variants</strong></h3>
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
<section>
    <div class="container-lg">
        <div class="row d-flex align-items-center">
            <div class="col-md-8">
                <div class="row pt-5">
                    <h5><strong>Don't worry, our store has spread all over Indonesia</strong></h5>
                </div>
                <div class="row pt-2">
                    <h1><strong>Feel Free to Check Our Store</strong></h1>
                </div>
                <div class="row pt-2">
                    <h1><strong>>>>>>>>>>>>></strong></h1>
                </div>
            </div>
            <div class="col-md-4">
                <h1> <i class="material-icons storeIcon d-block w-100">store</i></h1>
            </div>
        </div>
    </div>
</section>
<section style="background-color:white;">
    <div class="container-lg pt-5 pb-5">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-8">
                <h1><strong>Contact Us</strong></h1>
            </div>
            <div class="col-md-2" >
                <a><span class="material-symbols-outlined emailIcon">
                        stacked_email
                    </span></a>
            </div>
        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?= $this->endSection(); ?>