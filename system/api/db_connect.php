<?php
require_once __DIR__ . '/db_config.php';

$con = mysqli_connect("localhost", "alyaum_promosbh", "ioqis43cy41o", "alyaum_promosbh");
mysqli_query($con, "set character_set_server='utf8'");
mysqli_query($con, "set names 'utf8'");
