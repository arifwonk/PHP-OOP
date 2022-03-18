<?php
class Game extends Produk implements InfoProduk{
    public $wktMain;

    public function __construct($jdl = "Judul", $pnl = "Penulis", $pnb = "Penerbit", $hrg = "Harga", $wkt = 0){
        parent::__construct($jdl, $pnl, $pnb, $hrg, $wkt);

        $this->wktMain = $wkt;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()}  (Rp. {$this->harga})";
        return $str;
    }

    public function getInfoProduk(){
        $str = "Game : " . $this->getInfo() . " ~ {$this->wktMain} Jam";
        
        return $str;
    }
    
}