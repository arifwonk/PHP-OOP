<?php

class Produk{
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = "0";
            
    public function getLabel(){
        return "$this->judul, $this->penulis";

    }
            
}

// $produk1 = new Produk();
// $produk1->judul = "Petruk";
// var_dump($produk1);

// echo "<br>";

// $produk2 = new Produk();
// $produk2->penulis = "Tatang S";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Dragon ball";
$produk3->penulis = "Simon terayuki";
$produk3->penerbit = "Gramedia";
$produk3->harga = "300.000";

$produk4 = new Produk();
$produk4->judul = "Mobile Legend";
$produk4->penulis = "Kafirun";
$produk4->penerbit = "Moonton";
$produk4->harga = "1000.000";



echo "Komik : " .$produk3->getLabel();
echo "<br>";
echo "Game: " .$produk4->getLabel();