<?php

include "fpdf.php";
include "koneksi.php";

$pdf = new FPDF();
$pdf-> AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5, 'Daftar Presensi Karyawan','0','1','C',false);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,5, 'Alamat Bandar Lampung','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(131,0.6,'','0','1','C',true);

$pdf->SetFont('Arial','B',7);
$pdf->Cell(6,6,'No',1,0,'C');
$pdf->Cell(25,6,'Nama',1,0,'C');
$pdf->Cell(25,6,'Tanggal',1,0,'C');
$pdf->Cell(25,6,'Datang',1,0,'C');
$pdf->Cell(25,6,'Pulang',1,0,'C');
$pdf->Cell(25,6,'Jumlah Lembur',1,0,'C');
$pdf->Ln(1);
$nomor = 0;

$qry = mysqli_query($connect, "SELECT * FROM tb_presensi order by id_akun asc");
    while($data = mysqli_fetch_array($qry)){
        $nomor++;
        $pdf->Ln(6);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(6,6,$nomor.".",1,0,'C');
        $pdf->Cell(25,6,$data['nama'],1,0,'L');
        $pdf->Cell(25,6,$data['tanggal'],1,0,'L');
        $pdf->Cell(25,6,$data['datang'],1,0,'L');
        $pdf->Cell(25,6,$data['pulang'],1,0,'L');
        $pdf->Cell(25,6,$data['jumlah_lembur'],1,0,'C');
    }

$pdf->Output();

?>