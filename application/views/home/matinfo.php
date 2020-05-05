<a href="<?= base_url(); ?>Home/login" class="btn btn-link">LOGIN</a>
<a href="<?= base_url(); ?>Home/register" class="btn btn-link">SIGN UP</a>
</nav>
<!-- END NAVBAR -->
<div class="container-fluid">
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Kelas Matematika </h3>
            <h3>Daftar Kelas : </h3>
            <ul class="list-group">
                <?php foreach ($kelas as $kls) : ?>
                    <li class="list-group-item"><?= $kls['nama']; ?><a href="<?= base_url() ?>Home/info/<?= $kls['kelas_id'] ?>" class="badge badge-info mt-2 mb-2 float-right">info Kelas</a></li>
                <?php endforeach; ?>
            </ul>
            <a href="<?= base_url(); ?>" class="btn btn-primary mt-2 mb-2 float-left">Home</a>
        </div>
    </div>
</div>
</div>
<footer class="page-footer copyright badge-light rounded-bottom py-3">
    <p align="Center">Copyright &copy; 2020 TugasPemweb</p>
    <p align="Center">
        185150601111017 - M.Ro'if <br>
        185150601111007 - Agnes Astriani<br>
        185150600111002 - Muhammad Rifqy Ramadana<br>
        185150600111004 - Dimas Ferry Kurniawan<br>
    </p>
</footer>
<!-- END FOOTER -->
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="/assets/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>
</div>

</html>