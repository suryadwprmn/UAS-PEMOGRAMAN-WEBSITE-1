<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    $result = tambahKaryawan($_POST);

    if ($result > 0) {
        echo "
        <script>
        function contoh() {
            Swal({
                title: 'Berhasil',
                text: 'Data berhasil ditambahkan',
                icon: 'success',
                button: true
            }).then(function() {
                document.location.href = 'karyawan.php';
            });
        }
        </script>
        ";
    } else {
        echo "
        <script>
        function contoh(){
            Swal({
                title: 'Gagal',
                text: 'Data gagal ditambahkan',
                icon: 'error',
                button: true
            });
        }
        </script>
        ";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body>
<div class="container mt-4">
    <button class="btn btn-secondary">
        <a href="karyawan.php" class="btn btn-secondary text-white">Kembali</a>
    </button>

    <h1 class="mt-3">Tambah Data Karyawan</h1>

    <form action="" method="post">
        <div class="form-group">
            <label for="id_karyawan">Karyawan Id:</label>
            <input type="number" name="id_karyawan" id="id_karyawan" min="51" max="10000" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nama_karyawan">Nama Karyawan:</label>
            <input type="text" name="nama_karyawan" id="nama_karyawan" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="tgl_lahir">Tgl Lahir:</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" pattern="\d{4}-\d{2}-\d{2}" required>
        </div>

        <div class="form-group">
            <label for="no_tlp">No Telpon:</label>
            <input type="text" name="no_tlp" id="no_tlp" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="jabatan">Jabatan :</label>
            <input type="text" name="jabatan" id="jabatan" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="gender_id_gender">Gender:</label>
            <select id="gender_id_gender" name="gender_id_gender" class="form-control">
                <option value="0">Perempuan</option>
                <option value="1">Laki -laki</option>
            </select>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>