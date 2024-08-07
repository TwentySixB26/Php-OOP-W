<?php

class Komik extends Produk implements InfoProduct{
    public $jumlahHal ; 

    public function __construct($judulC="judul",$penulisC = "penulis" , $penerbitC="penertbit",$hargaC = 0,$jumlahHalC = 0 ) {
        parent::__construct($judulC,$penulisC, $penerbitC,$hargaC) ;
        $this->jumlahHal = $jumlahHalC ;
    }

    public function GetInfo(){
        $str = "{$this->judul} | {$this->Label()} (Rp. {$this->harga})" ;
        return $str ; 
    } 


    public function InfoProduk() {
        $str = "Komik : " . $this->GetInfo() ." - {$this->jumlahHal} Halaman." ;
        return $str ; 
    }
}