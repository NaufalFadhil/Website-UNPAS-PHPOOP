<?php

// BUAT CLASS CONTOH
class Contoh
{
    // MEMBUAT NILAI PROPERTI MENJADI STATIC
    public static $angka = 1;

    // BUAT METHOD STATIC
    public static function halo()
    {
        // CODE UNTUK MEMANGGIL DILUAR FUNCTION
        // $this->property HANYA BERLAKU UNTUK YANG DUAH DI INSTANSIASI
        // GUNAKAN self::property KHUSUS UNTUK PROPERTY STATIC
        // KEMBALIKAN NILAI STRING
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

    // BUAT METHOD
    public function halo()
    {
        // CODE UNTUK MEMANGGIL DILUAR FUNCTION
        return "Halo " . $this->angka++ . " Kali. <br>";
    }
}

// BUAT OBJEK DARI INSTANSIASI CLASS BIASA
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

// CLASS STATIC
class ContohStatic
{
    // MEMBUAT NILAI PROPERTI MENJADI STATIC
    public static $angka = 1;

    // BUAT METHOD 
    public function halo()
    {
        // KEMBALIKAN NILAI, AMBIL VAR DENGAN SYNTAX KHUSUS
        return "Halo " . self::$angka++ . " Kali. <br>";
    }
}

// BUAT OBJEK DARI INSTANSIASI CLASS STATIC
$obj = new ContohStatic;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<br>";
$obj2 = new ContohStatic;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

// OUTPUT AKAN TETAP MEMULAI DARI MEMORY PENTIMPANAN CLASS