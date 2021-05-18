<?php
include "koneksi.php";

$id = $_REQUEST['id'];
$qry = "DELETE FROM tb_akun WHERE id_akun=$id";
$hasil = mysqli_query($connect, $qry);

if($hasil){
    header('location:daftarAkun.php');
} else {
    echo "Gagal hapus Akun";
}

?>