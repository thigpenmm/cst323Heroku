<?php
session_start();
require_once 'showTopMenu.php';


if ($_SESSION ['Role'] != '1') {
    echo "You do not have permissions for this page. Please login as an administrator.";
    exit;
}

// creating variables
$prodNo = $_POST['prodNo'];
$prodDesc = $_POST['prodDesc'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$photo = $_POST['photo'];

//starting a new session

require('DBconfig.php');
//inserts new data into database (items)
$sql_statement = "INSERT INTO `items` (`ITEM_NO`,`PROD_DESC`,`PRICE`,`QUANTITY`,`PHOTOS`) VALUES ('$prodNo', '$prodDesc','$price','$quantity');";

if (mysqli_query($dbconn, $sql_statement)) {
    echo "One item has been added to the catalog: " . $prodDesc ."<br><br>";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($dbconn);//error if connection fails
}


mysqli_close($dbconn);
?>
