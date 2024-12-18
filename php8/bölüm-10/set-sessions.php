<?php

session_start();

$_SESSION["username"] = "selim";
$_SESSION["password"] = "1907fenerbahce";

echo $_SESSION["username"];
echo $_SESSION["password"];
