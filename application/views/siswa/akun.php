<a href="<?= base_url(); ?>Home/logout" class="btn btn-link">LOGOUT</a>
<a href="<?= base_url(); ?>Siswa/akun" class="btn btn-link"><?= $user['nama'] ?></a>
<img src="<?= base_url() ?>assets/img/<?= $user['gambar'] ?>" width="2%" class="rounded-circle flex">
</nav>
<div class="container">
    <div class="row mt-3 mb-4">
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>assets/img/<?= $user['gambar'] ?>" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $user['nama'] ?></h5>
                            <p class="card-text"><small class="text-muted"><?= $user['email'] ?></small></p>
                            <a href="<?= base_url() ?>Siswa/ubah" class="btn btn-success">Ubah Password</a>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?= base_url() ?>Siswa" class="btn btn-primary">Home</a>
            <a href="<?= base_url() ?>Siswa/warning" class="btn btn-link">Hapus Akun</a>
        </div>
    </div>
</div>