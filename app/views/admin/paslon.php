<!DOCTYPE html>
<html lang="id">
<!-- Versi 0.1 beta Copyleft © KAnggara75 -->

<head>
    <meta charset="UTF-8">
    <title>
        <?= $data['judul']; ?>
    </title>
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/ini.css">
    <link rel="icon" type="image/png" href="<?= BASEURL ?>img/icon.png">
</head>

<body bgcolor="blue">
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #007EA7;">
            <div class="container">
                <a class="navbar-brand" href="<?= BASEURL ?>">
                    <img src="<?= BASEURL ?>/img/icon.png" alt="KAnggara75" width="50"
                        class="rounded-circle shadow"></a>
                <a class="navbar-brand" href="<?= BASEURL ?>">
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
                            <button type="button" class="btn btn-warning tombolTambahData" data-toggle="modal"
                                data-target="#formModal">
                                Tambah Data paslon
                            </button>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="justify-content-center">
            <div class="col-lg-4">
                <h6 align="center"><?php Notifer::notif();?></h6>
            </div>

        <div>
            <div>
                <br>
                <h1 align="center">Daftar paslon</h1>
                <table align="center" cellpadding="30%" border=1>
                    <tr align="center" bgcolor="lightblue">
                        <td>
                            <h2>No.</h2>
                        </td>
                        <td>
                            <h2>Foto Paslon</h2>
                        </td>
                        <td>
                            <h2>Nama Ketua</h2>
                        </td>
                        <td>
                            <h2>Nama Wakil</h2>
                        </td>
                        <td>
                            <h2>Perolehan Suara</h2>
                        </td>
                        <td>
                            <h2>Aksi</h2>
                        </td>
                    </tr>
                    <?php foreach( $data['paslon'] as $paslon) : ?>
                    <tr align="center">
                        <td>
                            <h1><?= $paslon['no']; ?></h1>
                        </td>
                        <td>
                            <img src="<?= BASEURL?><?= $paslon['foto']; ?>" alt="KAnggara75" width="200" class=" shadow"value="<?= $paslon['no']; ?>">
                        </td>
                        <td>
                        <h1><?= $paslon['ketua']; ?>
                        </h1></td>
                        <td><h1><?= $paslon['wakil']; ?>
                            </h1></td>
                        <td><h1><?= $paslon['hasil']; ?> Suara
                            </h1>
                        </td>
                        <td>
                            <a href="<?= BASEURL; ?>admin/hapus/<?= $paslon['no']; ?>"
                                class="badge float-right badge-danger ml-1"
                                onclick="return confirm('Data paslon Akan di hapus?');"><h3>Hapus</h3></a>
                            <a href="<?= BASEURL; ?>admin/paslon"
                                class="badge badge-primary float-right ml-1" onclick="return alert('Maaf Menu Ini Dalam Tahap Pengembangan?');"><h3>Detail</h3></a>
                        </td>
                        <?php endforeach; ?>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="judulModal">Tambah Data paslon</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>admin/tambah" method="post">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="nama">Nama Ketua</label>
                            <input type="text" class="form-control" id="ketua" name="ketua"
                                placeholder="Nama Lengkap Ketua">
                        </div>
                        <div class="form-group">
                            <label for="nim">Nama Wakil</label>
                            <input type="text" class="form-control" id="wakil" name="wakil"
                                placeholder="Nama Lengkap Wakil">
                        </div>
                        <div class="form-group">
                            <label for="nim"></label>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </div>