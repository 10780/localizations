<?php
$locale = false;
if (isSet($_GET["locale"])){
$locale = $_GET["locale"];
//save a cookie
setcookie(“locale”, $locale, time()+60*60*24*30, “/”);
}
if (!$locale && isSet($_COOKIE["locale"])){
$locale = $_COOKIE["locale"];
}
//needed on some systems
putenv(“LC_ALL=$locale”);
putenv(“LANGUAGE=$locale”);
setlocale(LC_ALL, $locale);
bindtextdomain(“messages”, “./locale”);
bind_textdomain_codeset(“messages”, ‘UTF-8′);
textdomain(“messages”);
?>