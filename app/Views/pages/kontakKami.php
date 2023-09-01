<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section style="margin-top:75px;" class="pt-3;">
    <div class="container py-5 px-5" style="background-color: white;">
        <div class="py-3 text-center">
            <h2><strong>Kontak Kami</strong></h2>
        </div>
        <div class="card pt-3 px-3">
            <div class="card-body">
                <form action="/pages/addPesan" method="post">
                    <?= csrf_field(); ?> <!--Mengamankan form agar hanya bisa diakses dari halaman ini-->
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Sesuai KTP" id="nama" name="nama" autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="telepon" class="form-label">Nomor Telepon</label>
                        <input type="number" class="form-control" placeholder="Masukkan Nomor Telepon" id="telepon" name="telepon">
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea type="text" class="form-control" placeholder="Masukkan Pesan" id="pesan" name="pesan" maxlength="1000"></textarea>
                    </div>
                    <div id="charCount" class="mb-3 text-end"> / 1000</div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const textarea = document.getElementById("pesan");
        const charCountElement = document.getElementById("charCount");
        // Initial character count update
        updateCharCount();

        // Add input event listener to the textarea
        textarea.addEventListener("input", updateCharCount);

        // Function to update the character count
        function updateCharCount() {
            const currentLength = textarea.value.length;
            const charsLeft = currentLength;

            charCountElement.textContent = `${charsLeft} / 500`;

            if (currentLength >= 450) {
                charCountElement.classList.add("red");
            } else {
                charCountElement.classList.remove("red");
            }
        }

    });
</script>
<?= $this->endSection(); ?>