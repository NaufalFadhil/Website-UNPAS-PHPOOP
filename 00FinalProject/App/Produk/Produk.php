<?php
// INI KELAS PRODUK
///////////////////

// BUAT KELAS ABSTRACT 
abstract class Produk
{
    // BUAT PROPERTY
    public  $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    // BUAT METHOD CONTRUCT, ISI PARAMETER TETAPKAN NILAI DEFAULT
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
        // AMBIL VARIABLE GLOBAL LALU TETAPKAN NILAI DENGAN ARGUMEN PADA PARAMETER
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // BUAT METHOD (setJudul)
    public function setJudul($judul)
    {
        // AMBIL VARIBEL GLOBAL JUDUL TETAPKAN ARGUMEN $juduL DALAM PARAMETER
        $this->judul = $judul;
    }

    // BUAT METHOD (getJudul)
    public function getJudul()
    {
        // KEMBALIKAN NILAI VARIABLE GLOBAL JUDUL
        return $this->judul;
    }

    // BUAT METHOD (setPenulis)
    public function setPenulis($penulis)
    {
        // AMBIL VARIBEL GLOBAL JUDUL TETAPKAN ARGUMEN $penulis DALAM PARAMETER
        $this->penulis = $penulis;
    }

    // BUAT METHOD (setPenulis)
    public function getPenulis()
    {
        // KEMBALIKAN NILAI VARIABLE GLOBAL penulis
        return $this->penulis;
    }

    // BUAT METHOD (setPenerbit)
    public function setPenerbit($penerbit)
    {
        // AMBIL VARIBEL GLOBAL PENERBIT TETAPKAN ARGUMEN $penerbit DALAM PARAMETER
        $this->penerbit = $penerbit;
    }

    // BUAT METHOD (getPenerbit)
    public function getPenerbit()
    {
        // KEMBALIKAN NILAI VARIABLE GLOBAL PENERBIT
        return $this->penerbit;
    }

    // BUAT METHOD (setHarga)
    public function setHarga($harga)
    {
        // AMBIL VARIBEL GLOBAL HARGA TETAPKAN ARGUMEN $harga DALAM PARAMETER
        $this->harga = $harga;
    }

    // BUAT METHOD (getHarga)
    public function getHarga()
    {
        // KEMBALIKAN NILAI VARIABLE GLOBAL HARGA YANG TELAH DI KALKULASI
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    // MEMBUAT METHOD (getLabel)
    public function getLabel()
    {
        // KEMBALIKAN NILAI VARIABLE GLOBAL PENULIS DAN PENERBIT
        return "$this->penulis, $this->penerbit";
    }

    // BUAT ABSTARCT METHOD (getInfo)
    abstract public function getInfo();
}
