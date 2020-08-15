<?php

class Contoh
{
    // MEMBUAT NILAI PROPERTI MENJADI STATIC
    public static $angka = 1;

    public static function halo()
    {
        // CODE UNTUK MEMANGGIL DILUAR FUNCTION
        // $this->property HANYA BERLAKU UNTUK YANG DUAH DI INSTANSIASI
        // GUNAKAN self::property UNTUK PROPERTY STATIC
        return "Halo " . self::$angka++ . " Kali. <br>";
    }
}

// CARA MENAMPILKAN DENGAN NILAI STATIC
echo Contoh::$angka;
echo "<hr>";
echo Contoh::halo();

echo "<hr>";
// JIKA TIDAK MEMAKAI STATIC
echo "<hr>";

class ContohBiasa
{
    // MEMBUAT NILAI PROPERTI MENJADI STATIC
    public $angka = 1;

    public function halo()
    {
        // CODE UNTUK MEMANGGIL DILUAR FUNCTION
        return "Halo " . $this->angka++ . " Kali. <br>";
    }
}

$obj = new ContohBiasa;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<br>";
$obj2 = new ContohBiasa;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

// OUTPUT AKAN MENGUALANG DARI ANGKA SATU PADA SETIAP INSTANCE

echo "<hr>";
// MENGGUNAKAN STATIC KEYWORD
echo "<hr>";

class ContohStatic
{
    // MEMBUAT NILAI PROPERTI MENJADI STATIC
    public static $angka = 1;

    public function halo()
    {
        return "Halo " . self::$angka++ . " Kali. <br>";
    }
}

$obj = new ContohStatic;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<br>";
$obj2 = new ContohStatic;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

// OUTPUT AKAN TETAP MEMULASI DARI MEMORY PENTIMPANAN CLASS