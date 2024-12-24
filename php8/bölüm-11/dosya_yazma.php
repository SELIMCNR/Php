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


$myFile = fopen("dosya2.txt", "a");  //dosyayı aç

$title = "Php dersleri \n";

fwrite($myFile, $title);  // dosyaya yaz başlık değişkeninde bilgiyi

fclose($myFile);  // dosyayı kapat

$myFile = fopen("dosya2.txt", "r");  //dosyayı aç


while (!feof($myFile)) {
  echo fgets($myFile) . "<br>"; // dosyayı oku
}

fclose($myFile);  // dosyayı kapat

//a+ hem oku  hem yaz
$myFile2 = fopen("dosya3.txt", "a+");
$title2 = "Java dersleri \n";

fwrite($myFile2, $title2);

fseek($myFile2, 0); // cursoru başa al sayfayı yenile.

while (!feof($myFile2)) {
  echo fgets($myFile2) . "<br>";
}
fclose($myFile2);
