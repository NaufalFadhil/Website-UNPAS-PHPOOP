<?php
// INI HALAMAN INDEX / UTAMA
////////////////////////////

// MENGGUNAKAN AUTOLOADING
require_once 'App/Init.php';

// INSTANCE CLASS (Komik) UNTUK MEMBUAT OBJEK (produk1) MASUKKAN ARGUMEN PADA PARAMETER
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// INSTANCE CLASS (Game) UNTUK MEMBUAT OBJEK (produk2) MASUKKAN ARGUMEN PADA PARAMETER
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);
// INSTANCE CLASS (CetakInfoProduk) UNTUK MEMBAUT OBJEK (cetakProduk) 
$cetakProduk = new CetakInfoProduk();

// PANGGIL OBJEK (CetakProduk) AMBIL METHOD (tambahProduk) MASUKKAN ARGUMEN PADA PARAMETER
$cetakProduk->tambahProduk($produk1);
// PANGGIL OBJEK (CetakProduk) AMBIL METHOD (tambahProduk) MASUKKAN ARGUMEN PADA PARAMETER
$cetakProduk->tambahProduk($produk2);
// PANGGIL OBJEK (CetakProduk) AMBIL METHOD CETAK UNTUK MENCETAK
echo $cetakProduk->cetak();


echo "<hr><hr>";


// INSTANCE USER PADA PRODUK
new App\Produk\User();
echo "<br>";
// INSTANCE USER PADA SERVICE
new App\Service\User();


echo "<hr><hr>";


// GUNAKAN USER PADA PRODUK LALU INISIALISASI (ProdukUser)
use App\Produk\User as ProdukUser;
// GUNAKAN USER PADA SERVICE LALU INISIALISASI (ServiceUser)
use App\Service\User as ServiceUser;

// INSTANCT INISIAL (ProdukUser)
new ProdukUser();
echo "<br>";
// INSTANCT INISIAL (ServiceUser)
new ServiceUser();
