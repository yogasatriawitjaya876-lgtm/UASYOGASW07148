<?php
$koneksi = mysqli_connect("localhost", "root", "", "genspeedshop");

if (!$koneksi) {
    die("Koneksi database gagal");
}
