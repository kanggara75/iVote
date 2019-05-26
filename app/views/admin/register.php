<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="KAnggara75">
    <title>
        <?= $data['judul']; ?>
    </title>
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/w3.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/cd.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/ini.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/sb-admin-2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= BASEURL; ?>css/Chart.css">
    <link rel="icon" type="image/png" href="<?= BASEURL?>img/icon.png">
    <link href="<?= BASEURL?>css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
</head>

<body background="<?= BASEURL; ?>img/bgadmin.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Pendaftarkan Nama Pasangan Calon</h1>
                                    </div>
                                    <form class="user" action="../" method="post" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="ketua"
                                                placeholder="Nama Ketua" title="Nama Ketua">
                                        </div>

                                        <div class="form-group">
                                            <input type="textarea" class="form-control form-control-user" id="wakil"
                                                placeholder="Nama Wakil">
                                        </div>

                                        <div class="form-group">
                                            <input type="textarea" class="form-control form-control-user" id="visi"
                                                placeholder="Visi">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="misi"
                                                placeholder="Misi">
                                        </div>
                                        <div class="form-group">
                                            <input type="file" class="form-control form-control-user" id="file"
                                                placeholder="File" name="file">
                                        </div>

                                        <button type="submit" name="upload" value="Simpan Data"
                                            class="btn btn-primary btn-user btn-block text-center">Simpan Data</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>