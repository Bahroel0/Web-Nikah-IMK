<?php

require_once('../../config/db.php');

$nama_lengkap = $_POST['nama_lengkap'];
$nama_ayah = $_POST['nama_ayah'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$warganegara = $_POST['warganegara'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$meninggal_pada = $_POST['meninggal_pada'];
$alamat = $_POST['alamat'];

echo $nama_lengkap;


$sql1 = "INSERT INTO tabel_mantan (nama_lengkap, nama_ayah, tempat_lahir, tanggal_lahir, warganegara, agama, pekerjaan, meninggal_pada, alamat) 
VALUES ('$nama_lengkap', '$nama_ayah', '$tempat_lahir', '$tanggal_lahir', '$warganegara', '$agama', '$pekerjaan', '$meninggal_pada', '$alamat')";

$query = mysqli_query($conn, $sql1);