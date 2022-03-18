<?php

require_once 'App/Init.php';

$produk1 = new Komik("Petruk","Simon","Gramedia","300000", 150);
$produk2 = new Game("Mobile Legend", "kafirun","Moonton","200000",25);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";

new Coba();