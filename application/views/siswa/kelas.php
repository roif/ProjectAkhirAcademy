<a href="<?= base_url(); ?>Home/logout" class="btn btn-link">LOGOUT</a>
<a href="<?= base_url(); ?>Siswa/akun" class="btn btn-link"><?= $user['nama'] ?></a>
</nav>
<!-- END NAVBAR -->
<div class="container">
    <div class="row mt-3 mb-4">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Detail Kelas
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $kelas['nama'] ?></h5>
                    <p class="card-text"><?= $kelas['info'] ?></p>
                    <a href="<?= base_url() ?>Siswa/daftar/<?= $kelas['kelas_id'] ?>" class="btn btn-primary">Daftar Kelas</a>
                    <a href="<?= base_url() ?>Siswa/info" class="btn btn-link">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>