<?php

class Produk{
    public  $judul, 
            $penulis,
            $penerbit,
            $harga;
            
        

    public function __construct($jdl = "Judul", $pnl = "Penulis", $pnb = "Penerbit", $hrg = "Harga"){
        $this->judul = $jdl;
        $this->penulis = $pnl;
        $this->penerbit = $pnb;
        $this->harga = $hrg;        
        
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

$produk1 = new Komik("Petruk","Simon","Gramedia","300.000", 150);
$produk2 = new Game("Mobile Legend", "kafirun","Moonton","200.000",25);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

