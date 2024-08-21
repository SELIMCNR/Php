<?php 

$kategoriler = array("Programlama","Web Geliştirme","Veri Analizi","Ofis Uygulamaları");

sort($kategoriler);

$kurslar = array(
    "0" => array(
        "baslik" => "Php Kursu",
        "aciklama" =>"Sıfırdan ileri seviye Php ile web geliştirme",
        "resim" => "1.jpeg",
        "yayınTarihi" => "2022-03-04",
        "yorumSayisi" => "100",
        "begeniSayisi" => "300",
    ),
    "1" => array(
        "baslik" => "Python Kursu",
        "aciklama" =>"Sıfırdan ileri seviye Python",
        "resim" => "2.jpeg",
        "yayınTarihi" => "2022-05-04",
        "yorumSayisi" => "100",
        "begeniSayisi" => "300",
    ),
    "2" => array(
        "baslik" => "Node.js Kursu",
        "aciklama" =>"Sıfırdan ileri seviye Node.js programlama",
        "resim" => "3.jpeg",
        "yayınTarihi" => "2022-04-04",
        "yorumSayisi" => "200",
        "begeniSayisi" => "500",
    ),
);
$yenifilm = array();
$kurslar[3] = $yenifilm;






$kurs1_url = str_replace(["","ç","@","-"],["-","c","-"],strtolower($kurslar["0"]["baslik"]));
$kurs2_url = str_replace(["","ç","@","-"],["-","c","-"],strtolower($kurslar["1"]["baslik"]));
$kurs3_url = str_replace(["","ç","@","-"],["-","c","-"],strtolower($kurslar["2"]["baslik"]));

$title = 'Hello, World!';
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
 




    <div class="container my-3">
        <div class="row">
        <div class="col-3">
            <div class="list-group">
                <a href="#"class="list-group-item list-group-item-action
                active">
                    <?php echo $kategoriler[0]; ?> 
                </a>
                <a href="#"class="list-group-item list-group-item-action">
                    <?php echo $kategoriler[1]; ?> 
                </a>
                <a href="#"class="list-group-item list-group-item-action">
                    <?php echo $kategoriler[2]; ?> 
                </a>
                <a href="#"class="list-group-item list-group-item-action">
                    <?php echo $kategoriler[3]; ?> 
                </a>
             </div>
        </div>
      <div class="col-9">
         <h1 class="mb-3">
            <?php echo $title; ?> </h1>
         </h1>
         <p class="lead">
            <?php count($kategoriler) ?> kategoride <?php count($kurslar) ?> kurs listelenmiştir.
         </p>
         <div class="card mb-3">
            <div class="row">
                <div class="col-4">
                <img src="img/<?php echo $kurslar["0"]["resim"]; ?>" alt="" class="img-fluid rounded-start">

                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                        <a href="<?php echo $kurs1_url; ?>">
                        <?php echo $kurslar["0"]["baslik"]; ?></h5>
                        </a>  
                    
                        <p class="card-text">
                        <?php echo $kurslar["0"]["aciklama"]; ?></p>
                        <span class="badge rounded-pill text-bg-primary"><?php echo "Beğeni".$kurslar["0"]["begeniSayisi"]; ?></span> 
                       
                       <span class="badge rounded-pill text-bg-primary"><?php echo "Yorum".$kurslar["0"]["yorumSayisi"]; ?></span> 
                      
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-4">
                <img src="img/<?php echo $kurslar["1"]["resim"]; ?>" alt="" class="img-fluid rounded-start">

                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                        <a href="<?php echo $kurs2_url; ?>">
                        <?php echo $kurslar["1"]["baslik"]; ?></h5>
                        </a>  
                    
                        <p class="card-text">
                        <?php echo $kurslar["1"]["aciklama"]; ?></p>
                        <span class="badge rounded-pill text-bg-primary"><?php echo "Beğeni".$kurslar["1"]["begeniSayisi"]; ?></span> 
                       
                       <span class="badge rounded-pill text-bg-primary"><?php echo "Yorum".$kurslar["1"]["yorumSayisi"]; ?></span> 
                      
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="row">
                <div class="col-4">
                <img src="img/<?php echo $kurslar["2"]["resim"]; ?>" alt="" class="img-fluid rounded-start">

                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                        <a href="<?php echo $kurs3_url; ?>">
                        <?php echo $kurslar["2"]["baslik"]; ?></h5>
                        </a>  
                    
                        <p class="card-text">
                        <?php echo $kurslar["2"]["aciklama"]; ?></p>
                        <span class="badge rounded-pill text-bg-primary"><?php echo "Beğeni".$kurslar["2"]["begeniSayisi"]; ?></span> 
                       
                       <span class="badge rounded-pill text-bg-primary"><?php echo "Yorum".$kurslar["2"]["yorumSayisi"]; ?></span> 
                      
                </div>
            </div>
        </div>
    
      </div>
        </div>
    
    </div>    
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
