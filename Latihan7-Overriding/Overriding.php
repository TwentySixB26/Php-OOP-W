<!-- contoh 1  -->
<?php
    class Produk {
        public  $judul;
        public  $penulis;
        public  $penerbit ;
        public  $harga ;


        public function __construct($judulC="judul",$penulisC = "penulis" , $penerbitC="penertbit",$hargaC = 0) {
            $this->judul = $judulC ;
            $this->penulis = $penulisC ;
            $this->penerbit = $penerbitC ;
            $this->harga = $hargaC ;
        }

        public function InfoProduk() {
            $str = "{$this->judul} | {$this->Label()} (Rp. {$this->harga})" ;
            return $str ; 
        }
        
        public function Label() {
            return "$this->penerbit , $this->penulis" ;
        } 
    }

    class Komik extends Produk{
        public $jumlahHal ; 

        public function __construct($judulC="judul",$penulisC = "penulis" , $penerbitC="penertbit",$hargaC = 0,$jumlahHalC = 0 ) {
            parent::__construct($judulC,$penulisC, $penerbitC,$hargaC) ;
            $this->jumlahHal = $jumlahHalC ;
        }

        public function InfoProduk() {
            $str = "Komik : " . parent::InfoProduk() ." - {$this->jumlahHal} Halaman." ;
            return $str ; 
        }
    }

    class Game extends Produk{
        public $jumlahJam ; 
        
        public function __construct($judulC="judul",$penulisC = "penulis" , $penerbitC="penertbit",$hargaC = 0,$jumlahJamC = 0 ) {
            parent::__construct($judulC,$penulisC, $penerbitC,$hargaC) ;
            $this->jumlahJam = $jumlahJamC ;
        }

        public function InfoProduk() {
            $str = "Game : " . parent::InfoProduk()  ." ~ {$this->jumlahJam} Jam." ;
            return $str ; 
        }
    }

    class CetakProduk {
        public function cetak(Produk $produk) {
            $str = "{$produk->judul} | {$produk->Label()} (Rp. {$produk->harga})" ;
            return $str ; 
        } 
    }

    


    $produk1 = new Komik("Naruto" , "Masashi Kishimoto" , "japan" , "80000",100) ;
    $produk2 = new Game("Mobile legend" , "moonton" , "China" , "20000", 60 )  ; 
    // $cetakProduk = new CetakProduk() ; 

    // echo "Komik : " . $produk1 ->Label() ; 
    // echo "<br>" ; 
    // echo "Game : " . $produk2->label() ; 
    // echo "<br>" ; 
    // $cetakProduk = new CetakProduk() ; 
    // echo $cetakProduk->cetak($produk2) ;

    echo $produk2->InfoProduk() ;
    echo "<br>" ;
    echo $produk1->InfoProduk() ;

?>