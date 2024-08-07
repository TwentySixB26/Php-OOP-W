<!-- contoh 1  -->
<?php
    class Produk {
        private  $judul;
        private $penulis;
        private  $penerbit ;
        private $diskon = 0 ; 
        private $harga ;


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

        public function Harga() {
            return $this->harga ;
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

    echo "<hr>" ; 
    $produk1->SetDiskon(10) ; 
    echo $produk1->GetHarga() ;

    echo "<hr>" ; 
    $produk1->SetJudul("basara") ; 
    echo $produk1->GetPenulis() ;
?>