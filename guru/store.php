<?php
session_start();
require_once '../helper/connection.php';

$nama = $_POST['nama'];
$no_pekerja = $_POST['no_pekerja'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$golongan = $_POST['golongan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$query = mysqli_query($connection, "insert into guru(nama, no_pekerja, tempat_lahir, tanggal_lahir, golongan, jenis_kelamin, email, alamat) value('$nama', '$no_pekerja', '$tempat_lahir', '$tanggal_lahir','$golongan','$jenis_kelamin','$email','$alamat')");
if ($query) {
  $_SESSION['info'] = [
    'status' => 'success',
    'message' => 'Berhasil menambah data'
  ];
  header('Location: ./index.php');
                                            } else {
                                              $_SESSION['info'] = [
                                                'status' => 'failed',
                                                'message' => mysqli_error($connection)
                                              ];
                                              header('Location: ./index.php');
                                            }
