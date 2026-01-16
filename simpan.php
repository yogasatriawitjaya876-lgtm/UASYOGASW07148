<?php
include "koneksi.php";

$produk = $_POST['produk'];
$harga  = $_POST['harga'];
$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$hp     = $_POST['hp'];

mysqli_query($koneksi, "INSERT INTO pesanan 
(produk, harga, nama, alamat, hp) 
VALUES 
('$produk','$harga','$nama','$alamat','$hp')");

header("Location: keranjang.php");
exit;
?>
