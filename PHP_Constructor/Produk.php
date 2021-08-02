<?php

Class Produk{
    public $judul = "Judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "harga";

    public function getLabel(){
        return "$this->judul,$this->penulis";
    }
}

$produk1 = new Produk();
$produk1 -> judul = "Naruto Shippuden";
$produk1 -> penulis = "Masashi Kishimoto";
$produk1 -> penerbit = "Shueisha";
$produk1 -> harga = "1000";

// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 -> judul = "Jump Force";
// $produk2 -> penulis = "Bandai Namco";
// $produk2 -> penerbit = "Bandai Namco";
// $produk2 -> harga = "1000";

// var_dump($produk2);

$produk3 = new Produk();
$produk3 -> judul = "Naruto Ninja Strom";
$produk3 -> penulis = "Bandai Namcos";
$produk3 -> penerbit = "Bandai Namcos";
$produk3 -> harga = "1000";

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Games : " . $produk3->getLabel();
?>