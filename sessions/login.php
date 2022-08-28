<?php
 //include init.php
 include 'init.php';
 //Gather details submitted from the $_POST array and store in local vars
 $user = $_POST['txtUser'];
 $pass = $_POST['txtPass'];
 //build query to SELECT records from the users table WHERE
 //the username AND password in the table are equal to those entered.
 $sql = "Select * from user where Username = '$user' and Password = '$pass'";
 //run query and store result
 $result = mysqli_query($connection, $sql);
 //check result and generate message with code below
 if ($row = mysqli_fetch_assoc($result)) {
  $_SESSION['user'] = $user;
  header('location: sessions.php');
 } else {
  $_SESSION['error'] = 'User not recognized';
  header('location: sessions.php');
 }
?>