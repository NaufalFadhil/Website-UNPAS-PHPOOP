<?php

// DEFINE() //
// DEFINE TIDAK DAPAT DISIMPAN DALAM KELAS
// HARUS DISIMPAN DI LUAR SEBAGAI VARIABEL GLOBAL 
// define('namaConstanta', 'value');
define('NAMA', 'Naufal Fadhil Athallah');
echo NAMA;

echo "<Hr><hr>";

// CONST()
// CONST DAPAT DISIMPAN PADA CLASS MAPUPUN LUAR

// const namaConstanta = value
const UMUR = 19;
// MENAMPILKAN CONST
echo UMUR;

echo "<hr><hr><hr>";

// BUAT CLASS
class Coba
{
    // define('NAMA', 'NAUFAL FADHIL'); // INI GA MAU
    const NAMA = 'Naufal Fadhil'; // INI MAU
}

// PANGGIL VARIABEL CONST DALAM CLASS SAMA SEPERTI STATIC
echo Coba::NAMA;

echo "<hr><hr><hr>";

// MAGIC CONSTANT
// ADALAH CONSTANT YANG TELAH DIBUAT OLEH PHP
// __LINE__ 
// __FILE__
// __DIR__
// __FUNCTION__
// __CLASS__
// __TRAIT__
// __METHOD__
// __NAMESPACE__

echo __LINE__; // MENAMPILKAN BARIS BERAPA
echo "<br>";
echo __FILE__; // MENAPILKAN FILE APA

// BUAT FUNCTION
function coba()
{
    // KEMBALIKAN NILAI MAGIC CONST
    return __FUNCTION__;
}
// TAMPILKAN FUNGSI
echo coba();

echo '<hr>';

// BUAR CLASS
class Coba2
{
    // BUAT PROPERT DENGAN NILAI MAGIC CONST
    public $kelas = __CLASS__; // MENAPILKAN KELAS
}
// BUAT OBJEK
$obj = new Coba2;
// TAMPILKAN PROPERTY KELAS
echo $obj->kelas;
