<?php 
require 'functions.php';

$id_transaksi = $_GET["id_transaksi"];
if (hapus_transaksi($id_transaksi) > 0) {
    echo"
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'transaksi.php';
    </script>
    ";
} else {
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'transaksi.php';
        </script>
        ";
}
?>