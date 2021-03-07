<?php

define('dbservername', 'localhost');
define('dbusername', 'root');
define('dbpassword', 'root');
define('database', 'store');
define('port','3307');

$dbconn = mysqli_connect(dbservername,dbusername, dbpassword, database, port);


if ($dbconn == false)
{
    die ("Could not connect.". mysqli_connect_error());
}


//function to start a session with the valid user id
function saveUserId($id)
{
    session_start();
    $_SESSION["USER_ID"] = $id;
}

function getUserId()
{
    session_start();
    return $_SESSION["USER_ID"];
}

?>

