<?php 

  // reference
  // value

  function toplama($sayi){
    $sayi +=10;             // value tipte
    echo $sayi."<br>";
  }

  $ornekSayi=5;
  toplam($ornekSayi);  // fonksiyonda value değer gelir

  echo $ornekSayi;  // globaldeki değişken değeri gelir

  
  function toplama1(&$sayi){
    $sayi +=10;             // value tipte
    echo $sayi."<br>";
  }

  $ornekSayi=5;
  toplam($ornekSayi);  // fonksiyonda reference değer gelir

  echo $ornekSayi;  // reference değeri gelir


  function yasHesapla(&$tarihler){
        for($i=0;$i<count($tarihler); $i++){
          $tarihler[$i]=2023-$tarihler[$i];
        }
        return $tarihler;
  }

  $liste = array(1990,1985,2000);

  echo "<pre>";
  print_r(yasHesapla($liste));
  print_r($liste);
  echo "</pre>";

  

    

?>