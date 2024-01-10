<?php
require 'functions.php';

$id_produk = $_GET['id_produk'];
$produk = query("SELECT * FROM produk WHERE id_produk=$id_produk")[0];

if (isset($_POST["submit"])) {
    $result = edit_produk($_POST);

    if ($result > 0) {
        echo "
        <script>
        alert('Data Gagal dirubah');
        document.location.href = 'edit_produk.php?id_produk=$id_produk';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data berhasil dirubah');
        document.location.href = 'produk.php';
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
    <title>EDIT</title>
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

    <h1 class="mt-3">Edit Data Produk</h1>

    <form action="" method="post">
    <input type="hidden" name="id_produk" id="id_produk" value="<?= $produk["id_produk"] ?>" class="form-control" required>

        <div class="form-group">
            <label for="nama_produk">Nama Produk:</label>
            <input type="text" name="nama_produk" id="nama_produk" class="form-control" required value="<?= $produk["nama_produk"] ?>">
        </div>

        <div class="form-group">
            <label for="harga">Harga:</label>
            <input type="text" name="harga" id="harga" class="form-control" required value="<?= $produk["harga"] ?>">
        </div>

        <div class="form-group">
            <label for="stok">Stok:</label>
            <input type="number" name="stok" id="stok" class="form-control" required value="<?= $produk["stok"] ?>">
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
