<?php

include 'koneksi2.php';

$nama               = $_POST['nama'];
$alamat             = $_POST['alamat'];
$jenis_kelamin      = $_POST['jenis_kelamin'];
$agama              = $_POST['agama'];
$asal_sekolah       = $_POST['asal_sekolah'];

$query = "INSERT INTO registrasi SET nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',agama='$agama',asal_sekolah='$asal_sekolah'";

mysqli_query($db, $query);

if( $query ){
    header("location: index.php?status=sukses");
} else {
    header("location: index.php?status=gagal");
}
?>
