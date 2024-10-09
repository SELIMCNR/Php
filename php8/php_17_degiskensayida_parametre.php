<?php 

    $sayilar = array(10,20,30,40);

    function toplam ($sayilar) {
        $toplam = 0;
        foreach ($sayilar as $sayi) {
            $toplam += $sayi;
        }
        echo "Toplam: ".$toplam;
    }

    echo toplam($sayilar);


    

    function toplam1 (...$sayilar) {
        $toplam = 0;
        foreach ($sayilar as $sayi) {
            $toplam += $sayi;
        }
        echo "Toplam: ".$toplam;
    }

    echo toplam1(10,20,30,40,50,60,70,80,90,100);
    

?>