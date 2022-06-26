<div class="background">
    <div class="container mt-3">
        <div class="row">
            <div class="col-lg-6">
                <?php Flasher::flash(); ?>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-6">
                <button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
                    Tambah Data Peminjam
                </button>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-lg-6">
                <form action="<?= BASEURL; ?>/peminjaman/cari" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="cari peminjam.." name="keyword" id="keyword" autocomplete="off">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <h3 class=" text-light">Daftar Peminjam</h3>
        <hr>
        <ul class="list-group">
            <?php foreach ($data['pmj'] as $pmj) : ?>
                <li class="list-group-item">
                    <?= $pmj['nama']; ?>
                    <a href="<?= BASEURL; ?>/peminjaman/hapus/<?= $pmj['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('Anda yakin?');">hapus</a>

                    <a href=" <?= BASEURL; ?>/peminjaman/ubah/<?= $pmj['id']; ?>" class="badge badge-success float-right tampilModalUbah ml-1" data-toggle="modal" data-target="#formModal" data-id="<?= $pmj['id']; ?>">ubah</a>

                    <a href=" <?= BASEURL; ?>/peminjaman/detail/<?= $pmj['id']; ?>" class="badge badge-primary float-right ml-1">detail</a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Tambah Data Peminjam</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>/peminjaman/tambah" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="noKTP">No KTP</label>
                        <input type="number" class="form-control" id="noKTP" name="noKTP">
                    </div>
                    <div class="form-group">
                        <label for="jenisKendaraan">Jenis Kendaraan</label>
                        <select class="form-control" id="jenisKendaraan" name="jenisKendaraan">
                            <option value="-">-</option>
                            <option value="Matic">Matic</option>
                            <option value="Manual">Manual</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jenisKelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenisKelamin" name="jenisKelamin">
                            <option value="-">-</option>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>