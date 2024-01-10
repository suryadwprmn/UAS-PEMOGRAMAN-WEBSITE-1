<?php 
$conn = mysqli_connect("localhost","root","","dbtokopertanian");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $id_customer = htmlspecialchars($data["id_customer"]);
    $nama_customer = htmlspecialchars($data["nama_customer"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $no_tlp = htmlspecialchars($data["no_tlp"]);
    $gender_id_gender = htmlspecialchars($data["gender_id_gender"]);

    $query = "INSERT INTO customer (id_customer, nama_customer, alamat, tgl_lahir, no_tlp, gender_id_gender) VALUES ('$id_customer', '$nama_customer', '$alamat', '$tgl_lahir', '$no_tlp', '$gender_id_gender')";
        
    mysqli_query($conn, $query);
   

    return mysqli_affected_rows($conn);
}

function hapus_customer($id_customer) {
    global $conn;

    // query SQL untuk delete data
    $query = "DELETE customer
    FROM customer
    JOIN gender ON customer.gender_id_gender = gender.id_gender
    WHERE customer.id_customer = $id_customer";
    mysqli_query($conn, $query);

    // mengembalikan jumlah baris yang terkena dampak
    return mysqli_affected_rows($conn);
}

function edit_customer($data) {
    global $conn;
    $id_customer = $data["id_customer"];
    $nama_customer = htmlspecialchars($data["nama_customer"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $no_tlp = htmlspecialchars($data["no_tlp"]);
    $gender_id_gender = htmlspecialchars($data["gender_id_gender"]);
   
    
    $query = "UPDATE customer 
    SET nama_customer = '$nama_customer', 
        alamat = '$alamat', 
        tgl_lahir = '$tgl_lahir', 
        no_tlp = '$no_tlp', 
        gender_id_gender = $gender_id_gender
        WHERE id_customer = '$id_customer'";
       
        mysqli_query($conn, $query);
}

function tambahKaryawan($data_karyawan){
    global $conn;
    $id_karyawan = htmlspecialchars($data_karyawan["id_karyawan"]);
    $nama_karyawan = htmlspecialchars($data_karyawan["nama_karyawan"]);
    $alamat = htmlspecialchars($data_karyawan["alamat"]);
    $tgl_lahir = htmlspecialchars($data_karyawan["tgl_lahir"]);
    $no_tlp = htmlspecialchars($data_karyawan["no_tlp"]);
    $jabatan = htmlspecialchars($data_karyawan["jabatan"]);
    $gender_id_gender = htmlspecialchars($data_karyawan["gender_id_gender"]);

    $query = "INSERT INTO customer (id_karyawan, nama_karyawan, alamat, tgl_lahir, no_tlp, jabatan, gender_id_gender) VALUES ('$id_karyawan', '$nama_karyawan', '$alamat', '$tgl_lahir', '$no_tlp','$jabatan', '$gender_id_gender')";
        
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambah_transaksi($data_transaksi){
    global $conn;
    $customer_id_customer = htmlspecialchars($data_transaksi["customer_id_customer"]);
    $karyawan_id_karyawan = htmlspecialchars($data_transaksi["karyawan_id_karyawan"]);
    $id_transaksi = htmlspecialchars($data_transaksi["id_transaksi"]);
    $tgl_transaksi = htmlspecialchars($data_transaksi["tgl_transaksi"]);

    
    $query = "INSERT INTO transaksi (customer_id_customer, karyawan_id_karyawan, id_transaksi, tgl_transaksi) VALUES ('$customer_id_customer', '$karyawan_id_karyawan', '$id_transaksi','$tgl_transaksi')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function hapus_transaksi($data_transaksi){
    global $conn;

    $query = "DELETE FROM transaksi
    WHERE id_transaksi = '$data_transaksi'";

    mysqli_query($conn, $query);
    var_dump($query);

    // mengembalikan jumlah baris yang terkena dampak
    return mysqli_affected_rows($conn);
}

function edit_transaksi($data_transaksi){
    global $conn;
    $customer_id_customer = htmlspecialchars($data_transaksi["customer_id_customer"]);
    $karyawan_id_karyawan = htmlspecialchars($data_transaksi["karyawan_id_karyawan"]);
    $id_transaksi = htmlspecialchars($data_transaksi["id_transaksi"]);
    $tgl_transaksi = htmlspecialchars($data_transaksi["tgl_transaksi"]);
    $query = "UPDATE transaksi 
              SET customer_id_customer = '$customer_id_customer', 
                  karyawan_id_karyawan = '$karyawan_id_karyawan', 
                  tgl_transaksi = '$tgl_transaksi' 
              WHERE id_transaksi = '$id_transaksi'";
       
        mysqli_query($conn, $query);
}  

function get_total_customer() {
    global $conn;

    $query = "SELECT COUNT(*) AS total_customer FROM customer";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['total_customer'];
    } else {
        return 0;
    }
}

function get_total_karyawan() {
    global $conn;

    $query = "SELECT COUNT(*) AS total_karyawan FROM karyawan";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['total_karyawan'];
    } else {
        return 0;
    }
}
function get_total_produk() {
    global $conn;

    $query = "SELECT COUNT(*) AS total_produk FROM produk";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['total_produk'];
    } else {
        return 0;
    }
}

function get_total_transaksi() {
    global $conn;

    $query = "SELECT COUNT(*) AS total_transaksi FROM transaksi";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        return $row['total_transaksi'];
    } else {
        return 0;
    }
}
?>