<?php

require_once 'DBconfig.php';

$itemToDelete = $_GET['productID'];
$userToDelete = $_GET['userid'];

//Admin deleting items from product list
$sql_statement = "DELETE FROM `items` WHERE `items` .`ID` = '$itemToDelete'";

if ($dbconn){
    $result = mysqli_query($dbconn, $sql_statement);
    if($result) {
        echo "Deleted item " . $itemToDelete . "<br>";
        echo "Click <a href= 'index.php'>here</a> to return"."<br><br>";
        
        while ($row = mysqli_fetch_assoc($result)) {
           
        }
    } else {
        echo "Error with the SQL " . mysqli_error($dbconn);
    }
}   else {
    echo "Error connecting" . mysqli_connect_error();
}

// Admin deleting user
$sql_statement_user = "DELETE FROM `users` WHERE `users` .`id` = '$userToDelete'";

if ($dbconn){
    $result_user = mysqli_query($dbconn, $sql_statement_user);
    if($result_user) {
        echo "Deleted user " . $userToDelete . "<br>";
        echo "Click <a href= 'index.php'>here</a> to return"."<br><br>";
        
        while ($row = mysqli_fetch_assoc($result_user)) {
            
        }
    } else {
        echo "Error with the SQL " . mysqli_error($dbconn);
    }
}   else {
    echo "Error connecting" . mysqli_connect_error();
}


?>