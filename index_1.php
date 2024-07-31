<?php 

$kurs1_baslik = 'PHP Kursu';
$kurs1_aciklama = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.';   
$kurs1_resim = '1.jpeg';
$kurs1_yayınTarihi = '2022-01-01';
$kurs1_yorumSayisi ="100";
$kurs1_begeniSayisi ="300";

$kurs2_baslik = 'Python Kursu';
$kurs2_aciklama = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.';   
$kurs2_resim = '2.jpeg';
$kurs2_yayınTarihi = '2022-01-01';
$kurs2_yorumSayisi ="100";
$kurs2_begeniSayisi ="300";

$kurs3_baslik = 'Node.js Kursu';
$kurs3_aciklama = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.';   
$kurs3_resim = '3.jpeg';
$kurs3_yayınTarihi = '2022-01-01';
$kurs3_yorumSayisi ="100";
$kurs3_begeniSayisi ="300";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <title>PHP Test</title>
    
</head>
<body>
    <?php
    $urunAdi = 'Kalem';
    $urunFiyati = 100000;
    $kdvOrani = 0.18;
    $satistami = true;

    echo '<p>Ürün Adı: ' . $urunAdi . '</p>' .gettype($urunAdi);
    echo '<br>';
    echo '<p>Ürün Fiyatı: ' . $urunFiyati . '</p>' .gettype($urunFiyati);


    $title = 'Hello, World!';
    echo '<p>Hello World php dersleri</p>'; 
    echo '<br>';
    echo '<p>Kdv orani: ' .$kdvOrani . '</p>' .gettype($kdvOrani) ;  //
    echo '<p>Satış bilgisi :' .$satistami. ' </p>'.gettype($satistami);
    
    $cevir = (int)"100";
    echo '<p class="bg-danger">Çevirilen değer: ' .$cevir." ". gettype($cevir).'</p>' ;
    ?>

    <div class="container my-3">
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                <img src="img/<?php echo $kurs1_resim; ?>" alt="" class="img-fluid rounded-start">

                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs1_baslik; ?></h5>
                        <p class="card-text">
                        <?php echo $kurs1_aciklama; ?></p>
                        <span class="badge rounded-pill text-bg-primary"><?php echo "Beğeni".$kurs1_begeniSayisi; ?></span> 
                       
                       <span class="badge rounded-pill text-bg-primary"><?php echo "Yorum".$kurs1_yorumSayisi; ?></span> 
                      
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                <img src="img/<?php echo $kurs2_resim; ?>" alt="" class="img-fluid rounded-start">

                </div>
                <div class="col-9">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $kurs2_baslik; ?></h5>
                        <p class="card-text">
                        <?php echo $kurs2_aciklama; ?></p>
                        <span class="badge rounded-pill text-bg-primary"><?php echo "Beğeni".$kurs2_begeniSayisi; ?></span> 
                       
                       <span class="badge rounded-pill text-bg-primary"><?php echo "Yorum".$kurs2_yorumSayisi; ?></span> 
                      
                        
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                <img src="img/<?php echo $kurs3_resim; ?>" alt="" class="img-fluid rounded-start">

                </div>
                <div class="col-9">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $kurs3_baslik; ?></h5>
                        <p class="card-text">
                        <?php echo $kurs3_aciklama; ?></p>
                        <p> 
                        <span class="badge rounded-pill text-bg-primary"><?php echo "Beğeni".$kurs3_begeniSayisi; ?></span> 
                       
                       <span class="badge rounded-pill text-bg-primary"><?php echo "Yorum".$kurs3_yorumSayisi; ?></span> 
                    </p>
                        
                </div>
            </div>
        </div>
    </div>    


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
