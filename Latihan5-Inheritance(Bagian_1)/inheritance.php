<!-- contoh 1  -->
<?php
    class Produk {
        public  $judul;
        public  $penulis;
        public  $penerbit ;
        public  $harga ;
        public  $jumlahHal ;
        public  $jumlahJam ; 
        public  $tipe ; 

        public function __construct($judulC="judul",$penulisC = "penulis" , $penerbitC="penertbit",$hargaC = 0,$jumlahHalC = 0 , $jumlahJamC = 0 , $tipeC ) {
            $this->judul = $judulC ;
            $this->penulis = $penulisC ;
            $this->penerbit = $penerbitC ;
            $this->harga = $hargaC ;
            $this->jumlahHal = $jumlahHalC ;
            $this->jumlahJam = $jumlahJamC ;
            $this->tipe = $tipeC ;
        }

        public function InfoLengkap() {
            $str = "{$this->tipe} : {$this->judul} | {$this->Label()} (Rp. {$this->harga})" ;
            if ($this->tipe == "komik") {
                $str .= " - {$this->jumlahHal} halaman." ; 
            } elseif($this->tipe == "game") { 
                $str .= " ~ {$this->jumlahJam} jam." ;
            }
            return $str ; 
        }
        
        public function Label() {
            return "$this->penerbit , $this->penulis" ;
        } 
    }


    class CetakProduk {
        public function cetak(Produk $produk) {
            $str = "{$produk->judul} | {$produk->Label()} (Rp. {$produk->harga})" ;
            return $str ; 
        } 
        
    }

    $produk1 = new Produk("Naruto" , "Masashi Kishimoto" , "japan" , "80000",100,0,"komik") ;
    $produk2 = new Produk("Mobile legend" , "moonton" , "China" , "20000", 0 , 60 ,"game")  ; 
    $cetakProduk = new CetakProduk() ; 

    // echo "Komik : " . $produk1 ->Label() ; 
    // echo "<br>" ; 
    // echo "Game : " . $produk2->label() ; 
    // echo "<br>" ; 
    // $cetakProduk = new CetakProduk() ; 
    // echo $cetakProduk->cetak($produk2) ;

    echo $produk2->InfoLengkap() ;
    echo "<br>" ;
    echo $produk1->InfoLengkap() ;

?>