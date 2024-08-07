<?php
    // class ContohStatic {
    //     public static $angka = 1 ; 

    //     public static function halo () {
    //         return "hallo " . self::$angka++ . " kali."; 
    //         // untuk mengambil property tidak bisa mengunakan $this->angka karena tidak di inisiasi tapi
    //         // mengunakan self::$angka , wajib pakai $ karena tidak di inisiasi
    //     }
    // }

    // // cara memangil/ mengakses fungsi static 
    // //angka harus dikasih $,karena tidak di inisiasi berbeda dengan latihan sebelumnya tidak perlu pakai $ karena sudah diinisiasi, tidak memakai tanda panah(->) juga pada fungsi static
    // echo ContohStatic::$angka ; 
    // echo "<br>" ; 
    // echo ContohStatic::halo() ;
    // echo "<hr>" ;
    // echo ContohStatic::halo() ;
    // ==========================================================================



    // contoh kedua mengukan konsep OOP biasa atau sama seperti seblumnya untuk membuktikan kenapa pakai fungsi static 
    class Contoh {
        public $angka = 1 ; 
        public function Halo(){
            return "Mengunakan OOP biasa hallo " . $this->angka++ . " kali. <br>" ; 
        }
    }

    //jika kita mengunakan seperti OOP biasa (bukan static) maka outputnya adalah  
    $obj = new Contoh() ; 
    echo $obj->Halo() ; //hallo 1 kali.
    echo $obj->Halo() ; //hallo 2 kali.
    echo $obj->Halo() ; //hallo 3 kali. 

    echo "<hr>" ; 

    // dan jika di inisiasi ulang maka $angka di ulang kembali menjadi 1 tidak lanjut lanjut ke 4 , maka output yang diperoleh adalah
    $obj2 = new Contoh() ; 
    echo $obj2->Halo() ; //hallo 1 kali.
    echo $obj2->Halo() ; //hallo 2 kali.
    echo $obj2->Halo() ; //hallo 3 kali.
    echo "<hr>" ; 



    class Contoh2 {
        // jika mengunakan fungsi static 
        public static $angka = 1 ; 
        public function Halo(){
            return "Mengunakan fungsi static hallo " . self::$angka++ . " kali. <br>" ; 
        }
    }

    //jika kita mengunakan fungsi static maka outputnya adalah  
    $obj3 = new Contoh2() ; 
    echo $obj3->Halo() ; //hallo 1 kali.
    echo $obj3->Halo() ; //hallo 2 kali.
    echo $obj3->Halo() ; //hallo 3 kali. 

    echo "<hr>" ; 

    // dan jika di inisiasi ulang maka $angka lanjut menjadi ke 4 , maka output yang diperoleh adalah
    $obj4 = new Contoh2() ; 
    echo $obj4->Halo() ; //hallo 1 kali.
    echo $obj4->Halo() ; //hallo 2 kali.
    echo $obj4->Halo() ; //hallo 3 kali.






?>