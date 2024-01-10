<?php  session_start(); ?>
<div class="bg-sidebar vh-100 w-50 position-fixed" style="background-color: #65B741;">
            <div class="log d-flex justify-content-between">
                <h1 class="E-classe text-start ms-3 ps-1 mt-3 h6 fw-bold ">TOKO PERTANIAN</h1>
                <i class="far fa-times h4 me-3 close align-self-end d-md-none"></i>
            </div>
            <div class="img-admin d-flex flex-column align-items-center text-center gap-2">
                <img class="rounded-circle" src="../assets/img/avatar.svg" alt="img-admin" height="120" width="120">
                <!-- <h2 class="h6 fw-bold"><?php echo $_SESSION['name']; ?></h2> -->
                <span class="h7 text-dark">admin</span>
            </div>
            <div class=" bg-list d-flex flex-column align-items-center fw-bold gap-2 mt-4 ">
                <ul class="d-flex flex-column list-unstyled">
                        <li class="h7"><a class="nav-link text-dark" href="dashboard.php"><i
                            class="fal fa-home-lg-alt me-2"></i> <span>Home</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href="customer1.php"><i
                                class="fal fa-bookmark me-2"></i> <span>Customer</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href="karyawan.php"><i
                                class="far fa-graduation-cap me-2"></i> <span>Karyawan</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href="produk.php"><i
                                class="fal fa-usd-square me-2"></i> <span>Produk</span></a></li>
                    <li class="h7"><a class=" nav-link text-dark" href="transaksi.php"><i
                                class="fal fa-file-chart-line me-2"></i> <span>Transaksi</span></a></li>
                    
                </ul>
                <!-- <ul class="logout d-flex justify-content-start list-unstyled">
                    <li class=" h7"><a class="nav-link text-dark" href="../index.php"><span>Logout</span><i
                                class="fal fa-sign-out-alt ms-2"></i></a></li> -->
                </ul>
            </div>

        </div>