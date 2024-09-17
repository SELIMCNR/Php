<?php
 
        $sayi  = 5;

        if($sayi ==5){
            echo "Sayı 5'tir";
        }
        else if($sayi == 6){
            echo "Sayı 6'dır";
        }
        else if($sayi == 7){
            echo "Sayı 7'dir";
        }
        else{
            echo "Sayı 5,6,7 değildir";
        }   

        switch ($sayi) {
            case 5:
                echo "Sayı 5'tir";
                break;
            case 6:
                echo "Sayı 6'dır";
                break;
            case 7:
                echo "Sayı 7'dir";
                break;
            default:
                echo "Sayı 5,6,7 değildir";
                break;
        }          
        
        $not = 60;
        if($not >=0 and $not<25){
            echo "notunuz : 0";
        }
        else if($not >=25 and $not<45){
            echo "notunuz : 1";
        }
        else if($not >=45 and $not<55){
            echo "notunuz : 2";
        }
        else if($not >=55 and $not<70){
            echo "notunuz : 3";
        }
        else if($not >=70 and $not<85){
            echo "notunuz : 4";
        }
        else if($not >=85 and $not<=100){
            echo "notunuz : 5";
        }
        else{
            echo "Geçersiz not";
        }
      

        switch ($not) {
            case $not >=0 and $not<25:
                echo "notunuz : 0";
                break;
            case $not >=25 and $not<45:
                echo "notunuz : 1";
                break;
            case $not >=45 and $not<55:
                echo "notunuz : 2";
                break;
            case $not >=55 and $not<70:
                echo "notunuz : 3";
                break;
            case $not >=70 and $not<85:
                echo "notunuz : 4";
                break;
            case $not >=85 and $not<=100:
                echo "notunuz : 5";
                break;
            default:
                echo "Geçersiz not";
                break;
        }       


        $ay = "temmuz";

        switch($ay){
            case "aralık":
            case "ocak":
            case "şubat":
                echo "Kış Mevsimi";
                break;
            case "mart":
            case "nisan":
            case "mayıs":
                echo "İlkbahar Mevsimi";
                break;
            case "haziran":
            case "temmuz":
            case "ağustos":
                echo "Yaz Mevsimi";
                break;
            case "eylül":
            case "ekim":
            case "kasım":
                echo "Sonbahar Mevsimi";
                break;
            default:
                echo "Geçersiz Ay";
                break;                                                 
        }

?>