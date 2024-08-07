<?php

abstract class Produk {
    protected  $judul,
            $penulis,
            $penerbit ,
            $diskon = 0 , 
            $harga ;

    public function __construct($judulC="judul",$penulisC = "penulis" , $penerbitC="penertbit",$hargaC = 0) {
        $this->judul = $judulC ;
        $this->penulis = $penulisC ;
        $this->penerbit = $penerbitC ;
        $this->harga = $hargaC ;
    }

    public function SetDiskon($diskon) {
        $this->diskon = $diskon ; 
    }

    public function GetDiskon() {
        return $this->diskon  ;
    }

    public function SetJudul($judul) {
        $this->judul = $judul ;
    }

    public function GetJudul() {
        return $this->judul ;
    }

    public function SetPenulis($penulis) {
        $this->penulis = $penulis ;
    }

    public function GetPenulis() {
        return $this->penulis ;
    }
    

    public function SetPenerbit($Penerbit) {
        $this->Penerbit = $Penerbit ;
    }

    public function GetPenerbit() {
        return $this->Penerbit ;
    }
    

    public function SetHarga($harga) {
        $this->harga = $harga;
    }

    public function GetHarga() {
        return $this->harga - ($this->harga * ($this->diskon/100)) ;
    }
    
    abstract public function GetInfo() ;

    public function Label() {
        return "$this->penerbit , $this->penulis" ;
    } 
}