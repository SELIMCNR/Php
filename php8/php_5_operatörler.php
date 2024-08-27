
<?php

$a = 40;
$b = 20;

//aritmetik operatörler
echo $a + $b ;
echo "<br/>";

echo $a - $b ;
echo "<br/>";

echo $a * $b ;
echo "<br/>";

echo $a / $b ;
echo "<br/>";

echo $a % $b ;
echo "<br/>";

echo $a ** $b ;
echo "<br/>";

echo $a++ ;
echo "<br/>";


echo $a--;
echo "<br/>";

echo $a;
echo "<br/>";


// atama operatörleri
$c = $a;
$d = ($a +10) * 3;

$a +=$b;
$a -=$b;
$a *=$b;
$a /=$b;
$a %=$b;
$a **=$b;
$a .=$b;

echo $a , $b ,$c,$d;

$ad = "Selim";
$soyad = "Çınar";
$ad .= $soyad;
echo $ad;

// Karşılaştırma Operatörleri

$username = "selim çınar";

$sonuc = ($a == $b);
$sonuc = ($username !="selim çınar");
$sonuc = ($a === $b); //veri tipi karşıştırır
$sonuc = ($a !== $b);
$sonuc = ($a > $b);
$sonuc = ($a >= $b);
$sonuc = ($a < $b);
$sonuc = ($a <= $b);
$sonuc = ($a <=> $b); //sayısal verir 0 , 1 olarak. 0 eşittir demek ,1 sağ ,-1 sol büyük

echo var_dump($sonuc);

$yas = 20;
$mezuniyet = "lise";

$sonuc = ($yas>=18 and $mezuniyet=="lise"); //and ve 

$sonuc = ($yas>=18 or $mezuniyet=="lise"); //or veya
$sonuc = ($yas>=18 xor $mezuniyet=="lise"); //xor true = true = false , true =false = true 

$sonuc = !($yas>=18 and $mezuniyet=="lise"); // ! eşit değilse
echo var_dump($sonuc);




echo var_dump($sonuc);

?>