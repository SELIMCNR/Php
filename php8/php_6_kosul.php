<?php

    // Koşullu Durumlar
       
    // 1- if-else
    // 2- switch-case
    // 3- ternary operator

    $username = "admin";
    $password = "1234";

    if(username == "admin"){
        if($password == "1234"){
            echo "Hoşgeldiniz";
    }
    else {
        echo "şifre hatalı";
    }
    }
    else {
        echo "Kullanıcı adı hatalı";
    }

    $saat = 14;
    if($saat >= 6 && $saat < 11){
        echo "Günaydın";
    }
    elseif($saat >= 11 && $saat < 17){
        echo "iyi günler";
    }
    else {
        echo "İyi akşamlar";
    }




?>