<!DOCTYPE html>
<html lang="id">
<!-- Versi 0.1 beta Copyleft © KAnggara75 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?= $data['judul']; ?>
    </title>
    <link rel="stylesheet" href="<?= BASEURL; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>css/custom.css">
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

<body background="<?= BASEURL; ?>img/bgadmin.jpg">
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <form action="login.php" method="POST">
                    <br /><br />
                    <br><br><br><br>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
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



                                    <div align="center"><input type="Submit" name="Login" value="Login"
                                            class="btn btn-success">

                                        <div align="center">


                                            <br><br><b>Belum Daftar? <a href="daftar.php">Klik Disini</a></p>
                                        </div>


                        </form>
                    </div>

                </div>
                </from>
            </div>


        </div>
    </div>


    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>

</html>
<!--  -->