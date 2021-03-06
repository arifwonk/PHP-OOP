<?php

interface InfoProduk {
    public function getInfoProduk();
}

abstract class Produk{
    protected $judul, 
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;          
        

    public function __construct($jdl = "Judul", $pnl = "Penulis", $pnb = "Penerbit", $hrg = "Harga"){
        $this->judul = $jdl;
        $this->penulis = $pnl;
        $this->penerbit = $pnb;
        $this->harga = $hrg;        
        
    }

    public function setJudul($judul){
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;    
    }   

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon(){
        return $this->diskon;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga(){
        return $this->harga - ($this->harga * $this->diskon /100);
    }
            
    public function getLabel(){
        return "$this->penulis, $this->penerbit";

    }
    
    abstract public function getInfo();
    
    
    
}

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

class CetakInfoProduk{
    public $daftarProduk = []; // array();

    public function tambahProduk(Produk $produk){
        $this->daftarProduk[] = $produk;
    }
    public function cetak(){
        $str = "Daftar Produk : <br>";

        foreach($this->daftarProduk as $p){
            $str .= "- {$p->getInfoProduk()} <br>"; 
        }

        return $str;
    }

}

$produk1 = new Komik("Petruk","Simon","Gramedia","300000", 150);
$produk2 = new Game("Mobile Legend", "kafirun","Moonton","200000",25);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();


