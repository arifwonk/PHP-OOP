<?php

// define("NAMA", "Mohamad arif");
// echo NAMA;

// echo "<br>";

// const UMUR = 20 ;
// echo UMUR;




// class Test{
//     const NAMA = "Rival Aqila"; // const bisa di simpan didalam calss
// }

// echo Test::NAMA;


//  Magic Constant: 
    // 1. __LINE__ 
    // 2. __FILE__ 
    // 3. __DIR__
    // 4. __FUNCTION__
    // 5. __CLASS__
    // 7. TRAIT__
    // 8. METHOD__
    // 9. NAMESPACE__

    
echo __LINE__;
echo "<br>";
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<hr>";


function Coba(){
    return __FUNCTION__;
}

echo Coba();

echo "<br>";

class Test{
    public $kelas = __CLASS__;

}

$obj = new Test;
echo $obj->kelas;




?>