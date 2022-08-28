<?php
 //Make connection to database
 //Gather id sent from crud.php page
 $id = $_GET['id'];
 include 'connection.html';
 //Produce query to select the product record for the id provided
 $sql = "SELECT * from product where ProductId = $id";
 //run query and store result
 $result = mysqli_query($connection, $sql);
 //extract row from result using mysqli_fetch_assoc()and store $row
 $name = "";
 $price = "";
 $image = "";
 while($row = mysqli_fetch_assoc($result)){
  $name = $row['ProductName'];
  $price = $row['ProductPrice'];
  $image = $row['ProductImageName'];
 }
?>
<!DOCTYPE html>
<html>
 <head></head>
 <body>
  <form action="updateProduct.html" method="post">
   <fieldset>
    <legend>Enter Product Details</legend>
    <input type="hidden" name="hideProductID" value="<?php echo $id;?>">
    <label for="name">Product Name: </label>
    <input type="text" name="ProductName" value=<?php echo $name;?>><br><br>
    <label for="price">Price: </label>
    <input type="text" name="ProductPrice" value=<?php echo $price;?>><br><br>
    <label for="image">Image Filename: </label>
    <input type="text" name="ProductImage" value=<?php echo $image;?>>
   </fieldset>
   <input type="submit" value="Submit" name="btnSubmit">
   <input type="reset" value="Clear">
  </form>
 </body>
</html>