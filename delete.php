<?php
include 'koneksi2.php';

$id_mhs = $_GET['id_mhs'];
$query="DELETE from registrasi WHERE id_mhs='$id_mhs'";
mysqli_query($db, $query);
header("location:list.php");
?>