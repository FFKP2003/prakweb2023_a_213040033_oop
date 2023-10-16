<?php   

require_once 'App/Init.php';

$produk1 = new komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 35000, 125);
$produk2 = new Game("Only up", "Neil Amstrong", "SCKR Games", 30000, 45);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk( $produk1 );
$cetakProduk->tambahProduk( $produk2 );
echo $cetakProduk->cetak();

echo "<hr>";

new coba();