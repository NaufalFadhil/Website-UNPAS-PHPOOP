<?php

// DEFINE()
// DEFINE TIDAK DAPAT DISIMPAN DALAM KELAS
// HARUS DISIMPAN DI LUAR SEBAGAI VARIABEL GLOBAL 

// define('namaConstanta', 'value');
define('NAMA', 'Naufal Fadhil Athallah');
echo NAMA;

echo "<Hr>";
echo "<Hr>";

// CONST()
// CONST DAPAT DISIMPAN PADA CLASS

// const namaConstanta = value
const UMUR = 19;
echo UMUR;

echo "<Hr>";
echo "<Hr>";
echo "<Hr>";

class Coba
{
    // define('NAMA', 'NAUFAL FADHIL'); // INI GA MAU
    const NAMA = 'Naufal Fadhil'; // INI MAU
}

// PANGGIL VARIABEL CONST DALAM CLASS SAMA SEPERTI STATIC
echo Coba::NAMA;

echo "<Hr>";
echo "<Hr>";
echo "<Hr>";




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

echo __LINE__; // MENAMPILKNA BARIS BERAPA
echo "<br>";
echo __FILE__; // MENAPILKAN FILE APA

function coba()
{
    return __FUNCTION__;
}

echo coba();

echo '<hr>';

class Coba2
{
    public $kelas = __CLASS__; // MENAPILKAN KELAS
}

$obj = new Coba2;
echo $obj->kelas;
