<?php

Class Produk{
    public $judul = "Judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = "harga";

    
 //Constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }
}

//ObjectType
class cetakInfoProduk {
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}


 //Constructor
$produk1 = new Produk("Naruto Shippuden","Masashi Kishimoto","Shueisha","1000");

$produk3 = new Produk("Naruto Ninja Strom","Bandai Namcos","Bandai Namcos","1000");


echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Games : " . $produk3->getLabel();
echo "<br>";

//ObjectType
$infoProduk1 = new cetakInfoProduk();
echo $infoProduk1->cetak($produk1);

?>