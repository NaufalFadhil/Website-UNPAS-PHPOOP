<?php

// INI KAN SULIT BANYAK JUGA MANUAL KALO MAU NAMBAH FILE
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';


// GUNAKAN SPL AGAR OTOMARIS KAGA CAPE
// SPL = STANDARD PHP LIBRARY
// INGET INI LIBRARY GAUSAH BINGUNG!!

// BISA GINI
// function autoload($class){
// }
// spl_autoload_register(autoload());

// BISA MAKE CLOSURE (FUNGSI TANPA NAMA)
spl_autoload_register(function ($class) {

    // JALANKAN SEMUA KELAS YANG ADA DI FOLDER PRODUK
    // require_once 'Produk/' . $class . '.php';

    // BISA GINI VERSI LENGKAP
    require_once __DIR__ . '/Produk/' . $class . '.php';
});
