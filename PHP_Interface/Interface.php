<?php

Interface InfoProduk {

    public function getInfoProduk(); 

}

Abstract Class Produk{

    protected $judul,
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
}

//Inherintance
class Komik extends Produk implements InfoProduk{
    public $jmlHalaman = "jmlhalaman";

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0,$jmlHalaman=0,$waktuMain=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }
    
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        

        // prent::getInfoProduk adalah contoh overriding
        $str = "Komik : ".  $this->getInfo() ." - {$this->jmlHalaman} Halaman";
        return $str;
        
    }
}


class Game extends Produk implements InfoProduk{
    public $waktuMain = "waktuMain";

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga= 0,$waktuMain=0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }
    
    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk()
    {
        $str = "Game : ". $this->getInfo() ." ~ {$this->waktuMain} Jam Waktu Main";
        return $str;
    }
}

class cetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk){
        $this->daftarProduk[]= $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach ($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }

        return $str;
    }

}

 //Constructor
$produk1 = new Komik("Naruto Shippuden","Masashi Kishimoto","Shueisha","12000","50","0");

$produk2 = new Game("NARUTO SHIPPUDEN: Ultimate Ninja STORM 4","Bandai Namcos","Bandai Namcos","250000","20");

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

?>