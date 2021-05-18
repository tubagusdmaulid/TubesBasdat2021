<?php
    include "koneksi.php";
    
    $id_akun = $_REQUEST['id_akun'];
    $nama = $_REQUEST['nama'];
    $tanggal = $_REQUEST['tanggal'];
    $datang = $_REQUEST['datang'];
    $pulang = $_REQUEST['pulang'];
    $jumlah_lembur = $_REQUEST['jumlah_lembur'];

    $qry ="INSERT INTO tb_presensi (id_akun,nama, tanggal, datang, pulang, jumlah_lembur) VALUES ('$id_akun', '$nama', '$tanggal','$datang', '$pulang','$jumlah_lembur')";

    $hasil = mysqli_query($connect, $qry);
    if($hasil){
        header('location:daftarPresensi.php');
    } else {
        echo 'Gagal tambah presensi';
    }
?>