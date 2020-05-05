<a href="<?= base_url(); ?>Home/logout" class="btn btn-link">LOGOUT</a>
<a href="<?= base_url(); ?>Siswa/akun" class="btn btn-link"><?= $user['nama'] ?></a>
<img src="<?= base_url() ?>assets/img/<?= $user['gambar'] ?>" width="2%" class="rounded-circle flex">
</nav>
<div class="container">
    <div class="row mt-3 mb-4">
        <div class="col-md-6">
            <div class="card">
                <?= $this->session->flashdata('message'); ?>
                <div class="card-header">
                    Kelas Anda:
                </div>
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text">Anda Belum memiliki kelas!</p>
                    <a href="<?= base_url() ?>Siswa/info" class="card-link">Tambah Kelas</a>
                </div>
            </div>
        </div>
    </div>
</div>