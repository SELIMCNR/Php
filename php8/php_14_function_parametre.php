<?php 

    function selamlama($isim){
        return "Merhaba BTK".$isim."<br>";
    }

  echo  selamlama("Selim");


  function toplama($sayi1, $sayi2){
      return $sayi1 + $sayi2;
  }
    echo toplama(10, 20);
    echo "</br>";
    echo toplama(10, 20);

    function yasHesapla($dogumYili){
        return date("Y") - $dogumYili;
    }   

    echo yasHesapla(2000);

    function emekliliğeKacYılKaldı($dogumYili,$isim){
        $dogumYili = yasHesapla($dogumYili);

        $kalanSure = 65 - $dogumYili;
        if ($kalanSure > 0){
            return $isim." adlı kişinin emekliliğine ".$kalanSure." yıl kaldı";                     
    }
    else{
        return "Zaten emekli olmuşsunuz";
    }
    
   echo emekliliğeKacYılKaldı(2000, "Selim");
}





?>