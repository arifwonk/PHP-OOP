<?php

class Produk{
    public  $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $wktMain;
        

    public function __construct($jdl = "Judul", $pnl = "Penulis", $pnb = "Penerbit", $hrg = "Harga", $jml = 0, $wkt = 0){
        $this->judul = $jdl;
        $this->penulis = $pnl;
        $this->penerbit = $pnb;
        $this->harga = $hrg;
        $this->jmlHalaman = $jml;
        $this->wktMain = $wkt;
        
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
    public function getInfoProduk(){
        $str = "Komik : {$this->judul} | {$this->getLabel()}  (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman";

        return $str;
    }
}

class Game extends Produk{
    public function getInfoProduk(){
        $str = "Game : {$this->judul} | {$this->getLabel()}  (Rp. {$this->harga}) ~ {$this->wktMain} Jam";

        return $str;
    }
}


class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }

}

$produk1 = new Komik("Petruk","Simon","Gramedia","300.000", 150, 0);
$produk2 = new Game("Mobile Legend", "kafirun","Moonton","200.000", 0, 25);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
