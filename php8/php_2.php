<?php 


    //Strings
    $ad ="Selim";
    $soyad = "Çınar";
    $no = 46;


    $mesaj = "My name is ".$ad.' '.$soyad." and ".$yas." years old .";



    echo $mesaj."<br>";
    echo $mesaj[0]."<br>"; //M
    echo $mesaj[5]."<br>"; //m

    //string fonksiyonları
    echo strlen($mesaj);
    echo str_word_count($mesaj)."<br>";
    echo strtolower($mesaj)."<br>";
    echo ucfirst($mesaj)."<br>";
    echo str_replace(["çınar","6"],["sadık","39"],$mesaj);


    //numbers
    $sayı1 =5;
    $sayı2 =3;

    echo "sonuç: ".($sayı1+$sayı2)."<br>";  
    echo "sonuç: ".($sayı1-$sayı2)."<br>";  
    echo "sonuç: ".($sayı1*$sayı2)."<br>";  
    echo "sonuç: ".($sayı1/$sayı2)."<br>";  
    
    $sayı3=8;

    echo "sonuç: ".(($sayı1+$sayı2)/$sayı3."<br>");

    echo is_int(5);
    echo is_int(5.2);
    echo var_dump( is_int(5))."<br>"; 
    echo var_dump( is_int(5.2))."<br>";


    echo var_dump(is_float(5)."<br>");
    echo  var_dump(is_float(5.2)."<br>");

    echo abs(-10)."<br>";
    echo ceil(4.3)."<br>";
    echo ceil(4.8)."<br>";
    echo floor(4.8)."<br>";
    echo round(4.4)."<br>";

    echo sqrt(25)."<br>";
    echo pow(5,2)."<br>";
    echo max(3,5,6,90)."<br>";
    echo min(3,5,6,90)."<br>";



    //const(sabit)
    const baglantı = "mysql bağlantı cümlesi";
    define("baglantı1","mysql bağlantı cümles");

    const username ="name";
    const password ="1234";


    echo baglantı;
    echo baglantı1;

    echo username;
    echo password;


?>

