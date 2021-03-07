<?php
session_start();

?>
 <!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style type="text/css">
  body{ font: 14px sans-serif; text-align: center; }
  </style>
</head>
<body>
<br />
<div class="container" style="width:700px;">
<style>
table {
border-collapse: collapse;
width: 100%;
color: darkCyan;
font-family: calibri;
font-size: 20px;
text-align: center;
}
th {
background-color: darkCyan;
color: white;
text-align: center;
}
/* Set a style for all buttons */
button {
  background-color: darkCyan;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


//displays results from query and allows user to add products to their shopping cart
<?php
require_once 'searchCatalog.php';
$sql = "SELECT * FROM items WHERE `PROD_DESC` LIKE '%$query%' OR `PRICE` LIKE '%$query%' OR `QUANTITY` LIKE '%$query%'";
$result = $conn->query($sql);
if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_array($result))
    {
        ?>
                <div class="col-md-4">  
                     <form method="post" action="Cart.php"<?php echo $row["ID"]; ?>">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
                               <img src="<?php echo $row["PHOTOS"]; ?>" class="img-responsive" /><br />  
                               <h4 class="text-info"><?php echo $row["PROD_DESC"]; ?></h4>  
                               <h4 class="text-danger">$ <?php echo $row["PRICE"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["PROD_DESC"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["PRICE"]; ?>" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="button" background-color: rgba(44, 62, 80,0.7); value="Add to Cart" />  
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                 
    
      
 else { echo "0 results"; }

?>
 
               
</div>  
 </form>         
 </div>  
</table>
</body>
</html>
