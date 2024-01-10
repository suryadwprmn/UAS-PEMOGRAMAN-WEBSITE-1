<?php
require 'functions.php';

$id_transaksi = $_GET['id_transaksi'];
//harus ada [0] karena mengambil array numerik 
$customer = query("SELECT * FROM transaksi WHERE id_transaksi=$id_transaksi")[0];
// var_dump($customer);

if (isset($_POST["submit"])) {
    $result = edit_transaksi($_POST);

    if ($result > 0) {
        echo "
        <script>
        alert('Data Gagal dirubah');
        document.location.href = 'editcustomer.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('Data berhasil dirubah');
        document.location.href = 'customer1.php';
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
        <a href="customer1.php" class="btn btn-secondary text-white">Kembali</a>
    </button>

    <h1 class="mt-3">Edit Data Transaksi</h1>

    <form action="" method="post">
    <div class="form-group">
        <label for="customer_id_customer">Customer Id:</label>
        <input type="number" name="customer_id_customer" id="customer_id_customer" value="<?= $customer["customer_id_customer"] ?>" min="1" max="100" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="karyawan_id_karyawan">Karyawan Id:</label>
        <input type="number" name="karyawan_id_karyawan" id="karyawan_id_karyawan" value="<?= $customer["karyawan_id_karyawan"] ?>" min="1" max="10" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="id_transaksi">Transaksi Id:</label>
        <input type="number" name="id_transaksi" id="id_transaksi" value="<?= $customer["id_transaksi"] ?>" min="1" max="1000" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="tgl_transaksi">Tanggal Transaksi:</label>
        <input type="date" name="tgl_transaksi" id="tgl_transaksi" value="<?= $customer["tgl_transaksi"] ?>" class="form-control" pattern="\d{4}-\d{2}-\d{2}" required>
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>

</div>
    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>