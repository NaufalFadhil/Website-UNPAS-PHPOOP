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
    public  $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    // BUAT METHOD CONSTRUCTOR
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
        // UBAH NILAI PADA VAR GLOBAL
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // BUAT METHOD SET
    public function setJudul($judul)
    {
        // UBAH NILAI PROPERTY
        $this->judul = $judul;
    }

    public function getJudul()
    {
        // KEMBALIKAN NILAI VAR
        return $this->judul;
    }

    // BUAT METHOD SET
    public function setPenulis($penulis)
    {
        // UBAH NILAI PROPERTY
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        // KEMBALIKAN NILAI VAR
        return $this->penulis;
    }

    // BUAT METHOD SET
    public function setPenerbit($penerbit)
    {
        // UBAH NILAI PROPERTY
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        // KEMBALIKAN NILAI VAR
        return $this->penerbit;
    }

    // BUAT METHOD SET
    public function setHarga($harga)
    {
        // UBAH NILAI PROPERTY
        $this->harga = $harga;
    }

    public function getHarga()
    {
        // KEMBALIKAN NILAI VAR
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    // BUAT METHOD 
    public function getLabel()
    {
        // KEMBALIKAN NILAI STRING
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        // BUAT VAR BERINILAI STRING 
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

// TAMPILKAN METHOD DARI OBJEK
echo $produk1->getInfoProduk();
echo baris();
// TAMPILKAN METHOD DARI OBJEK
echo $produk2->getInfoProduk();
echo "<hr>";

// AMBIL METHOD DARI OBJEK
$produk2->setDiskon(10);
echo $produk2->getHarga();
echo "<hr>";

// AMBIL METHOD DARI OBJEK LALU SET DENGAN NILAI PROPERTY
$produk1->setHarga(2000);
// TAMPILKAN METHOD GET
echo $produk1->getHarga();
echo "<br>";
echo $produk1->getPenerbit();
