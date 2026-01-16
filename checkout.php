<?php
$produk = $_GET['produk'] ?? '';
$harga  = $_GET['harga'] ?? '';
$hargapromo  = $_GET['harga-promo'] ?? '';
?>
<!-- Header -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Checkout - GenSpeedShop</title>
    <link rel="stylesheet" href="css/checkout.css">
</head>
<body>

<!-- Check-box -->
<div class="checkout-box">
    <h2>Pemesanan</h2>

    <div class="ringkasan">
        <p><b>Produk:</b> <?= htmlspecialchars($produk) ?></p>
        <p><b>Harga:</b> Rp <?= number_format($harga) ?></p>
    </div>

    <form action="simpan.php" method="POST">
        <input type="hidden" name="produk" value="<?= $produk ?>">
        <input type="hidden" name="harga" value="<?= $harga ?>">

        <label>Nama Lengkap</label>
        <input type="text" name="nama" required>

        <label>Alamat</label>
        <textarea name="alamat" required></textarea>

        <label>No HP</label>
        <input type="text" name="hp" required>

        <!-- TOMBOL -->
        <div class="btn-group">
            <button type="submit" class="btn-pesan">Pesan Sekarang</button>
            <a href="produk.html" class="btn-batal">Tidak Jadi Pesan</a>
        </div>
    </form>
</div>

</body>
</html>
