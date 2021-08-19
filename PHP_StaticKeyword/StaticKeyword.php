<?php 

class ContohStatic{
    public static $angka = 1;

    public static function halo(){
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();
echo "<br>";
echo ContohStatic::halo();
echo "<hr>";



class Contoh{
    public static $angka = 1;

    public static function hlo(){
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo "Ini Contoh Pake Static <br><br>";

echo $obj->hlo();
echo $obj->hlo();
echo $obj->hlo();

echo "<hr>";
$obj2 = new Contoh;

echo $obj2->hlo();
echo $obj2->hlo();
echo $obj2->hlo();

echo "<hr>";
echo "<hr>";


class ContohBukanStatic{
    public  $angka = 1;

    public function hlo(){
        return "Halo " . $this->angka++ . " kali . <br>";
    }
}
 
echo "Ini Contoh Gak Pake Static <br><br>";
$obj = new ContohBukanStatic;

echo $obj->hlo();
echo $obj->hlo();
echo $obj->hlo();

echo "<hr>";
$obj2 = new ContohBukanStatic;

echo $obj2->hlo();
echo $obj2->hlo();
echo $obj2->hlo();

?>