<?php
require 'functions.php';

$mahasiswa = query('SELECT * FROM customer');

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
          <h1>Daftar Konsumen Toko Pertanian</h1>
    <button class="btn btn-success">
        <a href="tambah_customer.php" class="text-white text-decoration-none mb-2">Tambah Data Customer</a>
    </button>
    <br>
    <br>
    <div class="container-fluid">
        <label for="myInput">Name Customer : </label>
        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search ..." title="Type in a name" class="mx-auto me-2">

        <label for="">Show Entries : </label>
        <select id="entriesPerPage" onchange="updateTable()">
            <option value="25">25</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>
    <table border="1" cellpadding="10" cellspacing="0" class="table mt-3" id="myTable">
    <tr >
        <th scope ="col">No</th>
        <th scope ="col">Id Customer</th>
        <th scope ="col">nama customer</th>
        <th scope ="col">alamat</th>
        <th scope ="col">tanggal lahir</th>
        <th scope ="col">No Telepon</th>
        <th scope ="col">gender_id_gender</th>
        <th scope ="col">Aksi</th>
    </tr>
    <?php $index = 1; ?>
    <?php foreach($mahasiswa as $row):?>
    <tr>
        <td><?= $index++; ?></td>
        <td><?= $row["id_customer"]; ?></td>
        <td><?= $row["nama_customer"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><?= $row["tgl_lahir"]; ?></td>
        <td><?= $row["no_tlp"]; ?></td>
        <td><?= $row["gender_id_gender"]; ?></td>
        <td>
            <button class="btn btn-warning p-2">
            <a href="edit_customer.php?id_customer=<?=$row["id_customer"]; ?>" class="text-white p-4 text-decoration-none">Edit</a>
            </button>
            <span> |</span>
            <button class="btn btn-danger p-2">
                <a href="hapus_customer.php?id_customer=<?= $row["id_customer"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="text-white p-3 text-decoration-none">Hapus</a>
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