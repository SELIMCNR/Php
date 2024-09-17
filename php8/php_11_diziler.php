<?php 

    $ogrenciler = array("Kadir","Mehmet","Ali","Veli"); 
   /*
    echo $ogrenciler[0]."<br>";
    echo $ogrenciler[1]."<br>";
    echo $ogrenciler[2]."<br>";
    */

    for ($i = 0; $i<count($ogrenciler);$i++){
        echo $ogrenciler[$i]."<br>";
    }   


    $i=0;
    while($i<count($ogrenciler)){
        echo $ogrenciler[$i]."<br>";
        $i++;
    }   

    $urunler = array(
        array("iphone 14",30000),
        array("iphone 15",40000),
        array("iphone 16",50000));     

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


    for ($i = 0; $i<count($urunler);$i++){
       // print_r($urunler[$i]);  : prints the array elements in the array   
        echo $urunler[$i][0]." ".$urunler[$i][1]."<br>";
    }

    $keys = array_keys($urunler1);
    for ($i = 0; $i<count($urunler1);$i++){
        echo $urunler1[$keys[$i]]["urun_adi"]." ".$urunler1[$keys[$i]]["fiyat"]."<br>";
    }

?>