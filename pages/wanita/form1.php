<?php

require_once('../../config/db.php');

$kabupaten = $_POST['kabupaten'];
$kecamatan = $_POST['kecamatan'];
$desa = $_POST['desa'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_ayah = $_POST['nama_ayah'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$warganegara = $_POST['warganegara'];
$agama = $_POST['agama'];
$pekerjaan = $_POST['pekerjaan'];
$tempat_tinggal = $_POST['alamat'];
$status = $_POST['status'];
$nama_suami_terdahulu = $_POST['nama_suami_terdahulu'];


$sql1 = "INSERT INTO tabel_domisili (kabupaten, kecamatan, desa) VALUES ('$kabupaten', '$kecamatan', '$desa')";
$query1 = mysqli_query($conn, $sql1);
$sql2 = "INSERT INTO tabel_wanita 
        (nama_lengkap, nama_ayah, tempat_lahir, tanggal_lahir, warganegara, agama, pekerjaan, tempat_tinggal, status, nama_suami_terdahulu) 
        VALUES ('$nama_lengkap', '$nama_ayah', '$tempat_lahir', '$tanggal_lahir', '$warganegara', '$agama', '$pekerjaan', '$tempat_tinggal', '$status', '$nama_suami_terdahulu')";
$query2 = mysqli_query($conn, $sql2);
