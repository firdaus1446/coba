<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi2.php";
if (isset($_POST['submit'])) 
{
    $user = isset($_POST['user']) ? $_POST['user'] : "";
    $pass = isset($_POST['pass']) ? $_POST['pass'] : "";
    $qry  = mysqli_query($db, "SELECT * FROM user WHERE 
            username = '$user' AND password = '$pass'");
    $sesi = mysqli_num_rows($qry);

    if ($sesi == 1) 
    {
        $data_user = mysqli_fetch_array($qry);
        $_SESSION['id_admin'] = $data_user['id_user'];
        $_SESSION['sesi'] = $data_user['nm_user'];
        header("location:index.php");
    }
    else
    {
        echo "<meta http-equiv='refresh' content='0;
            url=login.php'>";
        echo "<script>alert('Anda Gagal Log In');</script>";
    }

}
else
{
    include "login.php";
}
?>