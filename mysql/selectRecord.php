<?php
   //Make connection to database
   include 'connection.html';
   //Display heading
   echo '<h2>Select ALL from the Customer Table</h2>';
   //run query to select all records from customer table
   $query="SELECT * FROM Customer";
   //store the result of the query in a variable called $result
   $result=mysqli_query($connection, $query);
   //Use a while loop to iterate through your $result array and display
   //the first name, last name and email for each record
   while ($row=mysqli_fetch_assoc($result)){
      echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].'<br/>';
   }

   echo '<h2> Select ALL from the Customer Table with Age>22</h2>';

   $query = "SELECT * FROM CUSTOMER WHERE AGE>22";

   $result = mysqli_query($connection, $query);
   while($row=mysqli_fetch_assoc($result)){
      echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br/>';
   }

   echo '<h2> Select Females from the Customer Table with Age>=22</h2>';

   $query = "SELECT * FROM CUSTOMER WHERE GENDER = 'F' AND AGE>=22";

   $result = mysqli_query($connection, $query);
   while($row=mysqli_fetch_assoc($result)){
      echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br/>';
   }

   echo '<h2> Select Males from the Customer Table list by age descending</h2>';

   $query = "SELECT * FROM CUSTOMER WHERE GENDER = 'M' ORDER BY AGE DESC";

   $result = mysqli_query($connection, $query);
   while($row=mysqli_fetch_assoc($result)){
      echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br/>';
   }

   echo '<h2> Select ALL from the Customer Table with "a" in the first name</h2>';

   $query = "SELECT * FROM CUSTOMER WHERE FIRSTNAME LIKE '%a%' ";

   $result = mysqli_query($connection, $query);
   while($row=mysqli_fetch_assoc($result)){
      echo $row['FirstName'].' '.$row['LastName'].' '.$row['Email'].' '.$row['Age'].'<br/>';
   }
?>