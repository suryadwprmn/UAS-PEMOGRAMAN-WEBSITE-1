<?php 
require 'functions.php';

$id_karyawan = $_GET["id_karyawan"];
if (hapus_karyawan($id_karyawan) > 0) {
    echo"
    <script>
        alert('Data berhasil dihapus');
        document.location.href = 'karyawan.php';
    </script>
    ";
} else {
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'karyawan.php';
        </script>
        ";
}
?>