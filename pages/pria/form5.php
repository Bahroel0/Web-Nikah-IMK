<?php

require_once('../../config/db.php');

$hari = $_POST['hari'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$mas_kawin = $_POST['mas_kawin'];
$dibayar = $_POST['dibayar'];
$tempat = $_POST['tempat'];


$sql1 = "INSERT INTO tabel_rencana (hari, tanggal, jam, mas_kawin, dibayar, tempat) 
VALUES ('$hari', '$tanggal', '$jam', '$mas_kawin', '$dibayar', '$tempat' )";

$query = mysqli_query($conn, $sql1);

if($query){
    echo '
    <script>
        alert("Semua data telah berhasil anda inputkan. Silahkan lanjut Mencetak berkas!");
        window.location = "hasil.php";
    </script>
  ';
}