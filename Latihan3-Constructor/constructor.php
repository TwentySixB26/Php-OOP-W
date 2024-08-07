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
            return "$this->judul , $this->penulis" ;
        } 
    }


    // ================ contoh 2 ===========
    $produk1 = new Produk("Naruto" , "Masashi Kishimoto" , "japan" , "80000") ;
    $produk2 = new Produk("Mobile legend" , "moonton" , "China" , "20000")  ; 
    $produk3 = new Produk("","One piece") ; 
    echo "Komik : " . $produk1 ->Label() ; 
    echo "<br>" ; 
    echo "Game : " . $produk2->label() ; 
    echo "<br>" ; 
    var_dump($produk3->penulis); 

?>