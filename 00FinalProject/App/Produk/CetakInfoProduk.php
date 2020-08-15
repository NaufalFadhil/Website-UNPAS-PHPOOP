<?php
// INI CKASS CETAK INFO PRODUK
//////////////////////////////

// BUAT CLASS (CetakInfoProduk)
class CetakInfoProduk
{
    // BUAT PROPERTY ($daftarProduk) YANG BEIRISI ARRAY KOSONG
    public $daftarProduk = array();

    // BUAT METHOD (tambahProduk) DENGAN PARAMETER (TIPE DATA DAN PRODUK)
    public function tambahProduk(Produk $produk)
    {
        // AMBIL VARIABEL GLOBAL (daftarProduk Array) DI ISI DENGAN ARGUMEN DARI PARAMETER
        $this->daftarProduk[] = $produk;
    }

    // BUAT METHOD CETAK
    public function cetak()
    {
        // BUAT VARIABEL ($str) DENGAN VALUE STRING
        $str = "DAFTAR PRODUK : <br>";

        // AMBIL SETIAP MEMBER DARI DAFTAR PRODUK
        foreach ($this->daftarProduk as $p) {
            // TAMBAHKAN STRING PADA VARIABEL ($str) DENGAN MENGAMBIL METHOD (getInfoProduk) DARI VARIABEL $P
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        // KEMBALIKAN NILAI $str
        return $str;
    }
}
