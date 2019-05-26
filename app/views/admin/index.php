<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>

<!DOCTYPE html>
<html lang="id">
<!-- Versi 0.1 beta Copyleft © KAnggara75 -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        <?= $data['judul']; ?>
    </title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/font-awesome.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/sb-admin-2.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/sb-admin-2.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="icon" type="image/png" href="<?= BASEURL?>img/icon.png">
    <style>
        p {
            text-align: center;
            font-size: 60px;
            margin-top: 0px;
        }
    </style>
</head>

<body background="<?= BASEURL; ?>img/bgadmin.jpg" align="center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div style="margin: 0 auto; ">
                                        <center><img width="80px" alt="iVote Pemrograman Web 2019"
                                                src="<?= BASEURL; ?>/img/icon.png"
                                                style="margin: 0 auto;vertical-align:middle;">
                                        </center>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h5 text-gray-900 mb-4">Assalamualaikum, Silahkan Login!</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Username" title="Masukan Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <a href="root" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="login-footer">
                                        <div class="pull-left">
                                        <span class="copyleft">&copy;</span> 2019 Voting System </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center ">
        <div class="col-md-12">
            <form action="login.php" method="GET">
                <br><br><br><br>
        </div>
    </div>
    <!-- <table border=5 width=400>
            <tr>
                <td> -->
    <div class="col-lg-7">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h2 align="center"><strong>iVote</strong></h2>
                <h4 align="center"><b>Silahkan Log In</b></h4>
            </div>
            <div class="panel-body">
                <form role="form" method="POST"><br>
                    <div class="form-group">
                        <label>Username</label>
                        <input class="form-control" name="username" placeholder="Username" required="" />
                        <br>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                required="" />
                            <br>
                            <div align="center"><input type="Submit" name="Login" value="Login" class="btn btn-success">
                                <div align="center">
                                    <br><br><b>Belum Daftar? <a href="daftar.php">Klik Disini</a></p>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="<?= BASEURL?>js/jquery-1.10.2.js"></script>
    <script src="<?= BASEURL?>js/bootstrap.min.js"></script>
    <script src="<?= BASEURL?>js/jquery.metisMenu.js"></script>
    <script src="<?= BASEURL?>js/custom.js"></script>
    <script src="<?= BASEURL?>js/jquery.min.js"></script>
    <script src="<?= BASEURL?>js/bootstrap.bundle.min.js"></script>
    <script src="<?= BASEURL?>js/jquery.easing.min.js"></script>
    <script src="<?= BASEURL?>js/sb-admin-2.min.js"></script>
</body>

</html>