<div class="background">
    <div class="container mt-5">
        <div class="card mb-3" style="background-color:#1215">
            <div class="card-body">
                <h5 class="card-title text-light"><?= $data['pmj']['nama']; ?></h5>
                <h6 class="card-subtitle mb-2 text-light"><?= $data['pmj']['noKTP']; ?></h6>
                <p class="card-text text-light"><?= $data['pmj']['jenisKendaraan']; ?></p>
                <p class="card-link text-light"><?= $data['pmj']['jenisKelamin']; ?></p>
                <a href="<?= BASEURL; ?>/peminjaman" class="card-link">Kembali</a>
            </div>
        </div>
    </div>
</div>