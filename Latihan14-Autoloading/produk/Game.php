<?php

class Game extends Produk implements InfoProduct{
    public $jumlahJam ; 
    
    public function __construct($judulC="judul",$penulisC = "penulis" , $penerbitC="penertbit",$hargaC = 0,$jumlahJamC = 0 ) {
        parent::__construct($judulC,$penulisC, $penerbitC,$hargaC) ;
        $this->jumlahJam = $jumlahJamC ;
    }

    public function GetInfo(){
        $str = "{$this->judul} | {$this->Label()} (Rp. {$this->harga})" ;
        return $str ; 
    } 

    public function Harga() {
        return $this->harga ;
    }

    public function InfoProduk() {
        $str = "Game : " . $this->GetInfo() ." ~ {$this->jumlahJam} Jam." ;
        return $str ; 
    }
}