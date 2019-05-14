<!DOCTYPE html>
<html lang="id">
<!-- Versi 0.1 beta Copyleft © KAnggara75 -->

<head>
    <meta charset="UTF-8">
    <title>
        <?= $data['judul']; ?>
    </title>
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/w3.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/cd.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/ini.css">
    <link rel="icon" type="image/png" href="<?= BASEURL?>img/icon.png">
    <style>
        p {
            text-align: center;
            font-size: 60px;
            margin-top: 0px;
        }
    </style>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #007EA7;">
            <div class="container">
                <a class="navbar-brand" href="<?= BASEURL?>">
                    <img src="<?= BASEURL?>/img/icon.png" alt="KAnggara75" width="50" class="rounded-circle shadow"></a>
                <a class="navbar-brand" href="<?= BASEURL?>">
                    <h1>iVote</h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                </div>
                <div class="header-right navbar-nav">
                    <ul class="nav list-unstyled">
                        <li><a class="active nav-item nav-link active" href="<?= BASEURL?>">
                                <h2>Home</h2>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#berita">
                                Berita
                            </a>
                        </li>
                        <li>
                            <a href="#jadwal">
                                Jadwal Pilpres
                            </a>
                        </li>

                        <div class="navbar-nav">
                            <a class="nav-item nav-link" href="<?= BASEURL?>hasil">
                                <h2>Hasil</h2>
                            </a>
                            <a class="nav-item nav-link" href="<?= BASEURL?>about">
                                <h2>Tentang</h2>
                            </a>
                        </div>
                    </ul>

                </div>
            </div>
    </div>
    </nav>
    </div>