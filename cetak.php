<?php

include "fpdf.php";
include "koneksi.php";

$pdf = new FPDF();
$pdf-> AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(0,5, 'Data Akun Admin & Karyawan','0','1','C',false);
$pdf->SetFont('Arial','I',8);
$pdf->Cell(0,5, 'Alamat Bandar Lampung','0','1','C',false);
$pdf->Ln(3);
$pdf->Cell(190,0.6,'','0','1','C',true);

$pdf->SetFont('Arial','B',7);
$pdf->Cell(6,6,'No',1,0,'C');
$pdf->Cell(11,6,'Level',1,0,'C');
$pdf->Cell(25,6,'Nama',1,0,'C');
$pdf->Cell(25,6,'Jenis Kelamin',1,0,'C');
$pdf->Cell(15,6,'Jabatan',1,0,'C');
$pdf->Cell(13,6,'Golongan',1,0,'C');
$pdf->Cell(25,6,'Telepon',1,0,'C');
$pdf->Cell(25,6,'Alamat',1,0,'C');
$pdf->Cell(25,6,'Email',1,0,'C');
$pdf->Cell(20,6,'Password',1,0,'C');
$pdf->Ln(1);
$nomor = 0;

$qry = mysqli_query($connect, "SELECT * FROM tb_akun order by id_akun asc");
    while($data = mysqli_fetch_array($qry)){
        $nomor++;
        $pdf->Ln(6);
        $pdf->SetFont('Arial','B',7);
        $pdf->Cell(6,6,$nomor.".",1,0,'C');
        $pdf->Cell(11,6,$data['level'],1,0,'L');
        $pdf->Cell(25,6,$data['nama'],1,0,'L');
        $pdf->Cell(25,6,$data['jk'],1,0,'L');
        $pdf->Cell(15,6,$data['jabatan'],1,0,'C');
        $pdf->Cell(13,6,$data['golongan'],1,0,'C');
        $pdf->Cell(25,6,$data['telpon'],1,0,'L');
        $pdf->Cell(25,6,$data['alamat'],1,0,'L');
        $pdf->Cell(25,6,$data['email'],1,0,'L');
        $pdf->Cell(20,6,$data['password'],1,0,'L');

    }

$pdf->Output();

?>