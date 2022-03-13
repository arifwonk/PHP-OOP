<?php

// class ContohStatic {
//     public static $angka = 1 ;

//     public static function helo(){
//         return "Cuy " . self::$angka++ . " Kali";
//     }
// }

// echo ContohStatic::$angka;
// echo"<br>";
// echo Contohstatic::helo();
// echo"<hr>";
// echo Contohstatic::helo();

// OOP biasa
class Contoh{
    public $angka = 1 ;

    public function helo(){
        return "Halo " . $this->angka++ . " Kali <br>";
    }
}

$Obj = new Contoh();
echo $Obj->helo();
echo $Obj->helo();
echo $Obj->helo();
echo "<hr>";
$Obj2 = new Contoh();
echo $Obj2->helo();
echo $Obj2->helo();
echo $Obj2->helo();
echo "<hr>";

// 1. nilai static akan tetap meskipun objectnya di instansiasi berulang kali
// 2. member terkait dengan class bukan Object
// 3. membuat kode menjadi 'Procedural'
// 4. Biasanya digunakan untuk membuat fungsi bantuan /helper
// 5. digunakan di class-class utility pada framework

// static keyword (nilainya akan tetap tidak di Reset)
class Contoh1{
    public static $angka = 1 ;

    public function helo(){
        return "Halo " . self::$angka++ . " Kali <br>";
    }
}

$Obj = new Contoh1();
echo $Obj->helo();
echo $Obj->helo();
echo $Obj->helo();

$Obj2 = new Contoh1();
echo $Obj2->helo();
echo $Obj2->helo();
echo $Obj2->helo();


?>