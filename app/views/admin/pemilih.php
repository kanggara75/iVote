<!DOCTYPE html>
<html lang="id">
<!-- Versi 0.1 beta Copyleft © KAnggara75 -->

<head>
    <meta charset="UTF-8">
    <title>
        <?= $data['judul']; ?>
    </title>
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/ini.css">
    <link rel="icon" type="image/png" href="<?= BASEURL?>img/icon.png">
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
                        <div class="navbar-nav">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#formModal">
                                Tambah Data Pemilih
                            </button>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-6">
                <br>
                <h1 align="center">Daftar Pemilih</h1>
                <ul class="list-group">
                    <?php foreach( $data['pemilih'] as $pemilih) : ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= $pemilih['no']; ?>. <?= $pemilih['nama']; ?>
                        <a href="<?= BASEURL; ?>pemilih/detail/<?= $pemilih['no']; ?>"
                            class="badge badge-primary">Detail</a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Tambah Data Pemilih</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>pemilih/tambah" method="post">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="nim">NIM</label>
                            <input type="number" class="form-control" id="nim" name="nim"
                                placeholder="Nomor Induk Mahasiswa">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="number" class="form-control" id="status" name="status"
                                placeholder="0">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>