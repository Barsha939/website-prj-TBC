<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forms</title>
</head>
<body>
	<h1>Processing Input from HTML Forms</h1>
	<h2>Login Form using GET</h2>
	<form method="get" action="forms.html">
		<fieldset>
			<legend>
				Login
			</legend>
			<label for="email">Email: </label>
			<input type="text" name="txtEmail"/><br />
			<label for="passwd">Password: </label>
			<input type="password" name="txtPass" /><br />
			<input type="submit" value="Submit" name="loginSubmit" />
			<input type="reset" value="Clear" name="Clear" />
		</fieldset>
	</form>

	<?php
	 //Collect data and echo back
		if(isset($_GET['loginSubmit'])){
			if(empty($_GET['txtEmail'])){
				echo "Email must not be empty.";
			}
			else{
				if(filter_var($_GET['txtEmail'], FILTER_VALIDATE_EMAIL)){
					$email=$_GET['txtEmail'];
					$password=$_GET['txtPass'];
					$_GET['loginSubmit'];
					echo "Email: " .$email . " Password: " .$password;
				}
				else{
					echo "Please enter the valid email.";
				}
			}
		}
	?>

	<h2>Login Form using POST</h2>
	<form method="post" action="forms.php">
		<fieldset>
			<legend>Comments</legend>
			<label for="email">Email: </label>
			 <input type="text" name="txtEmail" value="<?php
                if(isset($_POST['txtEmail'])){
                    echo $_POST['txtEmail'];
                }
            ?>" /><br /><br />
			<textarea rows="4" cols="50" name="comment"></textarea><br />
			<label for="">Click to Confirm: </label>
			<input type="checkbox" name="chkConfirm" value="agree"><br />
			<input type="submit" value="Submit" name="Submitbtn"/>
			<input type="reset" value="Clear" name="Clear" />
		</fieldset>
	</form>

	<?php
	//form validation
		if(isset($_POST['Submitbtn'])){
			if(empty($_POST['txtEmail'])){
				echo 'Email must not be empty.';
			}
			else{
				if(filter_var($_POST['txtEmail'], FILTER_VALIDATE_EMAIL)){
					$email=$_POST['txtEmail'];
					$comment=$_POST['comment'];

						if (isset($_POST['chkConfirm'])){
							$email=$_POST['txtEmail'];
							$comment=$_POST['comment'];
							$confirm='Agreed<br />';
						}
						else{
							$confirm='Not Agreed<br />';
						}
				 echo "Email: " .$email ."<br>" . "Comments: " .$comment ."<br>" . "Confirm: " .$confirm;
				}
				else{
					echo 'Please enter the valid email.';
				}
			}
		}
	?>

	<h2> Tax Calculator</h2>
	<form method="post" action="forms.php">
		<fieldset>
			<legend>Without TAX Calculator</legend>
			<label for="price">After Tax Price:</label>
			<input type="text" name="price"/>
			<label for="rate">Tax Rate: </label>
			<input type="text" name="rate" />
			<input type="submit" value="Submit" name="calSubmit" />
			<input type="reset" value="Clear" name="calClear" />
		</fieldset>
	</form>

	<?php
        if (isset($_POST['calSubmit'])){
            if (empty($_POST['price']) OR empty($_POST['rate'])){
                   echo "All Fields Required";
            }	
           	else{
                if (isset($_POST['price'])){
                        if (preg_match(" /^\d+(:?[.]\d{2})$/ ", $_POST['price'])){
                            $after_tax = $_POST['price'];
                        }
                        else{
                            die("Please enter the price in the format 9.99");
                        }
                }
                else{
                    // do nothing
                }
                if (isset($_POST['rate'])){
                    if (filter_var($_POST['rate'], FILTER_VALIDATE_INT)){
                        $tax = $_POST['rate'];
                        $before_tax = (100 * $after_tax) / (100 + $tax);
                        echo "<b><br>Price before tax: £".$before_tax."</b>";
                    }
                    else{
                        die("Please enter a whole number for tax rate");
                    }
                }
                else
                {
                    // do nothing
                }
            }
        }
    ?>

    <?php
    	echo "<br>";
    	if(isset($_GET['flim'])){
    		$flims=$_GET['flim'];
    		echo 'Flim: ' .$flims;
    	}
    		if(isset($_GET['book'])){
    		$books=$_GET['book'];
    		echo 'Book: ' .$books;
    	}
    		if(isset($_GET['music'])){
    		$musics=$_GET['music'];
    		echo 'Music: ' .$musics;
    	}
    ?>
    
    <h1>Passing Data Appended to an URL</h1>
	<h2>Pick a category</h2>
	<a href="forms.php?flim=Wonder Woman movie is now released on cinema halls.">Films</a>
	<a href=" forms.php?book=The Art of Living is available on Amazon.">Books</a>
	<a href=" forms.php?music=Thank you next by Ariana Grande">Music</a>
	

	<h2> Order Form </h2>
	<p> Please fill out this form to place your order.</p>
	<form method="post" action="forms.php">
		<fieldset>
			<legend>Enter your login details</legend>
			<label for="username">User Name:</label>
			<input type="text" name="txtUsername" value="<?php echo isset($_POST['txtUsername']) ? $_POST['txtUsername'] : ''; ?>"/>
			<label for="email">Email: </label>
			<input type="text" name="txtEmail"  value="<?php echo isset($_POST['txtEmail']) ? $_POST['txtEmail'] : ''; ?>"/><br />
		</fieldset>
		<fieldset>
			<legend>Pizza Selection</legend>
			<label for="size">Size:</label>
			<input type="radio" name="rdoSize" value="Small" <?php echo (isset($_POST['rdoSize']) && $_POST['rdoSize'] == "Small")  ? "checked=checked": ''; ?> /> Small
			<input type="radio" name="rdoSize" value = "Medium" <?php echo (isset($_POST['rdoSize']) && $_POST['rdoSize'] == "Medium")  ? "checked=checked": ''; ?> />Medium
			<input type="radio" name="rdoSize" value = "Large" <?php echo (isset($_POST['rdoSize']) && $_POST['rdoSize'] == "Large")  ? "checked=checked": ''; ?>/>Large
			<br><br>

			<label for="topping">Topping: </label>
			<select name="selTopping">
				<option value="">-- Please select --</option>
				<option value="Pepperoni" <?php echo (isset($_POST['selTopping']) && $_POST['selTopping'] == "Pepperoni")  ? "selected=selected": ''; ?>>Pepperoni</option>
				<option value="Mushroom"  <?php echo (isset($_POST['selTopping']) && $_POST['selTopping'] == "Mushroom")  ? "selected=selected": ''; ?>>Mushroom</option>
				<option value="Seafood"  <?php echo (isset($_POST['selTopping']) && $_POST['selTopping'] == "Seafood")  ? "selected=selected": ''; ?>>Seafood</option>
			</select>
			<br><br>
			
			<label for="extras">Extras:</label>
			<input type="checkbox" name="extras[]" value="Parmesan"<?php if(isset ($_POST['extras'])){
				foreach($_POST['extras'] as $extras){
					if($extras == 'Parmesan'){
						echo 'checked';
					}
				}
			}?>>Parmesan
			<input type="checkbox" name="extras[]" value="Olives"<?php if(isset ($_POST['extras'])){
				foreach($_POST['extras'] as $extras){
					if($extras == 'Olives'){
						echo 'checked';
					}
				}
			}?>>Olives
			<input type="checkbox" name="extras[]" value="Capers"<?php if(isset ($_POST['extras'])){
				foreach($_POST['extras'] as $extras){
					if($extras == 'Capers'){
						echo 'checked';
					}
				}
			}?>>Capers		
		</fieldset>
		<br>
		<input type="submit" value="Submit" name="btnSubmit" />
		<input type="reset" value="Clear" name="Clear" />
	</form>

	<?php
		if(isset($_POST['btnSubmit'])){
			$username=$_POST['txtUsername'];
			$email=$_POST['txtEmail'];
			$size=$_POST['rdoSize'];
			$topping=$_POST['selTopping'];

			echo "<h4> Thank you for your order</h4>";
			echo "Customer ID: " . $username;
			echo "<br>Email: " . $email;
			echo "<br>Your order: " . $size ."\n" . $topping;
			if(!empty($_POST['extras'])){
				echo"<br>Extra Toppings: ";
			}
			foreach($_POST['extras'] as $extras){
				echo $extras. " ";
			}
		}
	?>
	<br><br> 	
</body>
</html>