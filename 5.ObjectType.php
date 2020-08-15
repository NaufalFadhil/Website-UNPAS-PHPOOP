<?php

function baris()
{
    return "<p>---------------------------------------------------------------------------------------------------------------------------</p>";
}
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

// OBJECT TYPE
class CetakInfoProduk
{
    // // BISA DIMASUKKIN OBJEK LAIN SELAIN INSTANCE PRODUK
    // public function cetak($produk){

    // GUNAKAN OBJECT TYPE BIAR AMAN
    // public function cetak( InstansiasiDariClassIni $objek) 
    // public function cetak( TipeData $objek) 
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// INSTANCE
$produk1 = new Produk("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer");


echo "Komik : " . $produk1->getlabel();
echo baris();
echo "Game : " . $produk2->getLabel();
echo baris();

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);
