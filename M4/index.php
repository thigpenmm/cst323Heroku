<html>

<title> My Supply Store </title>
<head>
<link rel="stylesheet" type="text/css" href=" styles.css">
</head>

<body>

<div class="container">
<?php

session_start();

if (!isset($_SESSION['username'])) {
    echo "Please login first <a href='login.html'> Login here </a>";
    exit;
}

if (isset($_GET['pageNumber']))
    $menuChoice = $_GET['pageNumber'];
    else
        $menuChoice = 1;
        
        if ( $_SESSION['username']) {
            require_once 'searchCatalog.php';
            
            
            }
        
        else {
            echo "<h1> Supply Store </h1>";
            echo "Please login first <a href='login.html'> Login here </a>";
            exit;
        }
        
        ?>