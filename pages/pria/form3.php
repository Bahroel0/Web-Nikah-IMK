<?php

require_once('../../config/db.php');

$nama_lengkap = $_POST['nama_lengkap'];
$nama_ayah = $_POST['nama_ayah'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$warganegara = $_POST['warganegara'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$alamat = $_POST['alamat'];


$sql1 = "INSERT INTO tabel_pasangan (nama_lengkap, nama_ayah, tempat_lahir, tanggal_lahir, warganegara, agama, pekerjaan, alamat) 
VALUES ('$nama_lengkap', '$nama_ayah', '$tempat_lahir', '$tanggal_lahir', '$warganegara', '$agama', '$pekerjaan', '$alamat')";
$query1 = mysqli_query($conn, $sql1);