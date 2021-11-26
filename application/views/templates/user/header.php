<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= $title ?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url('') ?>assets/css/bootstrap.css" rel="stylesheet" />
    <link type="text/css" href="<?= base_url('') ?>assets/css/style.css" rel="stylesheet" />
    <link type="text/css" href="<?= base_url('') ?>assets/css/layout.css" rel="stylesheet" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;700&display=swap" rel="stylesheet">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <!-- Custom styles for this page -->
    <link href="<?= base_url() ?>assets/vendor/admin/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>
    <!-- topbar -->
    <div class="topbar border d-none d-sm-none d-md-block">
        <div class="container ">
            <div class="row justify-content-between">
                <p>Nomor Telepon: 082232114507 | Email: bawangBagor@gmail.com</p>
                <?php
                if ($this->session->userdata('username') != null) {
                ?>
                    <p>user : <?= $this->session->userdata('username') ?></p>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <!-- akhir topbar -->

    <!-- Header -->
    <div class="container" id="header">
        <a href="#" class=>
            <!-- <img src="/baseUrl/assets/img/logo_kabmalang.png" alt="" /> -->
        </a>
        <a id="header-text" href="">Aplikasi Perkiraan Harga Bawang Merah Kecamatan Bagor</a>
    </div>
    <!-- akhir header -->

    <!-- header -->
    <header>
        <!-- <marquee behavior="scroll" direction="right">Selamat datang di Badan Kesatuan Bangsa dan Politik Kabupaten Malang</marquee> -->

        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-success mb-3 mt-3">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-4">
                    <li class="nav-item">
                        <a href="<?= base_url('user/visi') ?>" class="nav-link">Beranda</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?= base_url('user/puskomin') ?>" class="nav-link">Puskomin</a>
                    </li>
                    
                    
                    <!-- <li class="nav-item dropdown">
                        <a id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" class="nav-link dropdown-toggle">Layanan Penelitian
                        </a>
                        <div aria-labelledby="navbarDropdownMenuLink" class="dropdown-menu">
                            <a href="baseulr()layanan/layanan_penelitian" class="dropdown-item">
                                <font color="black">Ajukan Surat
                            </a></font>
                            <a href="bs()layanan/lihat_status" class="dropdown-item">
                                <font color="black">Lihat Status Surat
                            </a></font>
                        </div>
                    </li> -->
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ml-auto">
                    <?php
                    if ($this->session->userdata('username')) { ?>
                        <a href="<?= base_url('main/logout') ?>" class="nav-item nav-link">Logout</a>
                    <?php } ?>
                </div>
            </div>
        </nav>
    </header>
    <!-- akhir header -->
    <div class="wrapper">