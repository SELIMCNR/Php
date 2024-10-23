<?php 


    declare(strict_types=1);
    function toplama (int $sayi , float $sayi2,bool $isActive, array $sayilar):float{
      return $sayi+$sayi2;
    }

    echo toplama(10,10.5,true,[10,20]);


?>