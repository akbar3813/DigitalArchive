<?php
session_start();
require_once '../helper/connection.php';

if (isset($_POST['proses'])) {
  // Ambil data dari form
$id = $_POST['id'];// Ambil data dari form
$nama = $_POST['nama'];
$no_pekerja = $_POST['no_pekerja'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$golongan = $_POST['golongan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

// Query untuk update data guru
$query = mysqli_query($connection, "UPDATE guru SET 

  nama = '$nama',
  no_pekerja = '$no_pekerja',
  tempat_lahir = '$tempat_lahir',
  tanggal_lahir = '$tanggal_lahir',
  golongan = '$golongan',
  jenis_kelamin = '$jenis_kelamin',
  email = '$email',
  alamat = '$alamat'
  WHERE id = '$id'");

// Cek hasil query
if ($query) {
    $_SESSION['info'] = [
        'status' => 'success',
        'message' => 'Berhasil mengubah data'
    ];
    header('Location: ./index.php');
} else {
    $_SESSION['info'] = [
        'status' => 'failed',
        'message' => mysqli_error($connection)
    ];
    header('Location: ./index.php');
}
}