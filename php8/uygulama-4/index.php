<?php

    $a =10;
    $b =20;
    $c =5;

    // 1- a,b çarpımı ile a,b,c toplamının farkı nedir ? 
        $sonuc = ($a*$b)-($a+$b +$c);
    // 2- a,b,c toplamının mod 3'ü nedir ?
        $sonuc = ($a+$b+$c)%3;
    // 3- b' nin c.kuvvetini hesaplayınız .
        $sonuc = $b**$c ;
    // 4- a için 50-100 arasında kontrolü yapınız.
        $sonuc = ($a>50 and $a<100);
    // 5- a için pozitif çift kontrolü yapınız.
        $sonuc = ($a>0 and $a%2==0);
    // 6- username ve password ile uygulama giriş kontrollü yapınız.
        $username1 = "sadikturan";
        $password = "1234";
         $sonuc = ($username1 =="sadikturan" and $password=="1234");
    // 7- a,b,c için büyüklük kontrollü yapınız.
        $sonuc =($a > $b and $a >$c);
        $sonuc =($b > $a and $b>$c);
        $sonuc =($c > $a and $c >$b);
    // 8- 2 vize(%60) ve final(%40) notuna göre ortalama hesaplayınız. 
    //   a- Eğer ort > 50 üzerimde geçti değilse kaldı.
    //   b- Geçmek için ort 50 olsa bile final not en az 50 olma.
    //   c- Geçmek için finalden 70 alındığında ort önemi olmasın.

    $vize1 = 80;
    $vize2 = 90;
    $final = 40;

    $ortalama = (($vize1+$vize2)/2) *0.6 + ($final*0.4);
    $gecmeDurumu = ($ortalama>=50 or $final>=70);
    echo $ortalama."<br>";
    echo "geçme durumu : ".(int)$gecmeDurumu;

?>