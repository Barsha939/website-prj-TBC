<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<title></title>
</head>
<body>
	<form method = "POST" action = "">
		<fieldset>
			<legend> Enter your login details</legend>
			<label for = "username"> User Name: </label>
			<input type = "text" name = "txtUsername"/>
			<label for = "email"> Email: </label>
			<input type = "text" name = "txtEmail"/>

			<legend>Pizza Selection </legend>
			<label for = "size"> Size: </label>
			<input type = "radio" name = "rdoSize" value = "small"/> Small
			<input type = "radio" name = "rdoSize" value = "medium"/> Medium
			<input type = "radio" name = "rdoSize" value = "large"/> Large
			<br><br>

			<label for = "topping"></label>
			<select name = "selltopping">
				<label value = ""> ----Please select---- </label>
				<option value = "Pepperoni"> Pepperoni</option>
				<option value = "Mushroom"> Mushroom </option>
				<option value = "Seafood"> Seafood </option>
			</select>
			<br><br>
			<label for = "extras"> Extras: </label>
			<input type = "checkbox" name = "chkParmasan" value = "Parmasan"/>Parmasan
			<input type = "checkbox" name = "chkOlives" value = "Olives"/>Olives
			<input type = "checkbox" name = "chkCapers" value = "Capers"/> Capers
		</fieldset>
		<br>
		<input type = "submit" value = "Submit" name = "btnSubmit"/>
		<input type = "reset" value ="Clear"/>

	</form>

	<?php
	    if(isset($_POST['btnSubmit']));
	    {    
            $username = $_POST['txtUsername'];
	    	$email = $_POST['txtEmail'];
	    	$size = $_POST['rdoSize'];
	    	$topping = $_POST['selltopping'];

	    	$extras = $_POST['chkParmesan'];
	    	$extras = $_POST['chkOlives'];
	    	$extras = $_POST['chkCapers'];


	    	echo "<h4> Thank you for your order</h4>";
	    	echo "Customer ID: " .$username;
	    	echo "<br>Email: " .$email;
	    	echo "<br>Your order: " .$size. "/t" .$extras;
	    	echo "<br>Extra Toppings: " .$topping;
	    }
	?>



</body>
</html>
