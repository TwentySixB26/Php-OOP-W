<!-- contoh 1  -->
<?php
    
    require_once 'init.php' ; 
    

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