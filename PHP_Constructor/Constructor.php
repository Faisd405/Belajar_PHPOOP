<?php

Class Produk{
    public $judul = "Judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "harga";


    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->judul,$this->penulis";
    }
}

$produk1 = new Produk("Naruto Shippuden","Masashi Kishimoto","Shueisha","1000");

$produk3 = new Produk("Naruto Ninja Strom","Bandai Namcos","Bandai Namcos","1000");
$produk2 = new Produk("Naruto Ninja");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Games : " . $produk3->getLabel();

var_dump($produk2);
?>