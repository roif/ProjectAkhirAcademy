<a href="<?= base_url(); ?>Home/logout" class="btn btn-link">LOGOUT</a>
<a href="<?= base_url(); ?>Guru/akun" class="btn btn-link"><?= $user['nama'] ?></a>
<img src="<?= base_url() ?>assets/img/<?= $user['gambar'] ?>" width="2%" class="rounded-circle flex">
</nav>
<div class="container">
    <div class="row mt-3 mb-4">
        <div class="col-md-6">
            <?= $this->session->flashdata('message'); ?>
            <h1>Ubah Password</h1>
            <form action="<?= base_url() ?>Guru/ubahpassword" method="POST">
                <div class="form-group">
                    <label for="pass_awal">Password Awal</label>
                    <input type="password" class="form-control" id="pass_awal" name="pass_awal">
                    <?= form_error('pass_awal', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password Baru</label>
                    <input type="password" class="form-control" id="pass_baru1" name="pass_baru1">
                    <?= form_error('pass_baru1', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Ulang Password</label>
                    <input type="password" class="form-control" id="pass_baru2" name="pass_baru2">
                    <?= form_error('pass_baru2', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Ubah Password">
                    <a href="<?= base_url() ?>Guru/akun" class="btn btn-link">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>