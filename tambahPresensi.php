<?php
    include "koneksi.php";
    
    $id = $_REQUEST['id_akun'];
    $nama = $_REQUEST['nama'];
    $datang = $_REQUEST['datang'];
    $pulang = $_REQUEST['pulang'];
    $tanggal = $_REQUEST['tanggal'];
    $jumlah_lembur = $_REQUEST['jumlah_lembur'];

    $qry ="INSERT INTO tb_presensi (id, nama, datang, pulang, tanggal, jumlah_lembur) VALUES ('$id','$nama', '$datang','$pulang', '$tanggal', '$jumlah_lembur')";

    $hasil = mysqli_query($connect, $qry);
    if($hasil){
        header('location:daftarPresensi.php');
    } else {
        echo 'Gagal presensi akun';
    }
?>