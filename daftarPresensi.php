<?php include "koneksi.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <title>Daftar Presensi</title>
</head>
<body>
    <nav class="container-fluid navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container">
            <button class="navbar-toggler text-warning" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand me-auto fw-bold text-white" href="dasKaryawan.php">Dashboard Admin</a>
                
                <a href="login.php" class="text-decoration-none">
                    <button class="btn btn-outline-warning d-flex my-3" type="logout">Logout</button>
                </a>
            </div>
        </div>
    </nav>
    
    
    <h4 class="text-center my-4">Daftar Presensi</h4>

    <table class="container table">
        <thead>
            <tr>
            <th scope="col">ID Akun</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Datang</th>
            <th scope="col">Pulang</th>
            <th scope="col">Jumlah Jam Lembur</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>

        <?php
            $qry = mysqli_query($connect, "SELECT * FROM tb_presensi");
            while ($data = mysqli_fetch_assoc($qry)){
        ?>

        <tbody>
                <td><div class="align-center"><?php echo $data['id_akun']; ?></div></td>
                <td><div class="align-center"><?php echo $data['nama']; ?></div></td>
                <td><div class="align-center"><?php echo $data['tanggal']; ?></div></td>
                <td><div class="align-center"><?php echo $data['datang']; ?></div></td>
                <td><div class="align-center"><?php echo $data['pulang']; ?></div></td>
                <td><div class="align-center"><?php echo $data['jumlah_lembur']; ?></div></td>
                <td><span class="align-center">
                    <a href="editPresensi.php?id=<?php echo $data['id_akun']; ?>" class="text-decoration-none">
                        <button class="btn-success">Edit</button></a> | 
                    <a href="hapusPresensi.php?id=<?php echo $data['id_akun']; ?>" class="text-decoration-none">
                        <button class="btn-danger">Delete</button></a>
                </span></td>
        </tbody>

        <?php } ?>
    </table>

    <div class="container text-end">
        <a href="cetakPresensi.php"><button class="btn-warning">Cetak data</button></a>
    </div>



    <!-- Bootsrtap Javascript -->
    <script src="libraries/bootstrap/js/bootstrap.min.js"></script>

    <!-- Popper Javascript -->
    <script src="libraries/popper.min.js"></script>
</body>
</html>