<?php

/*
  fopen("dosya_ismi","dosya açma modu");

  dosya açma modlar : 
  r:  Dosya okuma modunda açılır . İmleç dosyanın başında yer alır
  w:  Dosya yazma modunda açılır . İmleç dosyanın başında yer alır.Dosya konumdaysa içindeki tüm veriler silinir.
  a:  Dosya yazma modunda açılır . İmleç dosya sonundadır.Dosyaya ekleme yapılır. Dosya konumda yoksa oluşturulur.
  w:  Dosya yazma modunda açılır . Dosya yoksa oluşturulur,varsa False döner.

  r+:  Dosya okuma ve yazma modunda açılır . İmleç dosyanın başında yer alır
  w+:  Dosya okuma ve yazma modunda açılır . İmleç dosyanın başında yer alır.Dosya konumdaysa içindeki tüm veriler silinir.
  a+:  Dosya okuma ve yazma modunda açılır . İmleç dosya sonundadır.Dosya konumda yoksa oluşturulur.
  x+:  Dosya okuma ve yazma modunda açılır . Dosya yoksa oluşturulur , varsa False döner.

*/


$myFile = fopen("dosya.txt", "r");
$size = filesize("dosya.txt");


echo fread($myFile, $size);  // dosya içeriği kadar veriyi okuma

echo fgets($myFile) . "<br>"; // tüm dosyayı okuma
echo fgets($myFile) . "<br>";
echo fgets($myFile) . "<br>";

while (!feof($myFile)) {
    //döngü yardımı ile veri okuma
    echo fgets($myFile) . "<br>";
}

fclose($myFile); //dosyayı kapatma
