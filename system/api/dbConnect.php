<?php

/*
 * All database connection variables
 */

define('DB_USER', "alyaum_promosbh"); // db user
define('DB_PASSWORD', "ioqis43cy41o"); // db password (mention your db password here)
define('DB_DATABASE', "alyaum_promosbh");  // database name
define('DB_SERVER', "localhost"); // db server

// define('DB_USER', "alyaum_promosbh"); // db user
// define('DB_PASSWORD', "ioqis43cy41o"); // db password (mention your db password here)
// define('DB_DATABASE', "emcangroup_sofra"); // database name
// define('DB_SERVER', "localhost"); // db server
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE) or die('Unable to Connect');
?>


