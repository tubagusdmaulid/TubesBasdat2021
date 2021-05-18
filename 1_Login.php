<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Login</title>
</head>
<body class="container-fluid bg-dark">
    <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "Login gagal! email dan password salah!";
            }
            else if($_GET['pesan'] == "logout"){
                echo "Anda telah berhasil logout";
            }
            else if($_GET['pesan'] == "belum_login"){
                echo "Anda harus login untuk mengakses dashboard";
            }
        }
    ?>

<div class="container form-signin mx-auto" style="max-width: 300px;">
    <form action="login_cek.php" method="POST" class="text-center mt-5 border-1 border-dark" onsubmit="return validasi()">
        <h1 class="h3 mb-4 fw-normal" style="color: white;">Login</h1>
        
        <div class="form-floating mb-2">
            <input type="email" name="email" id="email" class="form-control" placeholder="name@example.com">                                                              ">
            <label for="floatingEmail">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="text-end">
            <label class="mb-3 mt-1 text-end">
                <a href="#" class="text-decoration-none" style="color: rgb(213, 213, 224); " >Lupa Password</a>
            </label>
        </div>
        
        <button class="w-100 btn btn-lg btn-warning  rounded-pill" type="submit" name="login">Sign in</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2021 - Tubes Basdat </p>
    </form>
</div>
<script type="text/javascript" src="login.js"></script>





    <!-- Bootsrtap Javascript -->
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>

    <!-- Popper Javascript -->
    <script src="libraries/popper.min.js"></script>
</body>
</html>
