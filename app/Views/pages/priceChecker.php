<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section style="margin-top:75px;">
    <div class="container">
        <div class="col d-flex justify-content-center">
            <div class="card priceChecker gradientBg">
                <div class="card-body">
                    <h3 class="text-center"><strong>Penghitungan Biaya House Paint</strong></h3>
                    <ul>
                        <li>Hasil perhitungan ini merupakan akumulasi dari dua lapisan cat yang diterapkan.</li>
                        <li>Estimasi ini hanya bersifat indikatif, dan saat pelaksanaan dilakukan, kemungkinan terdapat sedikit variasi dari hasil perhitungan. Oleh karena itu, disarankan untuk mempertimbangkan persiapan cat tambahan serta memastikan konsistensi ketebalan cat di setiap lapisan.</li>
                        <li>Estimasi biaya ini hanya mempertimbangkan biaya untuk cat PainlessPaint itu sendiri, dan belum memperhitungkan kelengkapan peralatan dan material pendukung lainnya.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="card col-md-10 px-3 py-3">
                <div class="card-body">
                    <form action="<?php echo site_url('form/submitForm'); ?>" method="post">
                        <div class="mb-1">
                            <label for="soalKalkulasi1" class="form-label"><strong>Tipe Bangunan</strong></label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionA" value="A">
                            <label class="form-check-label" for="optionA">
                                Apartemen 93 m2
                            </label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="B">
                            <label class="form-check-label" for="optionB">
                                Rumah 1 Lantai
                            </label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="C">
                            <label class="form-check-label" for="optionB">
                                Rumah 2 Lantai
                            </label><br><br>
                        </div>
                        <div class="mb-1">
                            <label for="soalKalkulasi2" class="form-label"><strong>Produk untuk Kamar Tidur</strong></label><br>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <label class="form-check-label" for="optionA">
                                Apartemen 93 m2
                            </label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="B">
                            <label class="form-check-label" for="optionB">
                                Rumah 1 Lantai
                            </label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="C">
                            <label class="form-check-label" for="optionB">
                                Rumah 2 Lantai
                            </label><br><br>
                        </div>
                        <div class="mb-1">
                            <label for="soalKalkulasi2" class="form-label"><strong>Produk untuk Ruang Tamu</strong></label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionA" value="A">
                            <label class="form-check-label" for="optionA">
                                Apartemen 93 m2
                            </label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="B">
                            <label class="form-check-label" for="optionB">
                                Rumah 1 Lantai
                            </label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="C">
                            <label class="form-check-label" for="optionB">
                                Rumah 2 Lantai
                            </label><br><br>
                        </div>
                        <div class="mb-1">
                            <label for="soalKalkulasi2" class="form-label"><strong>Produk untuk Plafon</strong></label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionA" value="A">
                            <label class="form-check-label" for="optionA">
                                Apartemen 93 m2
                            </label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="B">
                            <label class="form-check-label" for="optionB">
                                Rumah 1 Lantai
                            </label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="C">
                            <label class="form-check-label" for="optionB">
                                Rumah 2 Lantai
                            </label><br><br>
                        </div>
                        <div class="mb-1">
                            <label for="soalKalkulasi2" class="form-label"><strong>Produk untuk Kayu & Besi</strong></label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionA" value="A">
                            <label class="form-check-label" for="optionA">
                                Apartemen 93 m2
                            </label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="B">
                            <label class="form-check-label" for="optionB">
                                Rumah 1 Lantai
                            </label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="C">
                            <label class="form-check-label" for="optionB">
                                Rumah 2 Lantai
                            </label><br><br>
                        </div>
                        <div class="mb-1">
                            <label for="soalKalkulasi2" class="form-label"><strong>Produk untuk Tembok Luar</strong></label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionA" value="A">
                            <label class="form-check-label" for="optionA">
                                Apartemen 93 m2
                            </label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="B">
                            <label class="form-check-label" for="optionB">
                                Rumah 1 Lantai
                            </label><br>
                            <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="C">
                            <label class="form-check-label" for="optionB">
                                Rumah 2 Lantai
                            </label><br><br>
                        </div>
                </div>
                <li><a id="Interior" class="dropdown-item" href="<?php echo site_url('/pages/housePaint/Interior-Exterior-Metalic'); ?>">House Paint</a></li>
                <h2 class="text-center px-3 gradientFont"><strong>Hasil Kalkulasi</strong></h2>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $("#interior").change(function() {
            var categoryId = $(this).val();
            window.location.href = `<?php echo site_url('/pages/priceChecker/Interior'); ?>`;
        });
    });
</script>
<?= $this->endSection(); ?>