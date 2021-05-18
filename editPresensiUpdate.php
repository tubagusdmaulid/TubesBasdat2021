<?php
    include "koneksi.php";

    $id_akun = $_REQUEST['id_akun'];
    $nama = $_REQUEST['nama'];
    $tanggal = $_REQUEST['tanggal'];
    $datang = $_REQUEST['datang'];
    $pulang = $_REQUEST['pulang'];
    $jumlah_lembur = $_REQUEST['jumlah_lembur'];

    $qry = "UPDATE tb_presensi SET 
    id_akun = '$id_akun',
    nama = '$nama', 
    tanggal = '$tanggal', 
    datang = '$datang', 
    pulang = '$pulang', 
    jumlah_lembur = '$jumlah_lembur'
    WHERE id_akun = '$id_akun'";

    $hasil = mysqli_query($connect, $qry);
    if($hasil){
        header('location:daftarPresensi.php');
    } else {
        echo 'Gagal Edit akun';
    }
?>