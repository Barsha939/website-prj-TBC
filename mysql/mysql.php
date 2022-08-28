<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	
	<form method = "POST" action="mysql.html">
		<fieldset>
		    <legend>Enter Customer Details</legend>
		    <label for = "firstname"> First Name </label>
		    <input type = "text" name = "txtfirstname"/><br><br>
		    <label for = "surname"> Surname</label>
		    <input type = "text" name = "txtsurname"/><br><br>
		    <label for = "email"> Email </label>
		    <input type = "text" name = "txtemail"/><br><br>
		    <label for = "password"> Password </label>
		    <input type = "text" name = "txtpassword"/><br><br>
		    <label for = "gender"> Gender </label>
		    <select id = "gender" name = "gender">
		    	<option value = "male">Male</option>
		    	<option value = "female">Female</option>
		    </select><br><br>
		    <label for = "age"> Age </label>
		    <input type = "text" name = "txtage"/><br><br>
		    <input type = "submit" name = "btnsubmit" value = "Submit"/>
		</fieldset>
	</form>
	<?php 
	    include 'selectRecord.php';
	?>
	
</body>
</html>
<?php
	//Make connection to database
	include 'connection.php';
	//(a)Gather from $_POST[]all the data submitted and store in variables

    if(isset($_POST['btnsubmit'])){
    	$firstname = $_POST['txtfirstname'];
    	$surname = $_POST['txtsurname'];
    	$email = $_POST['txtemail'];
    	$password = $_POST['txtpassword'];
    	$gender = $_POST['gender'];
    	$age = $_POST['txtage'];

    	//(b)Construct INSERT query using variables holding data gathered
    	$query = "INSERT INTO customer (FirstName, LastName, Email, Password, Gender, Age) VALUES ('$firstname','$surname','$email','$password','$gender','$age')"; 
		//(c)Temporarily echo $query for debugging purposes
		//echo $query;
		//exit();
        
        //(d)run $query
		mysqli_query($connection, $query);
		
		//(f) replacing the single line code with this
		if(mysqli_query($connection, $query)){
		 echo "Record inserted successfully.";
		} else{
		 echo "ERROR: Could not able to execute $sql. " . mysqli_error($connection);
		}

    }
	
?>