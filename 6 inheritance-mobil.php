<?php

class mobil{
    public $nama, $merk, $warna,
            $kecepatanMax,
            $jumlahPenumpang;
    
    public function tambahKecepatan(){
        return "Kecepatan Juoooss";
    }
}

class mobilSport extends mobil{
    public $turbo = false;

    public function jalankanTurbo(){
        $this->turbo = true;
        return "Jalankan Turbo Cuy";
    }
}

$mobil1 = new mobilSport();
echo $mobil1->tambahKecepatan();
echo "<br>";
echo $mobil1->jalankanTurbo();
