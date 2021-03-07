<?php 
session_start();
require_once 'showTopMenu.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1> Welcome to the Supply Store site.</h1>
         <center>
 
 <h2> Catalog Search </h2>
 <form action = 'search.php' method= 'get'>
 <input type='text' name='query' size='50'/>
 <input type='submit' value='Search by Product'/>
 

 <?php 

$query = $_GET['query'];
// gets value sent over search form
 $conn = mysqli_connect("localhost", "root", "root", "store", "3307");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM items WHERE `PROD_DESC` LIKE '%$query%' OR `PRICE` LIKE '%$query%' OR `QUANTITY` LIKE '%$query%'";
$result = $conn->query($sql);
?>

 </form>
 </center>
    </div>
    <p>
        
    </p>
</body>
</html>

