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
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }

}

$produk1 = new Produk("Petruk","Simon","Gramedia","300.000");
$produk2 = new Produk("Mobile Legend", "kafirun","Moonton","200.000");

echo "Komik : " .$produk1->getLabel();
echo "<br>";
echo "Game: " .$produk2->getLabel();

echo "<br>";

$infoproduk1 = new CetakInfoProduk();
echo "Komik : " .$infoproduk1->cetak($produk1);

echo "<br>";

$infoproduk2 = new CetakInfoProduk();
echo "Game : " .$infoproduk2->cetak($produk2);
