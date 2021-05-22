<?php
session_start();
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
<head>  
    <style></style>     
    <!-- META SECTION -->
    <title>Login SIAKAD SMKN 1 KOPANG</title>            
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="img/smk.png" type="image/png">
    <style>
    </style>
    <!-- END META SECTION -->

    <!-- CSS INCLUDE -->        
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>

    <!-- EOF CSS INCLUDE -->                                    
</head>
<body>

    <?php
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $password=md5($_POST['password']);
            //mengambil data dari tabel user
        $sql="select * from user where username='$username'";
        $query=mysqli_query($koneksi,$sql);
        $data=mysqli_fetch_array($query);
        if($password==$data['password']){
            $_SESSION['id_user']=$data['id_user'];
            $_SESSION['nama']=$data['nama'];
            $_SESSION['level']=$data['level'];
            header("location:dashboard.php");

        }else{ 
            echo "  <div class='alert alert-danger' role='alert'>
            <button type='button' class='close' data-dismiss='alert'><span aria-hidden='true'>&times;</span><span class='sr-only'>Close</span></button>
            <strong>Perhatian!!</strong> Password atau Username Anda Salah
            </div>";
        }
    }
    ?>

    <div class="login-container">
        <div class="login-box animated fadeInDown">
            <div class="login-body">
                <div class="login-title" align="center"><strong>SMKN 1 KOPANG</strong></div>
                <div class="login-title" align="center"><strong>Selamat Datang</strong>, Silahkan Login</div>
                <form action="" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="username" class="form-control" placeholder="Username"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="password" class="form-control" placeholder="Password"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <button type="submit" name="login" class="btn btn-info btn-block">Log In</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<!-- THIS PAGE PLUGINS -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
<!-- END PLUGINS -->
</html>






