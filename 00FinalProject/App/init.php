<?php
// INI HALAMAN INIT / AUTOLOADING
/////////////////////////////////

// GUNAKAN LIBRARY (spl_autoload_register)

// AUTOLOAD UNTUK FOLDER PRODUK
spl_autoload_register(function ($class) {
    // PISAHKAN ARGUMEN CLASS DENGAN DELIMITER BACKSLASH (\) TETAPKAN SEBAGAI VARIABEL ($class)!
    $class = explode('\\', $class);
    // AMBIL NILAI PADA AKHIR VARIABLE ($class)
    $class = end($class);
    // AMBIL FILE (Produk/NamaClass.php)
    require_once 'Produk/' . $class . '.php';
});

// AUTOLOAD UNTUK FOLDER SERVICE
spl_autoload_register(function ($class) {
    // PISAHKAN ARGUMEN CLASS DENGAN DELIMITER BACKSLASH (\) TETAPKAN SEBAGAI VARIABEL ($class)!
    $class = explode('\\', $class);
    // AMBIL NILAI PADA AKHIR VARIABLE ($class)
    $class = end($class);
    // AMBIL FILE (Produk/NamaClass.php)
    require_once 'Service/' . $class . '.php';
});
