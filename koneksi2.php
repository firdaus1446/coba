<?php
$host = "localhost";
$user = "root";
$password = "";
$nama_database = "registrasi";
$db = mysqli_connect($host, $user, $password, $nama_database);
if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>