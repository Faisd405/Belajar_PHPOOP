<?php

// Constant Define tidak dapat di dalam class
define("NAMA","Faisal Dzulfikar");
echo NAMA;

echo "<br>";

// Constant Const dapat didalam dan diluar class
class Coba {
    const UMUR = 17;
}

echo Coba::UMUR;

// Magic Constant
echo "<br>";
echo __LINE__; //Untuk nge cek ada di baris ke berapa
echo "<br>";
echo __DIR__; //Untuk nge cek ada di directory mana
echo "<br>";
echo __FILE__; //Untuk nge cek ada di mana file tersebut
echo "<br>";

function cobafunc(){
    return __FUNCTION__;
}
echo cobafunc();
echo "<br>";

class CobaClass{
    public $kelas = __CLASS__;
}
$obj = new CobaClass;
echo $obj->kelas;

echo "<br>";
echo __TRAIT__;
echo "<br>";
echo __METHOD__;
echo "<br>";
echo __NAMESPACE__;
?>