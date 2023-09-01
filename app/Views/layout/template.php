<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css'); ?>">
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title><?= $title; ?></title>
</head>

<body style="background-image:url(<?= base_url('assets/img/template/bodyBg.png') ?>);">
    <section>
        <img src="<?= base_url() ?>assets/img/template/topBarBg.png" class="fixed-top" alt="Logo IWAPI">
    </section>
    <section>
        <nav class="navbar navbar-expand-lg fixed-top pr-2 mt-3">
            <div class="container">
                <img src="<?= base_url() ?>assets/img/template/ppLogo.png" class="imgLogoNav" alt="Logo IWAPI">
                <a class="navbar-brand" href="#">PainlessPaint</a>
                <button class="navbar-toggler" type="button" onclick=changeColor() data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Produk
                            </a>
                            <ul class="dropdown-menu">
                                <li><a id ="HousePaint" class="dropdown-item" href="<?php echo site_url('/pages/housePaint/Interior-Exterior-Metalic'); ?>">House Paint</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a id ="DrawingPaint" class="dropdown-item" href="<?php echo site_url('/pages/drawingPaint/Oil_based-WaterColor'); ?>">Drawing Paint</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Warna
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/pages/colorCard">Color Card</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/pages/colorPicker">Color Picker</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="/pages/toko">Toko</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Kalkulasi
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/pages/guideline">Takaran</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="/pages/priceChecker">Penghitungan Biaya</a></li>
                            </ul>
                        </li>
                        <a class="nav-link" href="/pages/profil">Tentang kami</a>
                        <a class="nav-link" href="/pages/kontakKami">Kontak kami</a>
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <?= $this->renderSection('content'); ?>
    <section>
        <footer style="background-color:#CDEEFF" class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3"><img src="<?= base_url() ?>assets/img/template/ppLogo.png" class="img-fluid imgFooterNav" alt="Logo IWAPI"></div>
                    <div class="col-md-6" style="margin-top: 40px">
                        <div class="row mr-2 justify-content-start">
                            <div class="col-3">
                                <a href="/">
                                    <h6>Profil</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="/pages/colorPicker">
                                    <h6>Color Picker</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row mr-2 mt-3 justify-content-start">
                            <div class="col-3"> <a href="/pages/housePaint">
                                    <h6>House Paint</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="/pages/drawingPaint">
                                    <h6>Drawing Paint</h6>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-3 mr-2 justify-content-start">
                            <div class="col-3">
                                <a href="/pages/toko">
                                    <h6>Toko</h6>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="/pages/priceChecker">
                                    <h6>Price Checker</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mt-3 mr-2">
                        <h3><strong>Follow Us</strong></h3>
                        <div class="row">
                            <div class="col-md-1">
                                <h6> <a href="https://www.youtube.com/channel/UClbd8TrjPJuzeTeqMYH7iLQ">
                                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-youtube ml-1" viewBox="0 0 16 16">
                                                <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                            </svg></h3>
                                    </a></h6>
                            </div>
                            <div class="col-md-2 pt-2">
                                <h6>PainlessPaint Official</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <h6><a href="https://www.instagram.com/iwapi_kabtangerang/">
                                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-instagram  ml-1" viewBox="0 0 16 16">
                                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                            </svg></h3>
                                    </a>
                                </h6>
                            </div>
                            <div class="col-md-2 pt-2">
                                <h6>@PainlessPaint_Official</h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-1">
                                <h6><a href="https://www.facebook.com/profile.php?id=100093706239727">
                                        <h3><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-facebook  ml-1" viewBox="0 0 16 16">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                            </svg>
                                        </h3>
                                    </a>
                                </h6>
                            </div>
                            <div class="col-md-2 pt-2">
                                <h6>PainlessPaint Official</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <section style="background-image:url(<?= base_url('assets/img/template/footerBottomBg.png') ?>);">
        <div class="container">
            <div class="row text-center">
                <hr style="margin-top: 20px; color:black;">
                <h5 class="footerTxt"><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
                            <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z" />
                        </svg>Created by Monica Sherly 2023</strong></h5>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        const navEl = document.querySelector('.navbar');

        window.addEventListener('scroll', () => {
            if (window.scrollY >= 56) {
                navEl.classList.add('navbar-scrolled');
            } else if (window.scrollY < 56) {
                navEl.classList.remove('navbar-scrolled');
            }
        });

        function changeColor() {
            const navAll = document.getElementById("navbar");
            if (navAll.classList.contains("navbar-mini")) {
                navAll.classList.remove("navbar-mini");
            } else {
                navAll.classList.add("navbar-mini");
            }
        }

        //IDSelector
        const links = document.querySelectorAll('a[id]');
        links.forEach(link => {
            link.addEventListener('click', (event) => {
                const categoryId = link.id;
                sessionStorage.setItem('selectedCategory', categoryId);
            });
        });
    </script>
</body>

</html>