<?php
require('library/fpdf.php');
include 'koneksi.php';

$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();

// Tambahkan logo
$pdf->Image('logo1.png', 10, 6, 30); // Sesuaikan path dan ukuran logo

// Judul
$pdf->SetFont('Times', 'B', 13);
$pdf->Cell(190, 10, 'DATA MAHASISWA', 0, 1, 'C');
$pdf->Ln(10); // Tambahkan jarak antara logo dan judul

// Garis pemisah
$pdf->SetDrawColor(0, 0, 0);
$pdf->Line(10, 40, 200, 40);
$pdf->Ln(10);

// Set warna untuk header tabel
$pdf->SetFillColor(200, 200, 200);
$pdf->SetTextColor(0, 0, 0);

// Header tabel
$pdf->SetFont('Times', 'B', 9);
$pdf->Cell(10, 7, 'NO', 1, 0, 'C', true);
$pdf->Cell(30, 7, 'ID', 1, 0, 'C', true);
$pdf->Cell(50, 7, 'NAMA', 1, 0, 'C', true);
$pdf->Cell(100, 7, 'EMAIL', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Times', '', 10);

// Set warna untuk baris
$no = 1;
$data = mysqli_query($connect, "SELECT * FROM data_saya");
$fill = false;

while ($d = mysqli_fetch_array($data)) {
    // Set warna latar belakang baris bergantian
    $pdf->SetFillColor($fill ? 240 : 255, 240, 240);

    $pdf->Cell(10, 6, $no++, 1, 0, 'C', true);
    $pdf->Cell(30, 6, $d['id'], 1, 0, 'C', true);
    $pdf->Cell(50, 6, $d['nama'], 1, 0, 'C', true);
    $pdf->Cell(100, 6, $d['email'], 1, 1, 'C', true);

    $fill = !$fill; // Balik nilai $fill untuk mendapatkan efek zebra
}

// Tambahkan garis pemisah di akhir tabel
$pdf->Ln(10);
$pdf->Line(10, $pdf->GetY(), 200, $pdf->GetY());

$pdf->Output();
?>
