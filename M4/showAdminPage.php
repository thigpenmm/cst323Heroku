<?php

session_start();
require_once 'showTopMenu.php';
require_once 'DBconfig.php';

if ($_SESSION ['Role'] != '1') {
    echo "You do not have permissions for this page. Please login as an administrator.";
    exit;
}

//hides editing and deleting options from users that are not admins
$sql_users = "SELECT * FROM `users`";
if ($dbconn){
   $result_users = mysqli_query($dbconn, $sql_users);
    if($result_users) {
        while ($row = mysqli_fetch_assoc($result_users)) {
            echo "User#: " . $row['id'] . "<br>";
            echo "Username: " . $row['username'] . "<br>";
            ?>
            <form action="processDeleteItem.php">
            <input type="hidden" name= "userid" value="<?php echo $row['id']?>"></input>
            <button type="submit">Delete</button>
            </form>
            <form action="edit.php">
            <input type="hidden" name= "userid" value="<?php echo $row['id']?>"></input>
            <button type="submit">Edit</button><p>
            </form>
            <?php 
            echo ":::::::::::::::::<br><br>";
        }
    } else {
        echo "Error with the SQL " . mysqli_error($dbconn);
    }
}   else {
    echo "Error connecting" . mysqli_connect_error();
}


//hides editing and deleting options from users that are not admins
$sql_statement = "SELECT * FROM `items`";

if ($dbconn){
    $result = mysqli_query($dbconn, $sql_statement);
    if($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Product ID: " . $row['ID'] . "<br>";          
            echo "Product Desc: " . $row['PROD_DESC'] . "<br>";
            echo "Price: " . $row['PRICE'] . "<br>";
            echo "Quantity: " . $row['QUANTITY'] . "<br>";
            ?>
            <form action="processDeleteItem.php">
            <input type="hidden" name= "productID" value="<?php echo $row['ID']?>"></input>
            <button type="submit">Delete</button>
            </form>
            <form action="edit.php">
            <input type="hidden" name= "productID" value="<?php echo $row['ID']?>"></input>
            <button type="submit">Edit</button><p>
            </form>
            <?php 
            echo "::::::::::::::::::::::::::<br><br>";
        }
    } else {
        echo "Error with the SQL " . mysqli_error($dbconn);
    }
}   else {
    echo "Error connecting" . mysqli_connect_error();
}

?>