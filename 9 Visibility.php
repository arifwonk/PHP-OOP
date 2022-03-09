<?php

class Produk{
    public  $judul, 
            $penulis,
            $penerbit;
            
    protected $diskon = 0;


    private $harga;
            
        

    public function __construct($jdl = "Judul", $pnl = "Penulis", $pnb = "Penerbit", $hrg = "Harga"){
        $this->judul = $jdl;
        $this->penulis = $pnl;
        $this->penerbit = $pnb;
        $this->harga = $hrg;        
        
    }

   

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon /100);
    }
            
    public function getLabel(){
        return "$this->penulis, $this->penerbit";

    }
    
    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()}  (Rp. {$this->harga})";
        return $str;
    }
    
}

class Komik extends Produk{
    public $jmlHalaman;

    public function __construct($jdl = "Judul", $pnl = "Penulis", $pnb = "Penerbit", $hrg = "Harga", $jml = 0){
        parent::__construct($jdl, $pnl, $pnb, $hrg, $jml);

        $this->jmlHalaman = $jml;
    }
    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman";

        return $str;
    }
}

class Game extends Produk{
    public $wktMain;

    public function __construct($jdl = "Judul", $pnl = "Penulis", $pnb = "Penerbit", $hrg = "Harga", $wkt = 0){
        parent::__construct($jdl, $pnl, $pnb, $hrg, $wkt);

        $this->wktMain = $wkt;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getInfoProduk(){
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->wktMain} Jam";
        
        return $str;
    }
    
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }

}

$produk1 = new Komik("Petruk","Simon","Gramedia","300000", 150);
$produk2 = new Game("Mobile Legend", "kafirun","Moonton","200000",25);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setDiskon (50);
echo $produk2->getHarga();

// private untuk classnya sendiri
// protected bisa dipakai dipakai child class dan turunannya

// $produk2->diskon = 95;  (tidak boleh menggunakan property public untuk diskon )
## $produk2->setDiskon(90);    

// tidak bisa sembarang cetak property atau method yang sudah di protected
// echo $produk2->harga; 

