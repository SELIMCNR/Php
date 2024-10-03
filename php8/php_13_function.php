<?php 

    // Fonksiyon Nedir ?

    // Built-in Fonksiyonlar : Hazır olarak gelen fonksiyonlardır.

    echo date(('Y/m/d'));

    echo "</br>";

    echo strlen("Merhaba BTK"); // Cümlenin uzunluğunu verir.   

    // 3rd Party Fonksiyonlar : Dışarıdan eklenen fonksiyonlardır.
    // Kullanıcı Tanımlı Fonksiyonlar : Kendi oluşturduğumuz fonksiyonlardır.

    function selamlamaFonksiyonu(){
       for($i=0; $i<5; $i++){
          echo "Merhaba BTK"."<br>";
       }
    }

    selamlamaFonksiyonu();
    selamlamaFonksiyonu();
    selamlamaFonksiyonu();
    echo "</br>";

    function toplama(){
        $a = 20;
        $b = 30;
        $c = $a + $b;
        echo $c;
    }

    toplama();
    echo "</br>";

    // fonskiyon değer döndürme

    function toplama2(){
        $a = 20;
        $b = 30;
        $c = $a + $b;
        return $c;
    }

    $sonuc = toplama2();
    echo $sonuc;
    echo "</br>";


    function sene(){
        return date('Y');
    }

    function yasHesapla2($dogumYili){
        $yas = sene() - $dogumYili;
        return $yas;
    }


    function yasHesapla($dogumYili){
        $yas = date('Y') - $dogumYili;
        return $yas;
    }

    $yas1 = yasHesapla(2000);

    $yas2 = yasHesapla(2000);


    echo "</br>";
    echo "Yaşınız : ".$yas1;
    echo "</br>";
    echo "Yaşınız : ".$yas2;

    function saat (){
        return date('H');
    }

    function selam(){
        if(saat()<12){
            return "Günaydın";
        }
        else {
            return "İyi Günler";
        }

    }
    selam();








?>