<?php
include 'koneksi2.php';

$id_mhs      = $_POST['id_mhs'];
$nama               = $_POST['nama'];
$alamat              = $_POST['alamat'];
$jenis_kelamin     = $_POST['jenis_kelamin'];
$agama            = $_POST['agama'];
$asal_sekolah            = $_POST['asal_sekolah'];

$query="UPDATE registrasi SET nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',agama='$agama',asal_sekolah='$asal_sekolah'
where id_mhs='$id_mhs'";

mysqli_query($db, $query);
header("location:list.php");

?>