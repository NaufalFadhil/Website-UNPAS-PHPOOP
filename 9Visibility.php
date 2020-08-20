<?php

// FUNGSI BARIS
function baris()
{
    return "<br>";
}

// BUAT CLASS
class Produk
{
    // BUAT PROPERTY
    // SESUAIKAN VISIBILITY DENGAN KEBUTUHAN
    public  $judul,
        $penulis,
        $penerbit;
    protected $diskon;
    private $harga;

    // BUAT METHOD CONSTRUCTOR
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
        // AMBIL VAR GLOBAL DAN TIMPA MENGGUNAKAN ARGUMEN DALAM PARAMETER
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // BUAT METHDD GET
    public function getHarga()
    {
        // KEMBALIKAN NILAI KALKULASI DARI PROPERTY GLOBAL
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    // BUAT METHOD
    public function getLabel()
    {
        // KEMBALIKAN NILAI PROPERTY GLOBAL
        return "$this->penulis, $this->penerbit";
    }

    // BUAT METHOD
    public function getInfoProduk()
    {
        // BUAT VAR BERNILAI STRING
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        // KEMBALIKAN NILAI VAR
        return $str;
    }
}

// BUAT KOMIK ANAK DARI PRODUK
class Komik extends Produk
{
    // BUAT PORPERTY KHUSUS KOMIK
    public $jmlHalaman;

    // BUAT METHOD CONSTRUCT
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0)
    {
        // OVERRIDING
        // JALANKAN CONTRUCT YANG ADA DI PARENT 
        // parent::METHOD ADALAH PENGAMBILAN METHOD DARI PARENTNYA AGAR TIDAK USAH MENGAMBIL PROPERTY DALAM KELAS
        parent::__construct($judul, $penulis, $penerbit, $harga);
        // ISI VAR GLOBAL DENGAN ARGUMEN DARI PARAMETER
        $this->jmlHalaman = $jmlHalaman;
    }

    // BUAT METHOD
    public function getInfoProduk()
    {
        // parent::METHOD ADALAH PENGAMBILAN METHOD DARI PARENTNYA AGAR TIDAK USAH MENGAMBIL PROPERTY DALAM KELAS
        // BUAT VAR DENGAN NILAI STRING
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        // KEMBALIKAN NILAI
        return $str;
    }
}

// BUAT CLASS
class Game extends Produk
{
    // BUAT PORPERTY KHUSUS KOMIK
    public $waktuMain;

    // BUAT METHOD CONSTRUCT
    // OVERRIDING
    // JALANKAN CONTRUCT YANG ADA DI PARENT 
    // parent::METHOD ADALAH PENGAMBILAN METHOD DARI PARENTNYA AGAR TIDAK USAH MENGAMBIL PROPERTY DALAM KELAS
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    // BUAT METHOD SET DISKON
    public function setDiskon($diskon)
    {
        // AMBIL VAR GLOBAL DAN MASUKAN ARGUMEN
        $this->diskon = $diskon;
    }

    // BUAT METHOD
    public function getInfoProduk()
    {
        // parent::METHOD ADALAH PENGAMBILAN METHOD DARI PARENTNYA AGAR TIDAK USAH MENGAMBIL PROPERTY DALAM KELAS
        // BUAT VAR DENGAN NILAI STRING
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        // KEMBALIKAN NILAI
        return $str;
    }
}

// UNTUK OBJECT TYPE
class CetakInfoProduk
{
    // BUAT METHOD DENGAN OBJECT TYPE
    public function cetak(Produk $produk)
    {
        // BUAT VAR DENGAN NILAI STRING
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        // KEMBALIKAN NILAI
        return $str;
    }
}

// BUAT OBJEK DARI INSTANSIASI KOMIK
$produk1 = new Komik("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// TAMPILKAN, AMBIL OBJEK LALU METHODNYA
echo $produk1->getInfoProduk();
echo baris();
echo $produk2->getInfoProduk();
echo "<hr>";

// PANGGIL SET DISKON PADA OBJEK 2
$produk2->setDiskon(10);
// TAMPILKAN HARGA
echo $produk2->getHarga();
