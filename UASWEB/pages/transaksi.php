<?php
require 'functions.php';

$mahasiswa = query('SELECT * FROM transaksi');

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
          <h1>Daftar Transaksi Toko Pertanian</h1>
    <button class="btn btn-success mb-3">
        <a href="tambah_transaksi.php" class="text-white text-decoration-none">Tambah Data Transaksi</a>
    </button>
    <div class="container-fluid">
        <label for="">Show Entries : </label>
        <select id="entriesPerPage" onchange="updateTable()">
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>
    <table border="1" cellpadding="10" cellspacing="0" class="table mt-3">
    <tr >
        <th scope ="col">No</th>
        <th scope ="col">Customer ID</th>
        <th scope ="col">Karyawan ID</th>
        <th scope ="col">Transaksi ID</th>
        <th scope ="col">Tanggal Transaksi</th>
        <th scope ="col">Aksi</th>
    </tr>
    <?php $index = 1; ?>
    <?php foreach($mahasiswa as $row):?>
    <tr>
        <td><?= $index++; ?></td>
        <td><?= $row["customer_id_customer"]; ?></td>
        <td><?= $row["karyawan_id_karyawan"]; ?></td>
        <td><?= $row["id_transaksi"]; ?></td>
        <td><?= $row["tgl_transaksi"]; ?></td>
        <td>
            <button class="btn btn-warning p-2">
            <a href="edit_transaksi.php?id_transaksi=<?=$row["id_transaksi"]; ?>" class="text-white p-4 text-decoration-none">Edit</a>
            </button>
            <span> |</span>
            <button class="btn btn-danger p-2">
                <a href="hapus_transaksi.php?id_transaksi=<?= $row["id_transaksi"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="text-white p-3 text-decoration-none">Hapus</a>
            </button>
        </td>
    </tr>
    <?php endforeach?>
</table>
        
            <!-- start student list table -->
                 
                
        <!-- end content page -->
      </div>
    </main>

    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>