<?php 

    # 1- Kendisine gönderilen bir kelimeyi belirtilen kez ekrana yazdıran fonksiyonu yazınız.       

    function yazdir($kelime, $adet){
        for($i = 0; $i < $adet; $i++){
            echo $kelime . "<br>";
        }
    }

    yazdir("Merhaba", 5);

    # 2 - Dikdörtgenin alanını ve çevresini hesaplayan fonksiyonu yazınız.
        
    function alanCevreHesapla($kisaKenar, $uzunKenar){
        $alan = $kisaKenar * $uzunKenar;
        $cevre = 2 * ($kisaKenar + $uzunKenar);
        return "Alan: "+ $alan + "Çevre "+ $cevre;
    }
    echo alanCevreHesapla(5, 10);

    # 3 - Yazı tura uygulaması yapınız. Fonksiyon ile kaç kere yazı tura atılacağını belirleyen ve kaç kere yazı ve kaç kere tura geldiğini ekrana yazdıran uygulamayı yapınız. 

        function yaziTuraAt(){
            $sayi = rand(1,100);
            if($sayi % 2 == 0){
                return "Yazı";
            }
            else{
                return "Tura";
            }
        }
        yaziTuraAt();
    # 4 - Kendisine gönderilen bir sayının tam bölenlerini bir diziye ekleyen ve bu diziyi return eden fonksiyonu yazınız.
        function tamBolenleriBul($sayi){
            $tamBolenler = array();
            for($i = 2; $i < $sayi; $i++){
                if($sayi % $i == 0){
                   array_push($tamBolenler, $i);
                }
            }
            return $tamBolenler;
        }
        print_r(tamBolenleriBul(50));
        print_r(tamBolenleriBul(20));


?>