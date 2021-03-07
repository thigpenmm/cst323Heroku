<?php
session_start();
require_once 'showTopMenu.php';
require_once 'DBconfig.php';

//only Admin users will have access to this page
if ($_SESSION ['Role'] != '1') {
    echo "You do not have permissions for this page. Please login as an administrator.";
    exit;
}

$id = $_GET['userid'];

echo "Editing user# " . $id ."<br>";



    $sql_statement = "SELECT * FROM `users` WHERE `id` = '$id' LIMIT 1";
    
    if ($dbconn){
        $result = mysqli_query($dbconn, $sql_statement);
        if($result) {
            while ($row = mysqli_fetch_assoc($result)) {
            $user = $row['username'];
            $admin = $row['Admin'];
            $password = $row['password'];
            }
        }
        
} else {
    echo "error connecting" . mysqli_connect_error();
}
?>

<html>
<link rel="stylesheet" type="text/css" href=" styles.css">

<div class="form-container">
<h2> Edit a user </h2>
<p> Fill in your changes and submit </p>
<form method="POST" action="processEditItem.php">
<input type="hidden" name = "userid" value = "<?php echo $id;?>"></input>
    Username: <input type= "text" name="username" value="<?php echo $user;?>"></input><br><br>
    Password: <input type="text" name="password" value="<?php echo $password;?>"></input><br><br>
Admin Status: <input type="text" name="role" value="<?php echo $admin;?>"></input><br><br>

      <button type="submit">Submit Changes</button>
  
</form>
</div>
<?php

$productID = $_GET['id'];

echo "Editing Product# " . $productID ."<br>";


    $sql_statement_posts = "SELECT * FROM `items` WHERE `ID` = '$productID' LIMIT 1";
    
    if ($dbconn){
        $result_posts = mysqli_query($dbconn, $sql_statement_posts);
        if($result_posts) {
            while ($row = mysqli_fetch_assoc($result_posts)) {
                $prodNo = $row['prodNo'];
                $prodDesc = $row['prodDesc'];
                $price = $row['price'];
                $quantity = $row['quantity'];
            }
            }
            }
 else {
    echo "error connecting" . mysqli_connect_error();
}
?>
<div class="form-container">
<h2> Edit a Product Item </h2>
<p> Fill in your changes and submit </p>
<form method="POST" action="processEditItem.php">
<input type="hidden" name = "id" value = "<?php echo $productID;?>"></input>
  Product No: <input type= "text" name="prodNo" value="<?php echo $prodNo;?>"></input><br><br>
  Product Desc: <input type="text" name="prodDesc" value="<?php echo $prodDesc;?>"></input><br><br>
  Product Price: <input type="text" name="price" value="<?php echo $price;?>"></input><br><br>
  Product Quantity: <input type="text" name="quantity" value="<?php echo $quantity;?>"></input><br><br>

      <button type="submit">Submit Changes</button>
  
</form>
</div>

</html>