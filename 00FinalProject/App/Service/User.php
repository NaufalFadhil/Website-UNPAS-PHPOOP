<?php
// INI CLASS USER PADA FOLDER PRODUK
////////////////////////////////////

// BUAT NAMESPACE
namespace App\Service;

// BUAT CLASS USER
class User
{
    // BUAT METHOD CUNSTRUCT
    public function __construct()
    {
        // TAMPILKAN PADA LAYAR NAMA CLASS BESERTA NAMESPACENYA
        echo "Ini adalah class " . __CLASS__;
    }
}
