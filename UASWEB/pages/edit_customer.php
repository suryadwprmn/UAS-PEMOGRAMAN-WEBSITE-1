<?php
require 'functions.php';

$id_customer = $_GET['id_customer'];
//harus ada [0] karena mengambil array numerik 
$customer = query("SELECT * FROM customer WHERE id_customer=$id_customer")[0];
// var_dump($customer);
if (isset($_POST["submit"])) {
    $result = edit_customer($_POST);

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
    <title>EDIT</title>
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

    <h1 class="mt-3">Edit Data Customer</h1>

    <form action="" method="post">
    <input type="hidden" name="id_customer" id="id_customer" value="<?= $customer["id_customer"] ?>" class="form-control" required>

        <div class="form-group">
            <label for="nama_customer">Nama Customer:</label>
            <input type="text" name="nama_customer" id="nama_customer" class="form-control" required value="<?= $customer["nama_customer"]?>">
        </div>

        <div class="form-group">
            <label for="alamat">Alamat:</label>
            <input type="text" name="alamat" id="alamat" class="form-control" required value="<?= $customer["alamat"]?>">
        </div>

        <div class="form-group">
            <label for="tgl_lahir">Tgl Lahir:</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control" pattern="\d{4}-\d{2}-\d{2}" required value="<?= $customer["tgl_lahir"]?>">
        </div>

        <div class="form-group">
            <label for="no_tlp">No Telpon:</label>
            <input type="text" name="no_tlp" id="no_tlp" class="form-control" required value="<?= $customer["no_tlp"]?>">
        </div>

        <div class="form-group">
            <label for="gender_id_gender">Gender:</label>
            <select id="gender_id_gender" name="gender_id_gender" class="form-control">
            <option value="0" <?= $customer["gender_id_gender"] == 0 ? 'selected' : '' ?>>Perempuan</option>
            <option value="1" <?= $customer["gender_id_gender"] == 1 ? 'selected' : '' ?>>Laki -laki</option>
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