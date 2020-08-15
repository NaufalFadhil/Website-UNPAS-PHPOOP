<?php

// BUAT CLASS (Komik) DENGAN PARENT (Produk) IMPLEMENTASI (InfoProduk)
class Komik extends Produk implements InfoProduk
{
    // BUAT PROPERTY 
    public $jmlHalaman;

    // BUAT METHOD CONTRUCT, ISI PARAMETER TETAPKAN NILAI DEFAULT
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0)
    {
        // AMBIL CONSTRUCTOR PADA CLASS (Produk) LALU MASUKKAN ARGUMEN PADA PARAMETERNYA
        parent::__construct($judul, $penulis, $penerbit, $harga);

        // AMBIL VARIABLE GLOBAL TETAPKAN PADA ARGUMEN waktuMain
        $this->jmlHalaman = $jmlHalaman;
    }

    // BUAT METHOD (getInfoProduk)
    public function getInfoProduk()
    {
        // BUAT VARIABEL STRING, YANG BERISI METHOD (getInfo) DAN PROPERTY (waktuMain)
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman.";
        // KEMBALIKAN NILAI VARIABEL STRING
        return $str;
    }

    // BUAT METHOD (getInfo)
    public function getInfo()
    {
        // BUAT VARIABEL STRING, YANG BERISI METHOD (getInfo) DAN PROPERTY (waktuMain)
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        // KEMBALIKAN NILAI VARIABEL STRING
        return $str;
    }
}
