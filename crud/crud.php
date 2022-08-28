<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h3> Manage Products </h3>
	<?php 
	    include "displayProducts.html";
	?>
	<form method = "POST" action = "insertProduct.html">
		<fieldset>
			<legend> Enter New Product Details </legend>
			<label for = "productname"> Product Name </label><br>
			<input type = "text" name = "ProductName"/><br><br>
			<label for = "price"> Price </label><br>
			<input type = "text" name = "ProductPrice"/><br><br>
			<label for = "image"> Image Filename: </label><br>
			<input type = "text" name = "ProductImageName"/><br><br>
		
			<input type = "submit" name = "Submit" value = "Submit"/>
			<input type = "submit" name = "btnSubmit" value = "Clear"/>
		</fieldset>
	</form>

</body>
</html>