<?php

require 'App/init.php';

$produk1 = new Komik("Naruto Shippuden","Masashi Kishimoto","Shueisha","12000","50","0");

$produk2 = new Game("NARUTO SHIPPUDEN: Ultimate Ninja STORM 4","Bandai Namcos","Bandai Namcos","250000","20");

$cetakProduk = new cetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

?>