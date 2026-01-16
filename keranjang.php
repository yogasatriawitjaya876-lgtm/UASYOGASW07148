<?php
include "koneksi.php";
$data = mysqli_query($koneksi, "SELECT * FROM pesanan ORDER BY id DESC");

$total = 0;

/* GAMBAR PRODUK */
$gambarProduk = [
    // PRODUK PROMO
    "Helm Full Face Race Arai" => "img/helm arai.jpg",
    "Knalpot Rxking Boban" => "img/boban.jpg",
    "Spion Carbon Style Pelangi Crome" => "img/no-brand_spion-karbon-pelangi-crome_full01.jpg",
    "Sarung Tangan Touring Anti Slip" => "img/jinhf-sarung-tangan-sepeda-motor-anti-slip-touchscreen-windproof-xl-st23.png",
    "Jaket Riding Protektor" => "img/jaket.jpg",

    // PRODUK NON PROMO
    "Billed Pro7" => "img/billed2.jpg",
    "Knalpot Tyga Ninja SS/R" => "img/knalpot.jpg",
    "Paket Kirian Pcx 160/150 tdr" => "img/paket kirian.jpeg",
    "Paket Pengereman Nissin" => "img/paket pengereman.jpg",
    "Velg Rcb Palang 8 Ring 17" => "img/velg rcb.jpg"
];

?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Keranjang Belanja</title>
<link rel="stylesheet" href="css/keranjang.css">
</head>
<body>

<div class="cart-header">🛒 Keranjang Belanja</div>
<a href="produk.html" class="btn-kembali">← Kembali ke Produk</a>

<div class="cart-wrapper">

<?php while ($row = mysqli_fetch_assoc($data)) {
    $total += $row['harga'];

    $gambar = $gambarProduk[$row['produk']] ?? "img/default.jpg";
?>
    <div class="cart-item">

        <!-- GAMBAR PRODUK -->
        <div class="item-img">
            <img src="<?= htmlspecialchars($gambar) ?>" alt="<?= htmlspecialchars($row['produk']) ?>">
        </div>

        <!-- INFO -->
        <div class="item-info">
            <h3><?= htmlspecialchars($row['produk']) ?></h3>
            <div class="harga">Rp <?= number_format($row['harga']) ?></div>

            <div class="detail">
                <span>Nama: <?= htmlspecialchars($row['nama']) ?></span>
                <span>No HP: <?= htmlspecialchars($row['hp']) ?></span>
                <span>Alamat: <?= htmlspecialchars($row['alamat']) ?></span>
            </div>

            <div class="tanggal">🕒 <?= $row['tanggal'] ?></div>
        </div>

        <!-- HAPUS -->
        <a href="hapus.php?id=<?= $row['id']; ?>" class="btn-hapus">
           🗑
        </a>
    </div>
<?php } ?>

</div>

<div class="cart-total">
    <div class="total">
        Total: <span>Rp <?= number_format($total) ?></span>
    </div>
<div class="notif-box">
    <h2>✅ Pesanan Berhasil</h2>
    <p>Terima kasih telah berbelanja di <b>GenSpeedShop.ID</b></p>
    <small>Anda akan diarahkan ke beranda toko...</small>
</div>



</body>
</html>
