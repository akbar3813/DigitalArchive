<?php
// Koneksi ke database
$host = "mysql_database";
$user = "expo_user";
$password = "password";
$database = "expo_db";

// Membuat koneksi
$conn = new mysqli($host, $user, $password, $database);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi database gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama_siswa = $_POST['nama_siswa'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$nisn = $_POST['nisn'];
$nama_ortu = $_POST['nama_ortu'];
$no_ortu = $_POST['no_ortu'];
$nama_wali = $_POST['nama_wali'];
$no_wali = $_POST['no_wali'];
$foto = $_POST['foto'];
$raport = $_POST['raport'];
$kelas = $_POST['kelas'];

// Validasi input
if (empty($nama_siswa) || empty($tempat_lahir) || empty($tanggal_lahir) || empty($alamat) || empty($nisn) || empty($nama_ortu) || empty($no_ortu) || empty($foto) || empty($raport) || empty($kelas)) {
    die("Semua data harus diisi!");
}

// Menentukan tabel berdasarkan pilihan kelas
$tabel = "kelas_" . $kelas;

// Query untuk menyimpan data ke tabel yang sesuai
$sql = "INSERT INTO $tabel (nama_siswa, tempat_lahir, tanggal_lahir, alamat, nisn, nama_ortu, no_ortu, nama_wali, no_wali, foto, raport) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Persiapkan statement
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    die("Kesalahan dalam mempersiapkan query: " . $conn->error);
}

// Bind parameter dan eksekusi query
$stmt->bind_param("sssssssssss", $nama_siswa, $tempat_lahir, $tanggal_lahir, $alamat, $nisn, $nama_ortu, $no_ortu, $nama_wali, $no_wali, $foto, $raport);
if ($stmt->execute()) {
    // Set informasi sukses ke session
    session_start();
    $_SESSION['info'] = [
        'status' => 'success',
        'message' => 'Berhasil menambah data'
    ];
} else {
    // Set informasi gagal ke session
    session_start();
    $_SESSION['info'] = [
        'status' => 'failed',
        'message' => mysqli_error($conn)
    ];
}

// Redirect ke halaman index.php
header('Location: ./index.php');
exit;
?>
