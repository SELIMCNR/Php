<?php 

$kategoriler = 
array(
    array( "kategori_adi"=> "Programlama","aktif"=> true),
    array ("kategori_adi"=> "Web Geliştirme","aktif"=>false),
    array("kategori_adi"=> "Mobil Uygulama Geliştirme","aktif"=>false),
    array ("kategori_adi"=> "Oyun Geliştirme","aktif"=>false),
    array ("kategori_adi"=> "Veri Tabanı","aktif"=>false),
    array ("kategori_adi"=> "Veri Analizi","aktif"=>false),
    array ("kategori_adi"=> "Ofis Uygulamaları","aktif"=>false)

);

sort($kategoriler);

$kurslar = array(
    "0" => array(
        "baslik" => "Php Kursu",
        "aciklama" =>"Sıfırdan ileri seviye Php ile web geliştirme kursu",
        "resim" => "1.jpeg",
        "yayınTarihi" => "2022-03-04",
        "yorumSayisi" => 10,
        "begeniSayisi" => 0,
        "onay" => true,
    ),
    "1" => array(
        "baslik" => "Python Kursu",
        "aciklama" =>"Sıfırdan ileri seviye Python",
        "resim" => "2.jpeg",
        "yayınTarihi" => "2022-05-04",
        "yorumSayisi" => 10,
        "begeniSayisi" => 20,
        "onay" => true,
    ),
    "2" => array(
        "baslik" => "Node.js Kursu",
        "aciklama" =>"Sıfırdan ileri seviye Node.js programlama",
        "resim" => "3.jpeg",
        "yayınTarihi" => "2022-04-04",
        "yorumSayisi" => 50,
        "begeniSayisi" => 5,
        "onay" => true,
    ),
    "3" => array(
        "baslik" => "Django Kursu",
        "aciklama" =>"Sıfırdan ileri seviye Django programlama",
        "resim" => "3.jpeg",
        "yayınTarihi" => "2022-04-04",
        "yorumSayisi" => 10,
        "begeniSayisi" => 20,
        "onay" => false,
    ),
    "4" => array(
        "baslik" => "Node.js Kursu",
        "aciklama" =>"Sıfırdan ileri seviye Node.js programlama",
        "resim" => "3.jpeg",
        "yayınTarihi" => "2022-04-04",
        "yorumSayisi" => 20,
        "begeniSayisi" => 5,
        "onay" => true,
    ),
);

function kursEkle(&$kurslar,string $baslik,string $altBaslik,string $resim ,string $yayinTarihi,int $yorumSayisi=0,int $begeniSayisi=0,bool $onay=true ){

    $yeni_kurs[count($kurslar)+1] = array (
        "baslik" => $baslik,
        "altBaslik"=>$altBaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "onay" => $onay
    );
}

kursEkle($kurslar,"yeni kurs 1","yeni kurs altbaşlık 1","1.jpg","10.10.2023");
kursEkle($kurslar,"yeni kurs 2","yeni kurs altbaşlık 2","1.jpg","10.10.2023");

function urlDuzenle($baslik){
    return str_replace(["","ç","@","-"],["-","c","-"],strtolower($baslik));
}

function kisaAciklama($altBaslik){
    if(strlen($altBaslik)>50){
        return substr($altBaslik,0,50)."...";
    }
    else {
        return $altBaslik;
    }
}

$kurs1_altBaslik = ucfirst(strtolower($kurslar["1"]["aciklama"]));
$kurs2_altBaslik = ucfirst(strtolower($kurslar["1"]["aciklama"]));
$kurs3_altBaslik = ucfirst(strtolower($kurslar["1"]["aciklama"]));



$title = "Kurslar";

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

                <?php for ($i=0; $i < count($kategoriler); $i++): ?>    



                <a href="#"class="list-group-item list-group-item-action <?php 
                echo ($kategoriler[$i]["aktif"]) ? "active" : ""; ?>
                ">
                    <?php echo $kategoriler[$i]["kategori_adi"]; ?> 
                </a>
                <?php endfor; ?>
             </div>
        </div>
      <div class="col-9">
         <h1 class="mb-3">
            <?php echo $title; ?> </h1>
         </h1>
         <p class="lead">
            <?php count($kategoriler) ?> kategoride <?php count($kurslar) ?> kurs listelenmiştir.
         </p>
        

         <?php foreach ($kurslar as $key => $kurs): ?>
         <?php   if($kurs ["onay"]): ?>

         <div class="card mb-3">
                    <div class="row">
                        <div class="col-4">
                        <img src="img/<?php echo $kurs["resim"]; ?>" alt="" class="img-fluid rounded-start">

                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                <a href="<?php echo urlDuzenle($kurs["baslik"]); ?>">
                                <?php echo $kurs["baslik"]; ?></h5>
                                </a>  
                            
                                <p class="card-text">
                                <?php echo kisaAciklama($kurs["altBaslik"]); ?></p>
                                <span class="badge rounded-pill text-bg-primary"><?php echo "Beğeni".$kurs["begeniSayisi"]; ?></span> 
                            
                            <span class="badge rounded-pill text-bg-primary"><?php echo "Yorum".$kurs["yorumSayisi"]; ?></span> 
                            
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            
                <?php endforeach; ?>
            </div>
    </div>
            
    </div>    
</div> 
   
 


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
