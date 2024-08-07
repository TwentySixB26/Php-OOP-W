<?php

// require_once 'Produk/InfoProduct.php' ;
// require_once 'Produk/Produk.php' ;
// require_once 'Produk/Game.php' ; 
// require_once 'Produk/Komik.php' ;
// require_once 'Produk/CetakProduk.php' ;
// require_once 'Produk/User.php' ;

// require_once 'service/User.php' ;


spl_autoload_register(function($class){
    $class = explode('\\' , $class) ; 
    $class = end($class) ; 

    require_once "Produk/" . $class . ".php" ; 
}) ; 


spl_autoload_register(function($class){
    $class = explode('\\' , $class) ; 
    $class = end($class) ; 

    require_once "service/" . $class . ".php" ; 
}) ; 

