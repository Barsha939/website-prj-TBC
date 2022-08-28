<?php 

include 'connection.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: localhost/login.php");
}

if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	$Checkbox = $_POST['check'];
	$error = array();

	if(!empty($_POST['username']) || !empty($_POST['email']) ||  !empty($_POST['password']) || !empty($_POST['check'])){  
    //password validation
    if(!empty($_POST['username'])){
           // username validation

      if(strlen($username)<6){
        $error[0]='Username should be at least of 6 characters.';
    }
    }
    $pattern="#.^(?=.[a-z])(?=.[A-Z])(?=.[0-9]).*$#";
    if(!empty($password)){
      if (!preg_match($pattern, $password)) {
     $error[4]='Password must contain at least one number, one upper case letter, one lower case letter.';
    } 
    } 

   //Email validation
    if(!empty($email)){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
           $error[1]= $email. 'is not a valid email address.';
        }

      }
    }

	if(($username == "") or ($password == "") or ($email == "")){
		echo "<script>alert('All fields are required')</script> ";
	}else
	{

        if ($password == $cpassword) {
			$sql = "SELECT * FROM register WHERE Email='$email'";
			$result = mysqli_query($connection, $sql);
			if (!$result -> num_rows > 0) {
				$ql = "INSERT INTO register (FirstName,LastName,Username, Email, Password)
						VALUES ('$firstname','$lastname','$username', '$email', '$password')";
				$result = mysqli_query($connection, $ql);
				if ($result) {
					echo "<script>alert('Wow! User Registration Completed.')</script>";
					$firstname = "";
					$lastname = "";
					$username = "";
					$email = "";
					$_POST['password'] = "";
					$_POST['cpassword'] = "";
				} else {
					echo "<script>alert('Woops! Something Wrong Went.')</script>";
				}
			} else {
				echo "<script>alert('Woops! Email Already Exists.')</script>";
			}
			
		} 
		else {
			echo "<script>alert('Password Not Matched.')</script>";
	    }
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="php.css">

	<title>Register Form </title>
</head>
<body>
	<div class="container">
		<form action="register.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
				<input type="text" placeholder="FirstName" name="firstname" value="<?php echo $firstname; ?>" >
			</div>
			<div class="input-group">
				<input type="text" placeholder="LastName" name="lastname" value="<?php echo $lastname; ?>" >
			</div>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" >
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" >
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" >
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" >
			</div>
			<div>
				<input type = "checkbox" name = "check" > Terms $ Conditions
			</div>

			<div class="input-group">
				<button name="submit" class="btn"><a href = "login.php">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>