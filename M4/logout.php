<?php
//This file logs out the user and destroys the session.
 
session_start();

$_SESSION = array();

session_destroy();
echo "You have been logged out <p>";

echo "To return, <a href='login.html'> login here </a>";
exit;


?>