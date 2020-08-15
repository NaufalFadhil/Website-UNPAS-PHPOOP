<?php
// INI CLASS GAME
/////////////////

// BUAT CLASS (Game) DENGAN PARENT (Produk) IMPLEMENTASI (InfoProduk)
class Game extends Produk implements InfoProduk
{
    // BUAT PROPERTY 
    public $waktuMain;

    // BUAT METHOD CONTRUCT, ISI PARAMETER TETAPKAN NILAI DEFAULT
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $waktuMain = 0)
    {
        // AMBIL CONSTRUCTOR PADA CLASS (Produk) LALU MASUKKAN ARGUMEN PADA PARAMETERNYA
        parent::__construct($judul, $penulis, $penerbit, $harga);

        // AMBIL VARIABLE GLOBAL TETAPKAN PADA ARGUMEN waktuMain
        $this->waktuMain = $waktuMain;
    }

    // BUAT METHOD (setDiskoN)
    public function setDiskon($diskon)
    {
        // AMBIL VARIABEL GLOBAL DISKON TETAPKAN PADA ARGUMEN ($diskon)
        $this->diskon = $diskon;
    }

    // BUAT METHOD (getInfoProduk)
    public function getInfoProduk()
    {
        // BUAT VARIABEL STRING, YANG BERISI METHOD (getInfo) DAN PROPERTY (waktuMain)
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam.";
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
