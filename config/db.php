<?php

$conn = mysqli_connect('localhost', 'root', '', 'kuliah_webnikah');

if(!$conn){
    echo 'DataBase Tidak Tersambung';
}