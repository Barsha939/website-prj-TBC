<?php
	//Make connection to database
	include 'connection.html';
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