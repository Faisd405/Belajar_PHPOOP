<?php

Class Produk{

    private $judul,
           $penulis,
           $penerbit,
           $harga,
           $diskon = 0;


 //Constructor
    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

//Setter dan Getter
    public function setJudul( $judul ){
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis( $penulis ){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit( $penerbit ){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }
    
    public function setDiskon( $diskon ){
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    public function setHarga( $harga ){
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

echo "<hr>";

//Pemanggilan Setter
echo $produk1->getJudul() . " ";
echo $produk1->getPenulis() . " ";
echo $produk1->getPenerbit() . " ";
echo $produk1->getHarga() . " ";

echo "<br><br>";

//Setter dan Getter Echo
$produk1->setJudul("Boruto Shippuden");
echo $produk1->getJudul() . " ";
$produk1->setPenulis("Faisal Dzulfikar");
echo $produk1->getPenulis() . " ";
$produk1->setPenerbit("Gramedia");
echo $produk1->getPenerbit() . " ";
$produk1->setHarga("6000");
echo $produk1->getHarga() . " ";


// Komik : Masashi Kishimoto,Shueisha
// Games : Bandai Namcos,Bandai Namcos
// Naruto Shippuden | Masashi Kishimoto,Shueisha (Rp. 1000)


?>