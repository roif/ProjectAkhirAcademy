<a href="<?= base_url(); ?>Home/logout" class="btn btn-link">LOGOUT</a>
<a href="<?= base_url(); ?>Siswa/akun" class="btn btn-link"><?= $user['nama'] ?></a>
</nav>
<!-- END NAVBAR -->
<div class="container-fluid">

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Kelas Matematika </h3>
            <h3>Daftar Kelas : </h3>
            <ul class="list-group">
                <?php foreach ($kelas as $kls) : ?>
                    <li class="list-group-item"><?= $kls['nama']; ?><a href="<?= base_url() ?>Siswa/info/<?= $kls['kelas_id'] ?>" class="badge badge-info mt-2 mb-2 float-right">info Kelas</a></li>
                <?php endforeach; ?>
            </ul>
            <a href="<?= base_url(); ?>Siswa/" class="btn btn-primary mt-2 mb-2 float-left">Home</a>
        </div>
    </div>
</div>
</div>