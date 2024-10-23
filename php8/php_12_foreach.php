<?php

    $ogrenciler = array("Kadir","Mehmet","Ali","Veli");

    foreach($ogrenciler as $ogrenci){
        echo $ogrenci."<br>";
    }   

    $urunler = array(
        array("iphone 14",30000),
        array("iphone 15",40000),
        array("iphone 16",50000));

    foreach($urunler as $urun){
        echo $urun[0]." ".$urun[1]."<br>";
    } 
    
    $urunler1 = array(
        "100" => array(
           "urun_adi"=> "iphone 14",
           "fiyat"=> 30000),
        "101" => array(
            "urun_adi"=> "iphone 15",
            "fiyat"=> 40000),
        "102" => array(
            "urun_adi"=> "iphone 16",
            "fiyat"=> 50000),
        );  

     foreach($urunler1 as $urun => $value ){
        echo " ".$value["urun_adi"]." ".$value["fiyat"]."<br>";    
     }   



?>