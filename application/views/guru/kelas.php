<a href="<?= base_url(); ?>Home/logout" class="btn btn-link">LOGOUT</a>
<a href="<?= base_url(); ?>Guru/akun" class="btn btn-link"><?= $user['nama'] ?></a>
<img src="<?= base_url() ?>assets/img/<?= $user['gambar'] ?>" width="2%" class="rounded-circle flex">
</nav>
<!-- END NAVBAR -->
<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-md-6">
            <?= $this->session->flashdata('message'); ?>
            <h3>Kelas Matematika </h3>
            <h3>Pilih Kelas Yang Anda Ajar : </h3>
            <ul class="list-group">
                <?php foreach ($kelas as $kls) : ?>
                    <li class="list-group-item"><?= $kls['nama']; ?><a href="<?= base_url() ?>Guru/pilih/<?= $kls['kelas_id'] ?>" class="badge badge-primary mt-2 mb-2 float-right">pilih Kelas</a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
</div>