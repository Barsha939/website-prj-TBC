<head>
   <meta charset = "utf-8">
   <title></title>
</head>
<body>
<?php
   echo "<h3> My first PHP. </h3>";
   $myname = " Barsha Shakya";
   echo "<br>Name = " .$myname;
   $studentid = "6015";
   echo "<br>Student ID = ".$studentid;
   
   //1.Declaring two variable name and age
   $name = " Barsha Shakya ";
   $age = "22";
   echo "<br><br> My name is $name  and I am  $age  years old ";
   
   //2.without concatenation 
   echo"<br> Mi nombre es $name";
   echo " y tengo $age anos de edad <br><br>";
   
   //3.Functions
   
   //gettype() returns..
   echo gettype($name);
   echo '<br/>';
   //strlen() returns..
   echo strlen($name);
   echo '<br/>';
   //strtoUpper() returns..
   echo strtoUpper($name);
   echo '<br/><br/>';
   
   //gettype() returns..
   echo gettype($age);
   echo'<br/>';
   //strlen() returns..
   echo strlen($age);
   echo '<br/>';
   //strtoUpper() returns..
   echo strtoUpper($age);
   echo '<br/><br/>';
   
   //4.Arithmetic
   $num1 = 9;
   $num2 = 12;
   echo "<br>num1 = " .$num1;
   echo "<br>num2 = " .$num2;

   $multipliednum = number_format($num1*$num2);
   echo "<br>num1 x num2 = " .$multipliednum;
   
   $percentage = number_format(($num1/$num2)*100);
   echo "<br>num1 as a percentage of num2 = " .$percentage."%";

   $divide = number_format($num2/$num1);
   echo "<br>num2 divided by num1 = " .$divide. "remainder 3<br>";
   
   echo "<br>Name:" .$myname;
   echo "<br>Age: " .$age;
   $height = 1.8;
   echo "<br>Height in Meters: " .$height;
   $height_inch = ($height *100)/2.54;
   $height_feet_inches = $height_inch/12;
   $high = number_format("$height_feet_inches",2);
   echo "<br>Height in Feet and inches: " .$high;

   
?>