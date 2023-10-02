<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <link rel="stylesheet" href="style.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
<form class="" action="daftar.php" method="post">
    <div class="container">
        <div class="card mt-2">
            <div class="card">
                <div class="card-header">
                    Formulir Pendaftaran Siswa Baru
                </div>
                <div class="card-body">
                        <form>
                            <div class="row mb-3">
                                <label for="nama" class="col-sm-2 col-form-label">nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="nama">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="alamat">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                            <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                            <div class="col-sm-10">
                            <input type="radio" name="jenis_kelamin" value="laki-laki">laki laki
                            <input type="radio" name="jenis_kelamin" value="perempuan">perempuan <br>
                            </div>
                        </fieldset>
                            <div class="input-group mb-3">
                                <label class="input-group-text" for="agama">agama</label>
                                <select class="form-select" name="agama">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Buddha">Buddha</option>
                                </select> <br>
                            </div>
                            <div class="row mb-3">
                                <label for="asal_sekolah" class="col-sm-2 col-form-label">asal sekolah</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="asal_sekolah">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">DAFTAR</button>
                            <a href= "index.php"><button class="bt-input" type="button">Kembali</button></a>
                        </form>
                </div>
            </div>
        </div>
    </div>
</form>





    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>