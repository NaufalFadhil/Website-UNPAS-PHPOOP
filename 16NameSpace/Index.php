<?php

require_once 'App/Init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr><hr>";

// MANGGIL BIASA
echo "<hr>";
new App\Produk\User();
echo "<br>";
new App\Service\User();

echo "<hr><hr>";



// MANGGIL MENGGUNAKAN ALIAS
use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();

// ATURAN NAMESPACE
// VENDOR\NAMESPACE\SUBNAMESPACE;
