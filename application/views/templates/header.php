<!doctype html>
<html lang="en">

<head>
    <meta name="author" content="">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>vendors/sbadmin2/css/sb-admin-2.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

    <!-- ICON -->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/img/Logo RC.png">


    <title><?= $judul ?></title>
</head>

<body>
    <div class="container-container-fluid">
        <!-- NAVBAR START -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand float-right"><img src="<?= base_url(); ?>assets/img/khanacademy.png" width="180" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Kelas
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url("$link") ?>/info">Daftar Kelas</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?= base_url("$link") ?>/info/1">Matematika</a>
                            <a class="dropdown-item" href="<?= base_url("$link") ?>/info/2">Fisika</a>
                            <a class="dropdown-item" href="<?= base_url("$link") ?>/info/3">Kimia</a>
                            <a class="dropdown-item" href="<?= base_url("$link") ?>/info/4">Biologi</a>
                        </div>
                    </li>
                </ul>
            </div>