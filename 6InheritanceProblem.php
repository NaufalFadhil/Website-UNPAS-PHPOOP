<?php
// 
function baris()
{
    return "<br>";
}
// MEMBUAT CLASS
class Produk
{
    // BUAT PROPERTY
    public  $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain,
        $tipe;

    // BUAT METHOD CONSTRUCTOR
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0, $waktuMain = 0, $tipe = "tipe")
    {
        // AMBIL PRODUK NILAI
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // MEMBUAT METHOD
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    // START: INHERITANCE PROBLEM
    // BUAT METHOD
    public function getInfoAll()
    {
        // BUAT VAR DENGAN NILAI STRING
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        // JIKA TIPE-NYA KOMIK
        if ($this->tipe == "Komik") {
            // TAMBAHKAN HALAMAN PADA VAR 
            $str .= " - {$this->jmlHalaman} Halaman.";
            // SELAIN ITU JIK TIPE-NYA
        } else if ($this->tipe = "Game") {
            // TAMBAHKAN JAM PADA VAR
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        // KEMBALIKAN NILAI VAR
        return $str;
    }
}

// BUAT CLASS BARU
class CetakInfoProduk
{
    // MEMBUAT METHOD DENGAN OBJECT TYPE
    public function cetak(Produk $produk)
    {
        // BUAT VAR DENGAN NILAI STRING
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        // KEMBALIKAN NILAI
        return $str;
    }
}

// BUAT OBJEK DARI INSCTANCE PRODUK
$produk1 = new Produk("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "Game");

// TAMPILKAN, AMBIL OBJEK DAN METHODNYA
echo $produk1->getInfoAll();
echo baris();
echo $produk2->getInfoAll();
