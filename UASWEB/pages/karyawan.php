<?php
require 'functions.php';

$karyawan = query('SELECT * FROM karyawan');

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
          <h1>Data Karyawan</h1>
    <button class="btn btn-success">
        <a href="tambah_karyawan.php" class="text-white text-decoration-none mt-1">Tambah Data Karyawan</a>
    </button>
    <br>
    <br>
    <div class="container-fluid">
        <label for="myInput">Name Employee : </label>
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
        <th scope ="col">Id Karyawan</th>
        <th scope ="col">Nama</th>
        <th scope ="col">Alamat</th>
        <th scope ="col">Tanggal Lahir</th>
        <th scope ="col">No Telepon</th>
        <th scope ="col">Jabatan</th>
        <th scope ="col">Gender Id</th>
        <th scope ="col">Aksi</th>
    </tr>
    <?php $index = 1; ?>
    <?php foreach($karyawan as $row):?>
    <tr>
        <td><?= $index++; ?></td>
        <td><?= $row["id_karyawan"]; ?></td>
        <td><?= $row["nama_karyawan"]; ?></td>
        <td><?= $row["alamat"]; ?></td>
        <td><?= $row["tgl_lahir"]; ?></td>
        <td><?= $row["no_tlp"]; ?></td>
        <td><?= $row["jabatan"]; ?></td>
        <td><?= $row["gender_id_gender"]; ?></td>
        
        <td class="mt-2">
            <button class="btn btn-warning p-2 mt-1">
                <a href="" class="text-white p-4 text-decoration-none">Edit</a> 
            </button>
            <span> |</span>
            <button class="btn btn-danger p-2 mt-1">
                <a href="hapus_karyawan.php?id_customer=<?= $row["id_customer"]; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="text-white p-3 text-decoration-none">Hapus</a>
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