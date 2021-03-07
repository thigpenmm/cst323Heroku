
<?php
session_start();

require_once 'DBconfig.php';

if ($dbconn){
    $login = $_POST['username'];
    $password = $_POST['password'];
    
    //echo "Connected to " . $dbname . "as" . $username;
    //echo "<br> login name: " . $attemptedLoginName . "<br>" . $attemptedPassword . "<br>";
    $sql_statement = "SELECT * FROM `users` WHERE `password` = '$password' AND `username`= '$login' ";
    $result = mysqli_query($dbconn, $sql_statement);
    if ($result){
        if (mysqli_num_rows($result) == 1){
            //echo "Login successful<br>";
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['USER_ID'] = $row['id'];
            $_SESSION['Role'] = $row['Admin'];
            header('Location: index.php');
        }
        else {
            echo "Login unsuccessful<br>";
            header('Location: login.php');
            exit;
        }
    }
    
    else {
        echo "error" . mysqli_error($dbconn);
        exit;
    }
}
else {
    echo "Error connecting" . mysqli_connect_errno();
    exit;
}
?>
