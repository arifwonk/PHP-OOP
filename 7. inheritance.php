<?php

class Produk{
    public  $judul, 
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $wktMain,
            $tipe;

    public function __construct($jdl = "Judul", $pnl = "Penulis", $pnb = "Penerbit", $hrg = "Harga", $jml = 0, $wkt = 0, $tipe){
        $this->judul = $jdl;
        $this->penulis = $pnl;
        $this->penerbit = $pnb;
        $this->harga = $hrg;
        $this->jmlHalaman = $jml;
        $this->wktMain = $wkt;
        $this->tipe = $tipe;
        

    }
            
    public function getLabel(){
        return "$this->penulis, $this->penerbit";

    }
    
    public function getInfoLengkap(){
        $str = "{$this->tipe} : {$this->getLabel()} | (Rp. {$this->harga})";
        if ($this->tipe == "Komik"){
            $str .= " - {$this->jmlHalaman} Halaman";
        }else if ($this->tipe == "Game"){
            $str .= " ~ {$this->wktMain} Jam";
        }
        return $str;
    }
    
}

class CetakInfoProduk{
    public function cetak(Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
        return $str;
    }

}

$produk1 = new Produk("Petruk","Simon","Gramedia","300.000", 150, 0, "Komik");
$produk2 = new Produk("Mobile Legend", "kafirun","Moonton","200.000", 0, 25, "Game");

echo $produk1->getInfoLengkap();
