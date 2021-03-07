<?php 
session_start();
require_once 'showTopMenu.php';
?>
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

<title> Add A Catalog Item </title>

</head>
<body>
<form method="POST" action = "processNewItem.php">
  <div class="container">
    <h1>Add A Catalog Item</h1>
    
    <hr>
  Product No: <input type= "text" name="prodNo" value="<?php echo $prodNo;?>"></input><br><br>
  Product Desc: <input type="text" name="prodDesc" value="<?php echo $prodDesc;?>"></input><br><br>
  Product Price: <input type="text" name="price" value="<?php echo $price;?>"></input><br><br>
  Product Quantity: <input type="text" name="quantity" value="<?php echo $quantity;?>"></input><br><br>
  Product Photo: <input type="text" name="photo" value="<?php echo $photo;?>"></input><br><br>

      <button type="submit">Submit Changes</button>
    </div>
  
</form>
</body>


</html>
