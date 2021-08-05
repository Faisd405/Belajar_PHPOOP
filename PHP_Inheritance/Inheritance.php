<?php

Class Produk{
    public $judul = "Judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "harga",
           $jmlHalaman = "jmlhalaman",
           $waktuMain = "waktuMain";

    
 //Constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0,$jmlHalaman=0,$waktuMain=0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}

//Inherintance
class Komik extends Produk{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";
        return $str;
    }
}


class Game extends Produk{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->waktuMain} Waktu Main";
        return $str;
    }
}

 //Constructor
$produk1 = new Komik("Naruto Shippuden","Masashi Kishimoto","Shueisha","1000","50","0");

$produk3 = new Game("Naruto Ninja Strom","Bandai Namcos","Bandai Namcos","1000","0","20");


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();

// Komik : Masashi Kishimoto,Shueisha
// Games : Bandai Namcos,Bandai Namcos
// Naruto Shippuden | Masashi Kishimoto,Shueisha (Rp. 1000)


?>