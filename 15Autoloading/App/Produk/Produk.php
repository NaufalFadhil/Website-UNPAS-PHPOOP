<?php 

// TIDAK DAPAT MENJADI KELAS ABSTRAK
abstract class Produk
{
    // MEMBUAT PROPERTY
    // JANGAN LUPA TAMBAH DENGAN VISIBILITY
    // BISA MEMBUAT NILAI DEFAULT
    public  $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon = 0;

    // MEMBUAT METHOD CONSTRUCTOR
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }
    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
    // MEMBUAT METHOD
    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfo();
}
