<?php 

class Mobil {
    // Property
    public $nama;
    public $merk;
    public $warna;
    public $kecepatanMaksimal = 1000;
    public $jumlahPenumpang;

    // Method
    public function tambahKecepatan(){
        return $this->kecepatanMaksimal + 1000;
    }
    public function kurangiKecepatan(){
        return $this->kecepatanMaksimal - 500;
    }

    public function gantiTransmisi(){
        return $this->kecepatanMaksimal = 5000;
    }
}

// Deklarasi Property
$mobil1 = new Mobil();
$mobil1 -> kecepatanMaksimal = 1000;


$mobil2 = new Mobil();
$mobil2 -> kecepatanMaksimal = 10000;

// Deklarasi Method
echo "Mobil1";
echo "<br>";
echo "tambah kecepatan : " . $mobil1->tambahKecepatan();
echo "<br>";
echo "kurangi kecepatan : " . $mobil1->kurangiKecepatan();
echo "<br>";
echo "ganti Transmis : " . $mobil1->gantiTransmisi();

echo "<br>";
echo "<br>";

echo "Mobil2";
echo "<br>";
echo "tambah kecepatan : " . $mobil2->tambahKecepatan();
echo "<br>";
echo "kurangi kecepatan : " . $mobil2->kurangiKecepatan();
echo "<br>";
echo "ganti Transmis : " . $mobil2->gantiTransmisi();
?>