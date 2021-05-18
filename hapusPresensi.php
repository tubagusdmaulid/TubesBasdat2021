<?php
include "koneksi.php";

$id = $_REQUEST['id'];
$qry = "DELETE FROM tb_presensi WHERE id_akun=$id";
$hasil = mysqli_query($connect, $qry);

if($hasil){
    header('location:daftarPresensi.php');
} else {
    echo "Gagal hapus presensi";
}

?>