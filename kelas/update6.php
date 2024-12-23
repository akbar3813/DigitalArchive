<?php
session_start();
require_once '../helper/connection.php';

if (isset($_POST['proses'])) {
  // Ambil data dari form
$id = $_POST['id'];
$nama_siswa =  $_POST['nama_siswa'] ;
$tempat_lahir =  $_POST['tempat_lahir'] ;
$tanggal_lahir =  $_POST['tanggal_lahir'] ;
$alamat =  $_POST['alamat'] ;
$nisn =  $_POST['nisn'] ;
$nama_ortu =  $_POST['nama_ortu'] ;
$no_ortu =  $_POST['no_ortu'] ;
$nama_wali =  $_POST['nama_wali'] ;
$no_wali =  $_POST['no_wali'] ;
$foto =  $_POST['foto'] ;
$raport =  $_POST['raport'] ;

$query = mysqli_query($connection, "UPDATE kelas_6 SET 
nama_siswa = '$nama_siswa', 
tempat_lahir = '$tempat_lahir', 
tanggal_lahir = '$tanggal_lahir', 
alamat = '$alamat', 
nisn = '$nisn', 
nama_ortu = '$nama_ortu', 
no_ortu = '$no_ortu', 
nama_wali = '$nama_wali', 
no_wali = '$no_wali', 
foto = '$foto',
raport = '$raport'
  
WHERE id = '$id'");


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