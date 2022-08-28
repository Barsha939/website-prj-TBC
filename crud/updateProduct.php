<?php
 //Make connection to database
 include 'connection.html';
 $id = $_POST['hideProductID'];
 //Gather data sent from amendProducts.php page
 if(isset($_POST['btnSubmit'])){
  $name = $_POST['ProductName'];
  $price = $_POST['ProductPrice'];
  $image = $_POST['ProductImage'];
 }
 //Produce an update query to update product record for the id provided
 $sql = "Update product set ProductName = '$name', ProductPrice = $price, ProductImageName = '$image' where ProductId = $id";
 //run query
 mysqli_query($connection, $sql);
 //Redirect to crud.php page
 header( 'Location: crud.html' ) ;
?>
