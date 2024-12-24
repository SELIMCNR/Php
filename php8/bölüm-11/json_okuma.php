<?php
/*
Json array dizisi 
[
    {
            "title" : "php kursu",
            "description": "ileri seviye php dersleri",
            "image" : "1.jpg"
    },
    {
        "title" : "php kursu",
        "description": "ileri seviye php dersleri",
        "image" : "1.jpg"
    }

]

*/

$myFile = fopen("course.json", "r");
$size = filesize("course.json");

$jsonString = fread($myFile, $size);
echo $jsonString;
echo "<br>";
echo gettype($jsonString); // tip bilgisi verinin
echo "<br>";

//string to array => decode
$jsonArray = json_decode($jsonString, true);  // json içerisindeki : 'ları => buna donüştürür diziye

echo $jsonArray["title"];
echo "<br>";
echo $jsonArray["description"];
echo "<br>";
echo $jsonArray["image"];
