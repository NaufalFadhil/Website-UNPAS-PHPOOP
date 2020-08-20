<?php

// BUAT CLASS
class Produk
{
    // BUAT PROPERTY
    public  $judul,
        $penulis,
        $penerbit,
        $harga;

    // BUAT METHOD CONSTRUCTOR, BUAT PARAMETER
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
        // UBAH PROPERTY GLOBAL DENGAN MEMASUKAN ARGUMEN DARI PARAMETER
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // BUAT METHOD
    public function getLabel()
    {
        // KEMBALIKAN NILAI VAR GLOBAL
        return "$this->penulis, $this->penerbit";
    }
}

// INSTANSIASI PRODUK MENJADI OBJEK
$produk1 = new Produk("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer");
$produk3 = new Produk("Dragon Ball",);

// TAMPIL HASIL, AMBIL OBJEK DAN PANGGIL METHOD
echo "Komik : " . $produk1->getlabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
echo $produk3->getLabel();
