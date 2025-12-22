<?php

$localhost = "localhost";
$root = "root";
$pass = "";
$db = "berita";

$koneksi = mysqli_connect($localhost, $root, $pass, $db);

if(mysqli_connect_error()){
    echo "Koneksi Ke Database Gagal : ". mysqli_connect_error();
}

?>