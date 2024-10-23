<?php

    $yas = 20;
    $egitim ="lise";

    if($yas >= 18){
        if($egitim == "lise" or $egitim == "üniversite"){
            echo "Ehliyet alabilirsiniz";
        }
        else{
            echo "Ehliyet alamazsınız";
        }
    }
    else{
        echo "Yaşınız tutmuyor";
    }

    echo "<br>";

  $sonuc=  ( $yas >= 18 ) ?
  (($egitim =="lise" or $egitim=="üniversite")? "Ehliyet alabilirsiniz" : "Ehliyet alamazsınız") : "Yaşınız tutmuyor";  // ternary operatörü    ? :        
  echo $sonuc;




?>
