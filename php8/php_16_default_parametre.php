<?php 

    function selamlama($isim = "Ziyaretçi",$mesaj = "Merhaba"){ # Default parametrelere değer ataması yapılabilir
        echo  $mesaj."".$isim . " " ;
    }

   $sonuc= selamlama("Selim","günaydın");
   $sonuc= selamlama("Selim");

   

    function kareAl($taban=1,$us=1){  # Default parametreler sağdan başlamak zorunda
        return pow($taban,$us);
    }
    $sonuc = kareAl(2,3);
    echo $sonuc;

    

?>