<?php
require_once 'DBconfig.php';

//creating an array of the new user data
print_r($_GET);


//creating variables from the form text fields
$firstName = $_GET['firstName'];
$lastName = $_GET['lastName'];
$username = $_GET['username'];
$email = $_GET['email'];
$password = $_GET['psw'];

echo "<br> New User Confirmation Page <br>";

// Check connection
if (!$dbconn) {
    die("<br> Connection failed: " . mysqli_connect_error()); //error message is connection fails
}
echo "New User created successfully";
echo "<br> Click <a href= 'login.html'>here</a> to return"."<br><br>";

//inserts new data into database (users)
$sql_statement = "INSERT INTO `users` ( `firstname`, `lastname`, `username`, `email`, `password`, `Admin`) VALUES ('$firstName', '$lastName', '$username', '$email', '$password', '0')";

if (mysqli_query($dbconn, $sql_statement)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql_statement . "<br>" . mysqli_error($dbconn);//error if connection fails
}

mysqli_close($dbconn);
?>

