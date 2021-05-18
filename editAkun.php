<?php
    include "koneksi.php";

    $id_akun = $_REQUEST['id_akun'];
    $level = $_REQUEST['level'];
    $nama = $_REQUEST['nama'];
    $jk = $_REQUEST['jk'];
    $jabatan = $_REQUEST['jabatan'];
    $golongan = $_REQUEST['golongan'];
    $telpon = $_REQUEST['telpon'];
    $alamat = $_REQUEST['alamat'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $qry = "UPDATE tb_akun SET 
    id_akun = '$id_akun',
    level = '$level', 
    nama = '$nama', 
    jk = '$jk', 
    jabatan = '$jabatan', 
    golongan = '$golongan',
    telpon = '$telpon',
    alamat = '$alamat', 
    email = '$email', 
    password = '$password' 
    WHERE id_akun = '$id_akun'";

    $hasil = mysqli_query($connect, $qry);
    if($hasil){
        header('location:daftarAkun.php');
    } else {
        echo 'Gagal tambah akun';
    }
?>