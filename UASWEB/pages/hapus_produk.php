<?php 
require 'functions.php';

$id_produk = $_GET["id_produk"];

if (hapusProduk($id_produk) > 0) {
    echo"
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'produk.php';
    </script>
    ";
} else {
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'produk.php';
        </script>
        ";
}
?>