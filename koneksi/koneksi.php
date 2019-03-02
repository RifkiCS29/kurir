<?php
$server   = "localhost";
$username = "root";
$password = "";
$database = "db_kurir";

$db = mysqli_connect($server, $username, $password, $database);

// cek koneksi
if (!$db) {
    die('Koneksi Database Gagal : ' . mysqli_connect_error());
}
?>