<?php

session_start();

$_SESSION["username"] = "selim";
$_SESSION["password"] = "1907fenerbahce";

if (isset($_SESSION["username"])) {
    echo $_SESSION["username"];
    echo $_SESSION["password"];
    print_r($_SESSION);
} else {
    echo "username yok";
}

unset($_SESSION["username"]);  // sessions siler
session_unset();
$_SESSION = [];

//php.ini maxlifetime = 1440 24 dakika buradan değiştirilebilir.
