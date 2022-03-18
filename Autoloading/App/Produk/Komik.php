<?php

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($jdl = "Judul", $pnl = "Penulis", $pnb = "Penerbit", $hrg = "Harga", $jml = 0){
        parent::__construct($jdl, $pnl, $pnb, $hrg, $jml);

        $this->jmlHalaman = $jml;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()}  (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Komik : " . $this->getInfo() . " - {$this->jmlHalaman} Halaman";

        return $str;
    }
}