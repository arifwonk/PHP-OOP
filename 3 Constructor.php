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
        return "$this->judul, $this->penulis";

    }
            
}

$produk1 = new Produk("Petruk","Simon","Gramedia","300.000");
$produk2 = new Produk("Mobile Legend", "kafirun","Moonton","200.000");
$produk3 = new Produk("Mobile Legend");


echo "Komik : " .$produk1->getLabel();
echo "<br>";
echo "Game: " .$produk2->getLabel();
echo "<br>";
var_dump($produk3);