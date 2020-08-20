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
        // KEMBALIKAN NILAI 
        return "Hello World!";
    }

    // BUAT METHOD
    public function getLabel()
    {
        // PROGRAM ERROR: KARENA VARIABEL BERSIFAT LOKAL
        // return "$penulis, $penerbit";
        // BIAR VARIABEL MENJADI GLOBAL TAMBAHKAN " $this->property "
        return "$this->penulis, $this->penerbit";
    }
}

// BUAT OBJEK INSTANCE PRODUK 
$produk1 = new Produk();
// PANGGIL OBJEK, AMBIL POROPERTY, UBAH NILAI
$produk1->judul = "Naruto";
// LIHAT OBJEK
var_dump($produk1);

// BUAT OBJEK 
$produk2 = new Produk();
// PANGGIL OBJEK, AMBIL POROPERTY, UBAH NILAI
$produk2->judul = "Uncharted";
// APABILA PROPERTY TIDAK ADA, AKAN TERCIPTA PROPERTY BARU
$produk2->tambahProperty = "hahaha";
// LIHAT OBJEK
var_dump($produk2);

// BUAT BARIS BARRU
echo "<hr>";
echo "<hr>";

// BUAT OBJEK INSTANCE PRODUK 
$produk3 = new Produk();
// PANGGIL OBJEK, AMBIL PROPERTY, UBAH NILAI
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = 30000;

// TAMPILKAN, AMBIL OBJEK DAN PROPERTYNYA
echo "Komik : $produk3->penulis, $produk3->penerbit";

echo "<hr>";
echo "<hr>";

// MEMANGGIL METHOD, BEDANYA ADA TANDA KURUNG
echo $produk3->sayHello();

echo "<hr>";
echo "<hr>";

// MEMNAGGIL METHOD
echo $produk3->getLabel();

echo "<hr>";
echo "<hr>";

// BUAT OBJEK INSTANCE PRODUK 
$produk4 = new Produk();
// AMBIL OBJEK DAN PROPERTY UBAH NILAINYA
$produk4->judul = "Uncharted";
$produk4->penulis =  "Neil Druckman";
$produk4->penerbit = "Sony Computer";
$produk4->harga = 250000;

// TAMPILKAN. AMBIL OBJEK DAN PROPERTYNYA
echo "Komik : " . $produk3->getlabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();

echo "<hr>";
echo "<hr>";
