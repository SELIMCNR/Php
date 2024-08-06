<?php 

// Diziler (Array)

// 1- Numeric Arrays

$renk1 = "Kırmızı";
$renk2 = "Mavi";
$renk3 = "Sarı";

$renkler = array("Kırmızı","Mavi","Sarı");

echo gettype($renkler)."<br>";

echo $renkler[0]."<br>";
echo $renkler[1]."<br>";
echo $renkler[2]."<br>";

$sayilar = array(18,23,32,45,59);

echo $sayilar[0]."<br>";
echo $sayilar[1]."<br>";

// 2- associative arrays (key-value)
$plakalar_bilgileri = array("41" => "kocaeli","53"=>"Rize","34" => "istanbul");

echo $plakalar_bilgileri["41"]."<br>";
echo $plakalar_bilgileri["53"]."<br>";
echo $plakalar_bilgileri["34"]."<br>";


$telefon_rehberi = array(
    "a1" => "53244444",
    "a2" => "44444",
    "a3" => "12345"
);

echo $telefon_rehberi["a1"];
echo $telefon_rehberi["a2"];
echo $telefon_rehberi["a3"];


// 3-çok boyutlu dizi
$ogrencia = array("ayılmaz",array(50,80,90));
$ogrencib = array("ayılmaz",array(60,70,50));

$ogrenciA_ortalama = ($ogrencia[1][0]+$ogrencia[1][1]+$ogrencia[1][2])/3;
$ogrenciB_ortalama = ($ogrencib[1][0]+$ogrencib[1][1]+$ogrencib[1][2])/3;

echo $ogrencia[0]."<br>";
echo $ogrencia[1][0]."<br>";
echo $ogrencia[1][1]."<br>";
echo $ogrencia[1][2]."<br>";
echo $ogrenciA_ortalama."<br>";


echo $ogrencib[0]."<br>";
echo $ogrencib[1][0]."<br>";
echo $ogrencib[1][1]."<br>";
echo $ogrencib[1][2]."<br>";
echo $ogrenciB_ortalama."<br>";


$sinif = array("100" => array(

            "ad" => "lütfi",
            "soyad" => "yılmaz",
            "notlar" => array(
                "matematik" => array(50,70,80),
                "fizik" => array(50,70,80),
                "kimya" => array(50,60,90)
            ),
        
        ),"200" => array(

            "ad" => "hale",
            "soyad" => "yıldız",
            "notlar" => array(
                "matematik" => array(50,70,80),
                "fizik" => array(50,70,80),
                "kimya" => array(50,60,90)
            ),
        
)

);



echo $sinif["100"]["ad"]."<br>";
echo $sinif["100"]["soyad"]."<br>";
echo $sinif["100"]["notlar"]["matematik"][0]."<br>";
echo $sinif["100"]["notlar"]["matematik"][1]."<br>";
echo $sinif["100"]["notlar"]["matematik"][2]."<br>";


echo $sinif["200"]["notlar"]["kimya"][0]."<br>";
echo $sinif["200"]["notlar"]["kimya"][1]."<br>";
echo $sinif["200"]["notlar"]["kimya"][2]."<br>";


//Dizi fonksiyonları

echo count($sinif["200"]["notlar"]["matematik"]);



?>

