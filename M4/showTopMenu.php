 <!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href=" styles.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style type="text/css">
  body{ font: 14px sans-serif; text-align: center; }
  </style>
</head>
<?php
//if the user doesn't match the session username, login again
if (!isset($_SESSION['username'])):?>

<span><a href="login.html">Login</a></span>
<hr>
<?php else:
//if the user does match the session username, welcome and menu options
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand"><?php echo $_SESSION['username']; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
 
        <a class="nav-link" href="welcome.php">Home<span class="sr-only">(current)</span></a>

        <a class="nav-link" href="searchCatalog.php">Search Products</a>

        <a class="nav-link" href="Cart.php">Shopping Cart</a>

        <a class="nav-link" href="logout.php">Log Out</a>
      <?php
// if the user is an Admin, MyAdmin page is available
if ($_SESSION['Role'] == '1'):?>

        <a class="nav-link" href = "addNewItem.php">Add a Product   </a>
    
        <a class="nav-link" href = "showAdminPage.php">Admin Page   </a>
    
  </div>
</nav>

<?php endif; ?>
</div>
</body>


<?php endif; ?>
</html>