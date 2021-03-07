<?php
 session_start();
 
 
 require_once 'DBconfig.php';
 
// creating variables
 $user = $_GET['username'];
 $admin = $_GET['role'];
 $password = $_GET['password'];
 $id = $_GET['userid'];

 //inserts updated data into database (users)
 $sql_users = "UPDATE `users` SET `password`='$password',`username`='$username',`Admin`='$admin' WHERE `users`.`id`= '$id'";
 
 
 if (mysqli_query($dbconn, $sql_users)) {
     echo "<b> Users </b>". "<br><br>";
     echo "User has been updated successfully"."<br><br>";
     echo "Click <a href= 'index.php'>here</a> to return"."<br><br>";
 } else {
     echo "Error: " . $sql_users . "<br>" . mysqli_error($dbconn);//error if connection fails
 }
 

 
 // creating variables
 $prodNo = $_GET['prodNo'];
 $prodDesc = $_GET['prodDesc'];
 $price = $_GET['price'];
 $quantity = $_GET['quantity'];

 
 //inserts updated data into database (items)
 $sql_statement_items= "UPDATE `items` SET `ITEM_NO`='$prodNo', `PROD_DESC`='$prodDesc', `PRICE` ='$price', `QUANTITY` = '$quantity' WHERE `items`.`ID`='$productID'";
 
 if (mysqli_query($dbconn, $sql_statement_items)) {
     echo "<b> Products </b>". "<br><br>";
     echo "This item has updated successfully"."<br><br>";
 } else {
     echo "Error: " . $sql_statement_items . "<br>" . mysqli_error($dbconn);//error if connection fails
 }
 
 
mysqli_close($dbconn);
?>