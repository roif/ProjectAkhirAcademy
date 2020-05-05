<a href="<?= base_url(); ?>Home/logout" class="btn btn-link">LOGOUT</a>
<a href="<?= base_url(); ?>Guru/akun" class="btn btn-link"><?= $user['nama'] ?></a>
<img src="<?= base_url() ?>assets/img/<?= $user['gambar'] ?>" width="2%" class="rounded-circle flex">
</nav>
<!-- NAVBAR ENDS -->
<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-md-6">
            <?= $this->session->flashdata('message'); ?>
            <h3>Kelas Anda : <?= $kelas['nama'] ?></h3>
            <a href="<?= base_url() ?>Guru/ubah/<?= $kelas['kelas_id'] ?>" class="btn btn-primary">Ubah Kelas</a>
            <h3>Daftar Siswa Anda : </h3>
            <ul class="list-group">
                <?php foreach ($siswa as $sw) : ?>
                    <li class="list-group-item"><?= $sw['nama']; ?></li>
                <?php endforeach; ?>
            </ul>
            <a href="<?= base_url("$link"); ?>" class="btn btn-primary mt-2 mb-2 float-left">Home</a>
        </div>
    </div>
</div>
</div>