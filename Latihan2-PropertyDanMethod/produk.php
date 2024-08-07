<!-- contoh 1  -->
<?php
    class Produk {
        //1.property
        public  $judul = "judul", 
                $penulis = "penulis" ,
                $penerbit = "penerbit" ,
                $harga = 0 ; //contoh property
    
        // =========== penulisan code lain Property =========== 
        // public $judul = "judul" ;
        // public $penulis = "penulis" ;
        // public $penerbit = "penerbit" ;
        // public $harga = 0 ; 


        //2.Method
        public function Label() {
            return "$this->judul , $this->penulis" ;
        } 
    }

    //=============== Contoh 1  ======================
    // pengisian 
    // $produk1 = new Produk() ;
    // $produk1->judul = "Naruto" ;
    // var_dump($produk1) ; 
    
    // echo '<br>' ; 

    // $produk2 = new Produk() ;
    // $produk2->judul = "mobile Legend" ;
    // $produk2->genre = "moba" ; //jika nama nya salah maka akan membuat property baru 
    // var_dump($produk2 ) ;





    // ================ contoh 2 ===========
    $produk3 = new Produk() ;
    $produk3 -> judul = "Naruto" ; 
    $produk3 -> penulis = "Masashi kishimoto" ; 
    $produk3 -> penerbit = "Japan Sub" ;
    $produk3 -> harga = "30000" ; 

    $produk4 = new Produk() ;
    $produk4 -> judul = "Mobile Legend" ; 
    $produk4 -> penulis = "Montoon" ; 
    $produk4 -> penerbit = "china" ;
    $produk4 -> harga = "3800000" ; 

    // echo "Komik : $produk3->judul , $produk3->penulis" ; //pemangilan property
    
    echo "Komik : " . $produk3 ->Label() ; //pemangilan method
    echo "<br>" ; 
    echo "Game : " . $produk4->label() ; 

?>