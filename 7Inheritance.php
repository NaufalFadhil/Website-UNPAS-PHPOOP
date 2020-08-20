<?php

// UNTUK LINE BARU
function baris()
{
    return "<br>";
}

// BUAT CLASS
class Produk
{
    // BUAT PROPERTY
    public  $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    // BUAT METHOD CONSTRUCTOR
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0, $waktuMain = 0)
    {
        // UBAH VAR GLOBAL MENJADI ARGUMEN DALAM PARAMETER
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    // BUAT METHOD
    public function getLabel()
    {
        // KEMBALIKAN NILAI DARI VAR OBJEK DAN METHODNYA
        return "$this->penulis, $this->penerbit";
    }

    // BUAT METHOD
    public function getInfoProduk()
    {
        // BUAT VAR DENGAN STRING
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga}";
        return $str;
    }
}

// CLASS YANG INHERITANCE KE CLASS PRODUK
class Komik extends Produk
{
    // BUAT OBJEK
    public function getInfoProduk()
    {
        // BUAT VAR DENGNA NILAI STRING
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        // KEMBALIKAN VAR
        return $str;
    }
}

// CLASS YANG INHERITANCE KE CLASS PRODUK
class Game extends Produk
{
    // BUAT VAR DENGNA NILAI STRING
    public function getInfoProduk()
    {
        // BUAT VAR DENGNA NILAI STRING
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        // KEMBALIKAN VAR
        return $str;
    }
}

// BUAT CLASS
class CetakInfoProduk
{
    // BUAT METHOD
    public function cetak(Produk $produk)
    {
        // BUAT VAR DENGAN NILAI STRING
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        // KEMBLAIKAN VAR
        return $str;
    }
}

// BUAT OBJEK YANG INSTANCE KE KOMIK DAN GAME
$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50);

// TAMPIL HASIL, PANGGIL PRODUK DAN AMBIL METHOD
echo $produk1->getInfoProduk();
echo baris();
echo $produk2->getInfoProduk();
