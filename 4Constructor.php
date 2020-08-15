<?php

// BUAT CLASS
class Produk
{
    // BUAT PROPERTY
    public  $judul,
        $penulis,
        $penerbit,
        $harga;

    // BUAT METHOD CONSTRUCTOR
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // BUAT METHOD
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// INSTANSIASI
$produk1 = new Produk("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer");
$produk3 = new Produk("Dragon Ball",);

// TAMPIL HASIL
echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo $produk3->getLabel();
