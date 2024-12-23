<?php
require_once '../helper/connection.php';
require '../vendor/setasign\fpdf/fpdf.php'; // Pastikan lokasi library FPDF sesuai

// Periksa apakah parameter 'id' ada
if (!isset($_GET['id'])) {
    die('ID tidak ditemukan');
}

$id = $_GET['id'];

// Ambil data dari database berdasarkan ID
$query = mysqli_query($connection, "SELECT * FROM kelas_1 WHERE id = '$id'");
$data = mysqli_fetch_assoc($query);

if (!$data) {
    die('Data tidak ditemukan');
}

// Membuat file PDF menggunakan FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Judul
$pdf->Cell(0, 10, 'Data Siswa', 0, 1, 'C');
$pdf->Ln(10);

// Data siswa
$pdf->SetFont('Arial', '', 12);
$pdf->Cell(50, 10, 'Nama Siswa:', 0, 0);
$pdf->Cell(100, 10, $data['nama_siswa'], 0, 1);

$pdf->Cell(50, 10, 'Tempat Lahir:', 0, 0);
$pdf->Cell(100, 10, $data['tempat_lahir'], 0, 1);

$pdf->Cell(50, 10, 'Tanggal Lahir:', 0, 0);
$pdf->Cell(100, 10, $data['tanggal_lahir'], 0, 1);

$pdf->Cell(50, 10, 'Alamat:', 0, 0);
$pdf->Cell(100, 10, $data['alamat'], 0, 1);

$pdf->Cell(50, 10, 'NISN:', 0, 0);
$pdf->Cell(100, 10, $data['nisn'], 0, 1);

$pdf->Cell(50, 10, 'Nama Orang Tua:', 0, 0);
$pdf->Cell(100, 10, $data['nama_ortu'], 0, 1);

$pdf->Cell(50, 10, 'Nomor Orang Tua:', 0, 0);
$pdf->Cell(100, 10, $data['no_ortu'], 0, 1);

$pdf->Cell(50, 10, 'Nama Wali:', 0, 0);
$pdf->Cell(100, 10, $data['nama_wali'], 0, 1);

$pdf->Cell(50, 10, 'Nomor Wali:', 0, 0);
$pdf->Cell(100, 10, $data['no_wali'], 0, 1);

$pdf->Cell(50, 10, 'Foto:', 0, 0);
$pdf->Cell(100, 10, $data['foto'], 0, 1);

$pdf->Cell(50, 10, 'Raport:', 0, 0);
$pdf->Cell(100, 10, $data['raport'], 0, 1);

// Output PDF
$pdf->Output('D', 'data_siswa_' . $data['nama_siswa'] . '.pdf');
exit();
?>
