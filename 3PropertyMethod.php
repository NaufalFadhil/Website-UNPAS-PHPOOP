<?php

// BUAT CLASS
class Produk
{
    // BUAT PROPERTY
    // JANGAN LUPA TAMBAH DENGAN VISIBILITY
    // BISA MEMBUAT NILAI DEFAULT
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    // BUAT METHOD
    // METHOD ADALAH FUNCTION DI DALAM CLASS
    public function sayHello()
    {
        // SETIAP FUNCTION SEBAIKNYA MENGEMBALIKAN NILAI
        return "Hello World!";
    }

    // BUAT METHOD
    public function getLabel()
    {
        // PROGRAM ERROR: VARIABEL BERSIFAT LOKAL
        // return "$penulis, $penerbit";
        // BIAR GLOBAL TAMBAHKAN $this->property
        return "$this->penulis, $this->penerbit";
    }
}

// BUAT OBJEK
$produk1 = new Produk();
// PANGGIL OBJEK, AMBIL POROPERTY, UBAH NILAI
$produk1->judul = "Naruto";
// LIHAT OBJEK
var_dump($produk1);

// BUAT OBJEK BARU
$produk2 = new Produk();
// PANGGIL OBJEK, AMBIL POROPERTY, UBAH NILAI
$produk2->judul = "Uncharted";
// APABILA PROPERTY TIDAK ADA, AKAN TERCIPTA PROPERTY BARU
$produk2->tambahProperty = "hahaha";
// LIHAT OBJEK
var_dump($produk2);

echo "<hr>";
echo "<hr>";

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

echo "Komik : $produk3->penulis, $produk3->penerbit";

echo "<hr>";
echo "<hr>";

// MEMAnGGIL METHOD
echo $produk3->sayHello();

echo "<hr>";
echo "<hr>";

echo $produk3->getLabel();

echo "<hr>";
echo "<hr>";

$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis =  "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

echo "Komik : " . $produk3->getlabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

echo "<hr>";
echo "<hr>";
