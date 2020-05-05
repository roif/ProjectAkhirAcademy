<a href="<?= base_url(); ?>Home/login" class="btn btn-link">LOGIN</a>
<a href="<?= base_url(); ?>Home/register" class="btn btn-link">SIGN UP</a>
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
                    <a href="<?= base_url() ?>Home/info" class="btn btn-primary">Daftar Kelas</a>
                </div>
            </div>
        </div>
    </div>
</div>