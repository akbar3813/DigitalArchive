<?php
session_start();
require_once '../helper/connection.php';

$nama_siswa = $_GET['nama_siswa'];

// Menyimpan status berhasil
$success = false;

// Periksa penghapusan data di setiap tabel
$kelas = ['kelas_1', 'kelas_2', 'kelas_3', 'kelas_4', 'kelas_5', 'kelas_6'];
foreach ($kelas as $kelas_name) {
    $result = mysqli_query($connection, "DELETE FROM $kelas_name WHERE nama_siswa='$nama_siswa'");
    
    // Jika ada baris yang terpengaruh, set status berhasil
    if (mysqli_affected_rows($connection) > 0) {
        $success = true;
    }
}

// Setelah pengecekan semua query, beri feedback ke user
if ($success) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menghapus data siswa'
  ];
} else {
  $_SESSION['info'] = [
    'status' => 'failed',
    'message' => 'Gagal menghapus data atau data tidak ditemukan.'
  ];
}

header('Location: ./index.php'); // Redirect kembali ke halaman utama
exit;
?>
