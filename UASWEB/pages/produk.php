<?php
require 'functions.php';

$mahasiswa = query('SELECT * FROM produk');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studens_list</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>
<body class="bg-content">
    <main class="dashboard d-flex">
        <!-- start sidebar -->
        <?php 
            include "component/sidebar.php";
        ?>
        <!-- end sidebar -->

        <!-- start content page -->
        <div class="container-fluid px-4">
        <?php 
            include "component/header.php";
        ?>
          <h1>Daftar Produk Toko Pertanian</h1>
    <button class="btn btn-success">
        <a href="tambah_produk.php" class="text-white text-decoration-none">Tambah Data Produk</a>
    </button>
    <table border="1" cellpadding="10" cellspacing="0" class="table mt-3">
    <tr >
        <th scope ="col">No</th>
        <th scope ="col">Id Produk</th>
        <th scope ="col">nama Produk</th>
        <th scope ="col">Harga</th>
        <th scope ="col">Stok</th>
        <th scope ="col">Id Jenis Produk</th>
        <th scope ="col">Aksi</th>
    </tr>
    <?php $index = 1; ?>
    <?php foreach($mahasiswa as $row):?>
    <tr>
        <td><?= $index++; ?></td>
        <td><?= $row["id_produk"]; ?></td>
        <td><?= $row["nama_produk"]; ?></td>
        <td><?= $row["harga"]; ?></td>
        <td><?= $row["stok"]; ?></td>
        <td><?= $row["jenis_produk_id_jenis_produk"]; ?></td>
        <td>
            <button class="btn btn-warning p-2">
            <a href="edit_produk.php?id_produk=<?=$row["id_produk"]; ?>" class="text-white p-4 text-decoration-none">Edit</a>
            </button>
            <span> | </span>
            <button class="btn btn-danger p-2">
                <a href="hapus_produk.php?id_produk=<?= $row["id_produk"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="text-white p-3 text-decoration-none">Hapus</a>
            </button>
        </td>
    </tr>
    <?php endforeach?>
</table>
        
            <!-- start student list table -->
                 
                
        <!-- end content page -->
      </div>
    </main>

    <script src="../js/script.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>
</html>