<?php

class CetakProduk {
    public $daftarProduk = [] ; 

    public function TambahProduk(Produk $produk) {
        $this->daftarProduk[] = $produk ; 
    }

    public function cetak() {
        $str = "Daftar Produk  : <br>" ;
        
        foreach($this->daftarProduk as $p) {
            $str .= "- {$p->InfoProduk()} <br>" ; 
        }

        return $str ; 
    } 
}