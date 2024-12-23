<?php



function kursEkle(&$kurslar, string $baslik, string $altBaslik, string $resim, string $yayinTarihi, int $yorumSayisi = 0, int $begeniSayisi = 0, bool $onay = true) {
    $kurslar[] = array(
        "baslik" => $baslik,
        "altBaslik" => $altBaslik,
        "resim" => $resim,
        "yayinTarihi" => $yayinTarihi,
        "yorumSayisi" => $yorumSayisi,
        "begeniSayisi" => $begeniSayisi,
        "onay" => $onay
    );
}



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
function safe_html($data) {
    if (is_array($data)) {
        // Recursively apply the function for array values.
        return array_map('safe_html', $data);
    }
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>