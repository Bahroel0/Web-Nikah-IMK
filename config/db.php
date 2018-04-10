<?php

$conn = mysqli_connect('localhost', 'root', '', 'nikah_imk');

if(!$conn){
    echo 'DataBase Tidak Tersambung';
}