<?php 
require 'functions.php';
// menyimpan data id kedalam variabel
$id_customer = $_GET['id_customer'];

// memanggil fungsi hapus
if (hapus_customer($id_customer) > 0) {
    echo "
        <script>
            alert('Data berhasil dihapus');

            
            document.location.href = 'customer1.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'customer1.php';
        </script>
    ";
}
?>