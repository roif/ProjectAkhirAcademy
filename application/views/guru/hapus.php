<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col-md-6 text-danger">
                <h3>Apakah Anda yakin ingin menghapus akun Anda ?</h3>
                <h3>Semua data akan hilang</h3>
                <a href="<?= base_url() ?>Guru/" class="btn btn-danger"> Kembali </a>
                <a href="<?= base_url() ?>Guru/hapusAkun" class="btn btn-outline-danger"> Lanjutkan </a>
            </div>
        </div>
    </div>

</body>

</html>