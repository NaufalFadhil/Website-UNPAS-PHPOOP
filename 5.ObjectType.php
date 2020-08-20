<?php
// INI BARIS PAJANGAN
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

    // BUAT METHOD CONSTRUCTOR DAN PARAMETERNYA
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
        // UBAH VARGLOBAL MENJADI ARGUMEN DARI PARAMETER
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

// MENGGUNAKAN OBJECT TYPE
class CetakInfoProduk
{
    // // KODE INI DAPAT DIMASUKKAN OBJEK LAIN SELAIN INSTANCE PRODUK (vAKUE NGACO)
    // public function cetak($produk){

    // GUNAKAN OBJECT TYPE BIAR AMAN DARI BAHAYA TERSBUT
    // public function cetak( InstansiasiDariClassApa? $objek) 
    // public function cetak( TipeData $objek) 
    public function cetak(Produk $produk)
    {
        // BUAT VAR DENGAN NILAI STRING
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        // KEMBALIKAN NILAI
        return $str;
    }
}

// BUAT OBJEK DENGAN INSTANCE CLASS PORDUK 
$produk1 = new Produk("Naruto", "Masahi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer");

// TAMPILKAN, PANGGIL PBJEK DAN METHODNYA
echo "Komik : " . $produk1->getlabel();
echo baris();
echo "Game : " . $produk2->getLabel();
echo baris();

// INSTANSISASI CLASS BUAT OBJEK
$infoProduk1 = new CetakInfoProduk();
// TAMPILKAN OBJEK INFO DAN PANGGIL METHOD DENGAN PARAMETER OBJEK
echo $infoProduk1->cetak($produk1);
