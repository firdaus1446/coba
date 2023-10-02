
<!DOCTYPE html>
<html>

<head>
    <title>Digital Talent</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <h2>List Mahasiswa</h2>
    <a href="index.php"><button class="bt-input" type="button">Kembali</button></a>
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered table-hover table-striped">
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>ASAL SEKOLAH</th>
                        <th>ACTION</th>
                    </tr>
                    <?php
                    include 'koneksi2.php';
                    $registrasi = mysqli_query($db, "SELECT * FROM registrasi");

                    $no = 1;

                    foreach ($registrasi as $row) {
                        $jenis_kelamin = $row['jenis_kelamin'] == 'P' ? 'Perempuan' : 'Laki laki';
                        echo "<tr>
            <td>$no</td>
            <td>" . $row['nama'] . "</td>
            <td>" . $row['alamat'] . "</td>
            <td>" . $row['jenis_kelamin'] . "</td>
            <td>" . $row['agama'] . "</td>
            <td>" . $row['asal_sekolah'] . "</td>
            <td><a href='from-edit.php?id_mhs=$row[id_mhs]'>Edit</a>
            <a href='delete.php?id_mhs=$row[id_mhs]'>Delete</a>
            </td>
                </tr>";

                        $no++;
                    }
                    $jumlah_siswa = mysqli_num_rows($registrasi)
                    ?>
                    <p>Jumlah data : <b><?php echo $jumlah_siswa; ?></b></p>

                </table>
            </div>
        </div>
    </div>
 <!-- JavaScript Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>