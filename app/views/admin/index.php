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
    <title>
        <?= $data['judul']; ?>
    </title>
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.css">
    <!-- <link rel="stylesheet" href="<?= BASEURL; ?>css/custom.css"> -->
    <link rel="stylesheet" href="<?= BASEURL; ?>css/font-awesome.css">
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
                                        <input class="form-control" name="username" placeholder="Username"
                                            required="" />
                                        <br>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password"
                                                placeholder="Password" required="" />
                                            <br>
                                            <div align="center"><input type="Submit" name="Login" value="Login"
                                                    class="btn btn-success">
                                                <div align="center">
                                                    <br><br><b>Belum Daftar? <a href="daftar.php">Klik Disini</a></p>
                                                </div>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                <!-- </td>
            </tr>
        </table> -->
    </div>
    <script src="<?= BASEURL?>js/jquery-1.10.2.js"></script>
    <script src="<?= BASEURL?>js/bootstrap.min.js"></script>
    <script src="<?= BASEURL?>js/jquery.metisMenu.js"></script>
    <script src="<?= BASEURL?>js/custom.js"></script>
</body>

</html>