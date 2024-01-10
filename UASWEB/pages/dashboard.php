<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
            include 'functions.php';
            $total_customer = get_total_customer();
            $total_karyawan = get_total_karyawan();
            $total_transaksi = get_total_transaksi();
            $total_produk = get_total_produk();
            

        ?>
        <!-- end sidebar -->
        

        <!-- start content page -->
        <div class="container-fluid px">
        <?php 
            include "component/header.php";
        ?>
         <h1>DASHBOARD TOKO PERTANIAN</h1>
         <div class="container">
                <div class="row">
                    <div class="col-md-2 me-2">
                        <button class="btn btn-dark mt-4 kubus px-4" style="background-color:#1AACAC;">    
                        <div class="h5">Customer</div>
                            <p ><a href="customer1.php" class="text-decoration-none text-white"><?=$total_customer?></a></p>
                        </button>
                    </div>
                    <div class="col-md-2 me-2">
                        <button class="btn btn-dark mt-4 kubus px-3" style="background-color:#0174BE">    
                            <div class="h5">Karyawan</div>
                         <p ><a href="karyawan.php" class="text-decoration-none text-white"><?=$total_karyawan?></a></p>
                        </button>
                    </div>
                    <div class="col-md-2 me-2">
                        <button class="btn btn-dark mt-4 kubus px-4" style="background-color:#186F65;">    
                            <div class="h5">Produk</div>
                         <p ><a href="produk.php" class="text-decoration-none text-white"><?=$total_produk?></a></p>
                        </button>
                    </div>
                    <div class="col-md-2 me-2">
                        <button class="btn btn-dark mt-4 kubus px-4" style="background-color:#161A30">    
                            <div class="h5">Transaksi</div>
                         <p ><a href="transaksi.php" class="text-decoration-none text-white"><?=$total_transaksi?></a></p>
                        </button>
                    </div>
                </div>
         </div>
            
        </div>
        <!-- end contentpage -->
    </main>
    <script src="../js/script.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
</body>

</html>