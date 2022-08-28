<?php
    error_reporting(0);
    //Make connection to database
    include "connection.html";
    //Gather id from $_GET[]
    $id = $_GET['id'];
    //Construct DELETE query to remove record where WHERE id provided equals the id in the table
    $sql = "DELETE FROM product WHERE ProductID = $id";
    //run $query
    mysqli_query($connection, $sql);
    echo "Data Deleted Successfully";
    // check to see if any rows were affected
    if (mysqli_affected_rows($connection) > 0) {
         //If yes , return to calling page(stored in the server variables)
         header("Location: {$_SERVER['HTTP_REFERER']}");
    } else 
    {
         // print error message
         // echo "Error in query: $query. " . mysqli_error($connection);
         exit ;
    }
?>
<a href = "crud.html"> Go to List Page</a>