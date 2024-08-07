<!-- contoh 1  -->
<?php
    abstract class Produk {
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

        abstract public function InfoProduk() ;
        
        public function GetInfo() {
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
            $str = "Komik : " . $this->GetInfo() ." - {$this->jumlahHal} Halaman." ;
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
            $str = "Game : " . $this->GetInfo() ." ~ {$this->jumlahJam} Jam." ;
            return $str ; 
        }
    }

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

    


    $produk1 = new Komik("Naruto" , "Masashi Kishimoto" , "japan" , "80000",100) ;
    $produk2 = new Game("Mobile legend" , "moonton" , "China" , "20000", 60 )  ; 
    // $cetakProduk = new CetakProduk() ; 

    // echo "Komik : " . $produk1 ->Label() ; 
    // echo "<br>" ; 
    // echo "Game : " . $produk2->label() ; 
    // echo "<br>" ; 
    // $cetakProduk = new CetakProduk() ; 
    // echo $cetakProduk->cetak($produk2) ;

    $cetakProduk = new CetakProduk() ; 
    $cetakProduk->TambahProduk($produk1) ; 
    $cetakProduk->TambahProduk($produk2) ;
    echo $cetakProduk->cetak() ; 
?>