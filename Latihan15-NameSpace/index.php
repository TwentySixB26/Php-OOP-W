<!-- contoh 1  -->
<?php
    
    require_once 'init.php' ; 
    

    // $produk1 = new Komik("Naruto" , "Masashi Kishimoto" , "japan" , "80000",100) ;
    // $produk2 = new Game("Mobile legend" , "moonton" , "China" , "20000", 60 )  ; 
    // $cetakProduk = new CetakProduk() ; 


    // $cetakProduk = new CetakProduk() ; 
    // $cetakProduk->TambahProduk($produk1) ; 
    // $cetakProduk->TambahProduk($produk2) ;
    // echo $cetakProduk->cetak() ; 

    use Lat15\Produk\User as ProdukUser ;
    use Lat15\Service\User as ServiceUser ;


    new ProdukUser ;
    echo "<br>" ; 
    new ServiceUser ;
?>