<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
// $level = $_REQUEST['level'];AND level = '$level'

// menyeleksi data user dengan email dan password yang sesuai
$login = mysqli_query($connect, "SELECT * FROM tb_akun WHERE email = '$email' AND password = '$password' ");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password ditemukan pada database
if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if($data['level'] == "admin"){

        // buat session login dan email
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "admin";
        // alihkan ke halaman dashboard admin
        header("location:dasAdmin.php");

    // cek jika user login sebagai karyawan
    } else if($data['level'] == "karyawan"){

         // buat session login dan email
        $_SESSION['email'] = $email;
        $_SESSION['level'] = "karyawan";
         // alihkan ke halaman dashboard karyawan
        header("location:dasKaryawan.php");
    
    } else {
        // alihkan ke halaman login kembali
        header("location:login.php?pesan=gagal");
    }


} else {
    // alihkan ke halaman login kembali
    header("location:login.php?pesan=gagal");
}

?>
