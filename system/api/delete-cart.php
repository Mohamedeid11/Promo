<?php
/*
 * Following code will create a new product row
 * All product details are read from HTTP Post Request
 */
 
// array for JSON response
$response = array();

// include db connect class
require_once __DIR__ . '/db_connect.php';
 
// connecting to db
$db = new DB_CONNECT();

mysql_query("SET NAMES 'utf8'");

    mysql_query("SET CHARACTER SET utf8");

    mysql_query("SET SESSION collation_connection = 'utf8_unicode_ci'");


    if (isset($_GET['cart_id'])) {

	$cart_id = $_GET['cart_id'];
	
	$result = mysql_query("DELETE FROM `cart` WHERE `cart_id`='$cart_id'");


    $response["product"] = array(); 

	// temp user array
	$product = array();
	
	// push single product into final response array
	array_push($response["product"], $product);
    
	
    // check if row inserted or not
    if ($result) {
        // successfully inserted into database
        $response["success"] = 1;
        $response["message"] = "تم حذف السلة بنجاح!";
 
        // echoing JSON response
        echo json_encode($response);
    } else {
        // failed to insert row
        $response["success"] = 0;
        $response["message"] = "عفوا لقد حدث خطأ.";
 
        // echoing JSON response
        echo json_encode($response);
    }
	
} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "هناك بيانات مفقوده برجاء مراجعة بياناتك";
 
    // echoing JSON response
    echo json_encode($response);
}
?>