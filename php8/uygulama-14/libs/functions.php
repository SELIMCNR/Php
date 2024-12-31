<?php

function getDb()
{
    if (!file_exists("db.json") || filesize("db.json") == 0) {
        return ["kurslar" => []]; // Varsayılan yapı
    }
    $myFile = fopen("db.json", "r");
    $size = filesize("db.json");
    $data = json_decode(fread($myFile, $size), true);
    fclose($myFile);
    return $data ?: ["kurslar" => []]; // JSON parse hatası için varsayılan yapı
}




function kursEkle(string $baslik, string $altBaslik, string $resim, string $yayinTarihi, int $yorumSayisi = 0, int $begeniSayisi = 0, bool $onay = true)
{
    $db = getDb();

    // Kurs ekle
    array_push($db["kurslar"], array(
        "baslik" => $baslik,
        "altBaslik" => $altBaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "onay" => $onay
    ));

    // Yazma işlemi
    $myFile = fopen("db.json", "w");
    if ($myFile === false) {
        die("Dosya yazılamıyor!");
    }
    $result = fwrite($myFile, json_encode($db, JSON_PRETTY_PRINT));
    fclose($myFile);

    if ($result === false) {
        die("Dosyaya yazma başarısız!");
    }
}


function urlDuzenle($baslik)
{
    return str_replace([" ", "ç", "@", "."], ["-", "c", "", "-"], strtolower($baslik));
}

function kisaAciklama($altBaslik)
{
    if (strlen($altBaslik) > 50) {
        return substr($altBaslik, 0, 50) . "...";
    } else {
        return $altBaslik;
    }
}
function safe_html($data)
{
    if (is_array($data)) {
        // Recursively apply the function for array values.
        return array_map('safe_html', $data);
    }
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
