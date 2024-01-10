<?php
require 'functions.php';

if (isset($_POST["submit"])) {
    $result = tambahProduk($_POST);

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
                document.location.href = 'produk.php';
            });
        }
        contoh();
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
        contoh();
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
        <a href="produk.php" class="btn btn-secondary text-white">Kembali</a>
    </button>

    <h1 class="mt-3">Tambah Data Produk</h1>

    <form action="" method="post">
        <div class="form-group">
            <label for="id_produk">Produk Id:</label>
            <input type="number" name="id_produk" id="id_produk" min="1" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nama_produk">Nama Produk:</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" name="harga" id="harga" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" name="stok" id="stok" min="0" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="">Nama Produk:</label>
            <select id="jenis_produk_id_jenis_produk" name="jenis_produk_id_jenis_produk" class="form-control">
                <option value="1">Pupuk</option>
                <option value="2">Benih</option>
                <option value="3">Pestisida</option>
                <option value="4">Alat Pertanian</option>
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
