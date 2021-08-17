<?php

Class Produk{

    //Public itu dapat diakses melalui class itu sendiri, ataupun melalui object.
    public $judul = "Judul",
           $penulis = "penulis",
           $penerbit = "penerbit";

    //Protected itu dapat diakses melalui class itu sendiri dan class turunannya.
    protected $diskon = 0;

    //Private itu hanya dapat diakses di lingkup class dimana property atau method tersebut didefinisikan.
    private $harga;

 //Constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon /100);
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
    public $jmlHalaman = "jmlhalaman";

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0,$jmlHalaman=0,$waktuMain=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk()
    {
        

        // prent::getInfoProduk adalah contoh overriding
        $str = "Komik : ".  parent::getInfoProduk() ." - {$this->jmlHalaman} Halaman";
        return $str;
        
    }
}


class Game extends Produk{
    public $waktuMain = "waktuMain";

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0,$waktuMain=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }

    public function getInfoProduk()
    {
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam Waktu Main";
        return $str;
    }
}

 //Constructor
$produk1 = new Komik("Naruto Shippuden","Masashi Kishimoto","Shueisha","12000","50","0");

$produk3 = new Game("NARUTO SHIPPUDEN: Ultimate Ninja STORM 4","Bandai Namcos","Bandai Namcos","250000","20");


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();

echo "<br>";
echo "<br>";

$produk3->setDiskon(50);
echo "Harga NARUTO SHIPPUDEN: Ultimate Ninja STORM 4 Setelah Diskon = ".$produk3->getHarga();

// Komik : Masashi Kishimoto,Shueisha
// Games : Bandai Namcos,Bandai Namcos
// Naruto Shippuden | Masashi Kishimoto,Shueisha (Rp. 1000)


?>