<?php


$_COOKIE['lang'] ? : setcookie("lang", "en", time() + 60 * 60 * 24 * 2, '/');

// print_r($_COOKIE);

$site_url = "http://www.promosbh.com/newsite/";

$payment_url = "http://www.promosbh.com/newsite/";
////
//$site_url = "http://localhost/aljazira/Arabic-coffee/";
//$payment_url = "http://localhost/aljazira/Arabic-coffee/";
?>