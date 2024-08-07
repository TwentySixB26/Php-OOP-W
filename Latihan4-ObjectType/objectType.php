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
        
        public function Label() {
            return "$this->penerbit , $this->penulis" ;
        } 
    }


    class CetakProduk {
        public function cetak(Produk $produk) {
            $str = "{$produk->judul} | {$produk->Label()} (Rp. {$produk->harga})" ;
            return $str ; 
        } 
        //Produk yang berwarna kuning itu bertujuan agar hanya object yang bertipe data Produk yang boleh dimasukan
        //maka jika yang lain akan terjadi eror,Produk yang dimaksud adalah class Produk 
    }

    $produk1 = new Produk("Naruto" , "Masashi Kishimoto" , "japan" , "80000") ;
    $produk2 = new Produk("Mobile legend" , "moonton" , "China" , "20000")  ; 
    echo "Komik : " . $produk1 ->Label() ; 
    echo "<br>" ; 
    echo "Game : " . $produk2->label() ; 
    echo "<br>" ; 
    $cetakProduk = new CetakProduk() ; 
    echo $cetakProduk->cetak($produk2) ;

?>