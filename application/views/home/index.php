<a href="<?= base_url(); ?>Home/login" class="btn btn-link">LOGIN</a>
<a href="<?= base_url(); ?>Home/register/" class="btn btn-link">SIGN UP</a>
</nav>
<!-- END NAVBAR -->

<!-- HEADER -->
<section class="header">
    <div class="container-fluid text-center">
        <?= $this->session->flashdata('message'); ?>
        <div class="row">
            <div class="col">
                <img src="<?= base_url(); ?>/assets/img/khan-academy-repro.jpg" alt="khan-academy-repro" width="650">
            </div>
            <div class="col mt-4">
                <h1 class="text-left">For every student, every classroom,Real results.</h1><br>
                <p>
                    <h4 class="text-left">We’re a nonprofit with the mission to provide a free, world-class education
                        for anyone, anywhere</h4><br>
                </p>
                <a href="<?= base_url(); ?>Home/register/Siswa" class="btn btn-primary ">Siswa</a>
                <a href="<?= base_url(); ?>Home/register/Guru" class="btn btn-primary">Guru</a>
            </div>
        </div>
    </div>
</section>
<!-- END HEADER -->

<!-- CONTENT WHY -->
<section class="pilar">
    <div class="container-fluid">
        <div class="row">

            <h2 class="col-sm-12 text-center"><br>Why Khan Academy works</h2>
            <div class="col-md-4 col md-6 text-center">
                <img src="<?= base_url(); ?>assets/img/personalized.png" alt="" width="200">
                <h5>Personalized learning</h5>
                <h6>Students practice at their own pace, first filling in gaps in their understanding and then
                    accelerating their learning.</h6>
            </div>
            <div class="col-md-4 col md-6 text-center">
                <img src="<?= base_url(); ?>assets/img/trusted.png" alt="" width="200">
                <h5>Trusted content</h5>
                <h6>Created by experts, Khan Academy’s library of trusted practice and lessons covers math,
                    science,
                    and more. Always free for learners and teachers.</h6>
            </div>
            <div class="col-md-4 col md-6 text-center">
                <img src="<?= base_url(); ?>assets/img/empowered.png" alt="" width="200">
                <h5>Tools to empower teachers</h5>
                <h6>With Khan Academy, teachers can identify gaps in their students’ understanding, tailor
                    instruction, and meet the needs of every student.</h6>
            </div>
        </div>
    </div>
</section>
<!-- END CONTENT WHY -->
<!-- FOOTER -->
<footer class="page-footer badge-light rounded-bottom py-3">
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