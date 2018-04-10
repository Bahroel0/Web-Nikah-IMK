<?php

require_once('../../config/db.php');

$nama_ayah = $_POST['nama_ayah'];
$tempat_ayah = $_POST['tempat_ayah'];
$tanggal_ayah = $_POST['tanggal_ayah'];
$warganegara_ayah = $_POST['warganegara_ayah'];
$agama_ayah = $_POST['agama_ayah'];
$pekerjaan_ayah = $_POST['pekerjaan_ayah'];
$alamat_ayah = $_POST['alamat_ayah'];

$nama_ibu = $_POST['nama_ibu'];
$tempat_ibu = $_POST['tempat_ibu'];
$tanggal_ibu = $_POST['tanggal_ibu'];
$warganegara_ibu = $_POST['warganegara_ibu'];
$agama_ibu = $_POST['agama_ibu'];
$pekerjaan_ibu = $_POST['pekerjaan_ibu'];
$alamat_ibu = $_POST['alamat_ibu'];

$sql1 = "INSERT INTO tabel_ayah (nama_ayah, tempat, tanggal, warganegara, agama, pekerjaan, alamat) 
VALUES ('$nama_ayah', '$tempat_ayah', '$tanggal_ayah', '$warganegara_ayah', '$agama_ayah', '$pekerjaan_ayah', '$alamat_ayah')";
$query1 = mysqli_query($conn, $sql1);

$sql2 = "INSERT INTO tabel_ibu 
        (nama_ibu, tempat, tanggal, warganegara, agama, pekerjaan, alamat) 
        VALUES ('$nama_ibu', '$tempat_ibu', '$tanggal_ibu', '$warganegara_ibu', '$agama_ibu', '$pekerjaan_ibu', '$alamat_ibu')";
$query2 = mysqli_query($conn, $sql2);