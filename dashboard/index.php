<?php
require_once '../layout/_top.php';
require_once '../helper/connection.php';


if (!isset($_SESSION['login']) || $_SESSION['login']['role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

// Query Total Guru
$queryGuru = "SELECT COUNT(*) AS total FROM guru";
$resultGuru = mysqli_query($connection, $queryGuru);
if (!$resultGuru) {
    die("Query untuk guru gagal: " . mysqli_error($connection));
}
$dataGuru = mysqli_fetch_assoc($resultGuru);
$totalGuru = $dataGuru['total'];

// Query Total Siswa di Kelas 1
$queryKelas1 = "SELECT COUNT(*) AS total FROM kelas_1";
$resultKelas1 = mysqli_query($connection, $queryKelas1);
if (!$resultKelas1) {
    die("Query untuk kelas 1 gagal: " . mysqli_error($connection));
}
$dataKelas1 = mysqli_fetch_assoc($resultKelas1);
$totalKelas1 = $dataKelas1['total'];

// Query Total Siswa di Kelas 2
$queryKelas2 = "SELECT COUNT(*) AS total FROM kelas_2";
$resultKelas2 = mysqli_query($connection, $queryKelas2);
if (!$resultKelas2) {
    die("Query untuk kelas 2 gagal: " . mysqli_error($connection));
}
$dataKelas2 = mysqli_fetch_assoc($resultKelas2);
$totalKelas2 = $dataKelas2['total'];

// Query Total Siswa di Kelas 2
$queryKelas3 = "SELECT COUNT(*) AS total FROM kelas_3";
$resultKelas3 = mysqli_query($connection, $queryKelas3);
if (!$resultKelas3) {
    die("Query untuk kelas 3 gagal: " . mysqli_error($connection));
}
$dataKelas3 = mysqli_fetch_assoc($resultKelas3);
$totalKelas3 = $dataKelas3['total'];

// Query Total Siswa di Kelas 2
$queryKelas4 = "SELECT COUNT(*) AS total FROM kelas_4";
$resultKelas4 = mysqli_query($connection, $queryKelas4);
if (!$resultKelas4) {
    die("Query untuk kelas 4 gagal: " . mysqli_error($connection));
}
$dataKelas4 = mysqli_fetch_assoc($resultKelas4);
$totalKelas4 = $dataKelas4['total'];

// Query Total Siswa di Kelas 2
$queryKelas5 = "SELECT COUNT(*) AS total FROM kelas_5";
$resultKelas5 = mysqli_query($connection, $queryKelas5);
if (!$resultKelas5) {
    die("Query untuk kelas 5 gagal: " . mysqli_error($connection));
}
$dataKelas5 = mysqli_fetch_assoc($resultKelas5);
$totalKelas5 = $dataKelas5['total'];

// Query Total Siswa di Kelas 2
$queryKelas6 = "SELECT COUNT(*) AS total FROM kelas_6";
$resultKelas6 = mysqli_query($connection, $queryKelas6);
if (!$resultKelas6) {
    die("Query untuk kelas 6 gagal: " . mysqli_error($connection));
}
$dataKelas6 = mysqli_fetch_assoc($resultKelas6);
$totalKelas6 = $dataKelas6['total'];
?>

<section class="section">
  <div class="section-header">
    <h1>Dashboard Admin</h1>
  </div>
  <div class="column">
  <div class="row">
  <!-- Baris Pertama -->
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="far fa-user"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Guru</h4>
          <div>
            <span><?= $totalGuru; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="far fa-file"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Siswa Kelas 1</h4>
          <div>
            <span><?= $totalKelas1; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-warning">
        <i class="far fa-file"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Siswa Kelas 2</h4>
          <div>
            <span><?= $totalKelas2; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-success">
        <i class="far fa-file"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Siswa Kelas 3</h4>
          <div>
            <span><?= $totalKelas3; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row mt-3">
  <!-- Baris Kedua -->
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="far fa-file"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Siswa Kelas 4</h4>
          <div>
            <span><?= $totalKelas4; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-danger">
        <i class="far fa-file"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Siswa Kelas 5</h4>
          <div>
            <span><?= $totalKelas5; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-lg-3 col-md-6 col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-warning">
        <i class="far fa-file"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Siswa Kelas 6</h4>
          <div>
            <span><?= $totalKelas6; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
</section>

<?php
require_once '../layout/_bottom.php';
?>