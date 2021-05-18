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

    $qry ="INSERT INTO tb_akun (id_akun,level, nama, jk, jabatan, golongan, telpon, alamat, email, password) VALUES ('$id_akun', '$level', '$nama','$jk', '$jabatan','$golongan', '$telpon','$alamat','$email','$password')";

    $hasil = mysqli_query($connect, $qry);
    if($hasil){
        header('location:daftarAkun.php');
    } else {
        echo 'Gagal tambah akun';
    }
?>