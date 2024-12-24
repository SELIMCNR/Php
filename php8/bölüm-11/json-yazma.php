<?php
$course = array(
    "title" => "javascript kursu",
    "description" => "ileri seviye javascript dersleri",
    "image" => "2.jpg",

);

echo $course["title"];

// array => json string encode

$jsonString = json_encode($course, JSON_PRETTY_PRINT); // jsona dönüştür ve pretty:formatlı yaz dosyayı

$myFile = fopen("course2.json", "w");  //dosya aç
fwrite($myFile, $jsonString); // dosya yaz
fclose($myFile);  // dosyayı kapat
