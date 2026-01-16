<?php
include "koneksi.php";

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM pesanan WHERE id='$id'");

header("Location: keranjang.php");
exit;
