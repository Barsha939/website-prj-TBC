<?php
 $hostname = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'watdb2021';
 $connection = mysqli_connect($hostname, $username, $password, $database);
 if(!$connection){
  die ("Connection failed: " . mysqli_connect_error());
 }
 // echo "Connected Successfully<br/><br/>";
 session_start();
?>