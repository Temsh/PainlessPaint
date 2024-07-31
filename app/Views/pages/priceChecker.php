<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section style="margin-top:75px;">
    <div class="container">
        <div class="col d-flex justify-content-center">
            <div class="card col-md-10 py-3">
                <div class="card-body ">
                    <div class="col d-flex justify-content-center">
                        <div class="card priceChecker gradientBg px-auto">
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
                    <div class="px-5">
                        <form action="<?php echo site_url('form/submitForm'); ?>" method="post">
                            <div class="mb-2">
                                <label for="soalKalkulasi1" class="form-label"><strong>Tipe Bangunan</strong></label><br>
                                <input class="form-check-input" type="radio" name="buildingType" id="optionA" value="A">
                                <label class="form-check-label" for="optionA">
                                    Apartemen 93 m2
                                </label><br>
                                <input class="form-check-input" type="radio" name="buildingType" id="optionB" value="B">
                                <label class="form-check-label" for="optionB">
                                    Rumah 1 Lantai
                                </label><br>
                                <input class="form-check-input" type="radio" name="buildingType" id="optionC" value="C">
                                <label class="form-check-label" for="optionC">
                                    Rumah 2 Lantai
                                </label>
                            </div>
                            <div class="mb-2">
                                <label for="soalKalkulasi2" class="form-label"><strong>Produk untuk Kamar Tidur</strong></label><br>
                                <?php foreach ($inCat as $iC) : ?>
                                    <input class="form-check-input" type="radio" name="soalKalkulasi2" id=soalKalkulasi2" value="<?= $iC['harga']; ?>">
                                    <label class="form-check-label" for="soalKalkulasi2">
                                        </strong><?= $iC['nama']; ?>
                                    </label><br>
                                <?php endforeach; ?>
                            </div>
                            <div class="mb-2">
                                <label for="soalKalkulasi3" class="form-label"><strong>Produk untuk Ruang Tamu</strong></label><br>
                                <?php foreach ($inCat as $iC) : ?>
                                    <input class="form-check-input" type="radio" name="soalKalkulasi3" id="soalKalkulasi3" value="<?= $iC['harga']; ?>">
                                    <label class="form-check-label" for="soalKalkulasi3">
                                        </strong><?= $iC['nama']; ?>
                                    </label><br>
                                <?php endforeach; ?>
                            </div>
                            <div class="mb-2">
                                <label for="soalKalkulasi4" class="form-label"><strong>Produk untuk Plafon</strong></label><br>
                                <?php foreach ($inCat as $iC) : ?>
                                    <input class="form-check-input" type="radio" name="soalKalkulasi4" id="soalKalkulasi4" value="<?= $iC['harga']; ?>">
                                    <label class="form-check-label" for="soalKalkulasi4">
                                        </strong><?= $iC['nama']; ?>
                                    </label><br>
                                <?php endforeach; ?>
                            </div>
                            <div class="mb-2">
                                <label for="soalKalkulasi5" class="form-label"><strong>Produk untuk Kayu & Besi</strong></label><br>
                                <?php foreach ($metalCat as $mC) : ?>
                                    <input class="form-check-input" type="radio" name="soalKalkulasi5" id="soalKalkulasi5" value="<?= $mC['harga']; ?>">
                                    <label class="form-check-label" for="soalKalkulasi5">
                                        </strong><?= $mC['nama']; ?>
                                    </label><br>
                                <?php endforeach; ?>
                            </div>
                            <div class="mb-5">
                                <label for="soalKalkulasi6" class="form-label"><strong>Produk untuk Tembok Luar</strong></label><br>
                                <?php foreach ($eksCat as $eC) : ?>
                                    <input class="form-check-input" type="radio" name="soalKalkulasi6" id="soalKalkulasi6" value="<?= $eC['harga']; ?>">
                                    <label class="form-check-label" for="soalKalkulasi6">
                                        </strong><?= $eC['nama']; ?>
                                    </label><br>
                                <?php endforeach; ?>
                            </div>
                            <button type="button" id="calculateButton" class="btn btn-info">Kalkulasi</button>
                        </form>
                    </div>
                    <h2 class="text-center px-3 py-5 gradientFont"><strong>Hasil Kalkulasi</strong></h2>
                    <div id="resultContainer"></div>
                </div>
            </div>
        </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const calculateButton = document.getElementById("calculateButton");
        const resultContainer = document.getElementById("resultContainer");

        calculateButton.addEventListener("click", function() {
            const buildingTypeValue = document.querySelector('input[name="buildingType"]:checked').value;
            const productKamarTidur = parseFloat(document.getElementById("soalKalkulasi2").value);
            const productRuangTamu = parseFloat(document.getElementById("soalKalkulasi3").value);

            let resultMessage = "<p>Hasil Kalkulasi:</p>";

            if (buildingTypeValue === "A") {
                const resultKamarTidur = productKamarTidur * 3;
                const resultRuangTamu = productRuangTamu * 2;
                const totalResult = resultKamarTidur + resultRuangTamu;
                resultMessage += `<p>Produk untuk Kamar Tidur (x3): ${resultKamarTidur}</p>`;
                resultMessage += `<p>Produk untuk Ruang Tamu (x2): ${resultRuangTamu}</p>`;
                resultMessage += `<p>Total: ${totalResult}</p>`;
            } else if (buildingTypeValue === "B") {
                const resultKamarTidur = productKamarTidur * 8;
                const resultRuangTamu = productRuangTamu * 9;
                const totalResult = resultKamarTidur + resultRuangTamu;
                resultMessage += `<p>Produk untuk Kamar Tidur (x8): ${resultKamarTidur}</p>`;
                resultMessage += `<p>Produk untuk Ruang Tamu (x9): ${resultRuangTamu}</p>`;
                resultMessage += `<p>Total: ${totalResult}</p>`;
            }

            resultContainer.innerHTML = resultMessage;
        });
    });
</script>
<?= $this->endSection(); ?>