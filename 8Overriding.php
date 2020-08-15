<?php

function baris()
{
    return "<br>";
}
// MEMBUAT CLASS
class Produk
{
    // MEMBUAT PROPERTY
    // JANGAN LUPA TAMBAH DENGAN VISIBILITY
    // BISA MEMBUAT NILAI DEFAULT
    public  $judul,
        $penulis,
        $penerbit,
        $harga;

    // MEMBUAT METHOD CONSTRUCTOR
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // MEMBUAT METHOD
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

class Komik extends Produk
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        // parent::METHOD ADALAH PENGAMBILAN METHOD DARI PARENTNYA AGAR TIDAK MENGAMBIL PROPERTY DALAM KELAS
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk()
    {
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

// UNTUK OBJECT TYPE
class CetakInfoProduk
{
    // BISA GINI CUMA GA AMAN BISA DIMASUKKIN TYPE LAIN
    // public function cetak($produk){
    // GUNAKAN OBJECT TYPE BIAR AMAN
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

echo $produk1->getInfoProduk();
echo baris();
echo $produk2->getInfoProduk();
