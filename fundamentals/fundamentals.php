<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset = "utf-8">
        <title>Web Applications and Technologies</title>
        <link type="text/css" rel="stylesheet" href="main.css" />
    </head>
    <body>
        <header>
            <h1>Barsha Shakya C7261199</h1>
        </header>

        <section id="container">
            <h1>Fundamentals of PHP</h1>
            <?php 
                //1.
                echo "<h3>Selection</h3>";

                //2.
                date_default_timezone_set("Asia/Kathmandu");

                $day = date('l'); //that is a lower case L
                echo 'it\'s '.$day.'<br>';  
                echo date("Y/m/d"); 

                //3.
                if($day == 'Wednesday'){
                    echo "<br><br>It's midweek.";
                }
                else{
                    echo "<br><br>It's not midweek";
                }

                //4.
                $hour = date('H');
                echo "<br><br>" .$hour. " hours";

                if($hour <= 12){
                    echo "<br>Good Morning";
                }
                else if($hour > 12 && $hour <= 18){
                    echo "<br>Good Afternoon";
                }
                else {
                    echo "<br>GoodNight";
                }
                echo"<br><br>";

                //5.
                $pass = "password";

                if(strlen($pass) > 4 && strlen($pass) < 10) {
                    echo "Password length is valid";
                }
                else{
                    echo "Password length is invalid";
                }
                echo"<br>";

                $pass = "password";
                $user = "username";
                if($pass == "password" && $user == "username"){
                    echo "Password valid";
                }
                else{
                    echo "Password invalid";
                }
                echo"<br><br>";


                echo"<h4>Ticket Price</h4>";
                $age = 15;
                $member = TRUE;
                function detail(){
                    $age = 15;
                    $member = TRUE;
                    echo "Initial Ticket Price: " ."??" . 25;
                    echo "<br>Age: " .$age. "<br>";
                    if($member == TRUE){
                        echo "Member: Yes<br>";
                    }
                    else{
                        echo "Member: No<br>";
                    }
                }
                if($age <= 12){
                    detail();
                    if($member == TRUE){
                        $discount = 25 - (50/100)*25;
                        $membershipDiscount = (10/100) * $discount;
                        $totalPrice = $discount - $membershipDiscount;
                        echo "Final Ticket Price: " .$totalPrice;
                    }
                    else{
                        echo "<br>Final Ticket Price: " .$discount;
                    }
                }
                else if($age > 12 && $age <= 18){
                    detail();
                    if($member == TRUE){
                        $discount = 25-(25/100)*25;
                        $membershipDiscount = (10/100) * $discount;
                        $totalPrice = $discount - $membershipDiscount;
                        echo "Final Ticket Price: " .$totalPrice;
                    }
                }
                else if($age>65){
                    detail();
                    if ($members==True){
                        $discount=25-(25/100)*25;
                        $membershipDiscount= (10/100) * $discount;
                        $totalPrice= $discount-$membershipDiscount;
                        echo "Final Ticket Price: " .$totalPrice;
                    }
                    else{
                        echo "Final Ticket Price: ".$discount;
                    }    
                }
                else{
                    detail();
                    if ($members==True){
                        echo "Final Ticket Price: ".$discount;
                    }
                    else{
                        echo "Final Ticket Price:" ."??"  . 25;
                    }
                }
                echo "<br><br>";

                //Arrays
                //1.
                echo "<h1>Arrays</h1>";
                echo "<h3>Simple Arrays</h3>";

                //2.
                $product = array ("t-shirt", "cap", "mug");
                print_r($product);
                echo"<br>";

                //3.
                $product[1] = "shirt";
                print_r($product);
                echo"<br>";

                $product[] = "skirt";
                print_r($product);

                echo "<br> The item at index[2] is: " .$product[2];
                echo "<br> The item at index[3] is: " .$product[3];

                //.4
                echo "<br><h4>Associative Arrays</h4>";

                $customer = array('CustID' => 12, 'CustName' => 'Sarah', 'CustAge' => 23, 'CustGender' => 'F');
                print_r($customer);
                echo "<br>";
                $customer['CustAge'] = 32;
                $customer['CustEmail'] = "barsha939@gamil.com";
                print_r($customer);
                echo "<br>The item at index[CustName]is: " .$customer['CustName'];
                echo "<br>The item at index[CustEmail] is: " .$customer['CustEmail'];
                echo "<br>";

                echo "<h4>Multi-Dimensional Arrays</h4>";
                echo "<br>";

                $stock = array(
                    "id1" => array ("description"=>"t-shirt","price"=>9.99,"stock"=>100,"color"=>array ("blue","green","red")
                    ),
                    "id2"=>array("description"=>"cap","price"=>4.99,"stock"=>50,"color"=>array("blue","black","grey")
                    ),
                    "id3"=>array("description"=>"mug","price"=>6.99,"stock"=>30,"color"=>array("yellow","green","pink")
                    ),
                );
                print_r($stock);
                echo "<br><br>";

                echo "This is my order: <br>";
                echo $stock ["id1"] ["color"][1]. " ". $stock ["id1"] ["description"];
                echo "<br>";
                echo "Price: ??" . $stock["id1"]["price"];
                echo"<br>";
                echo $stock ["id2"] ["color"][2] ." ". $stock["id2"] ["description"];
                echo"<br>";
                echo"Price: ??" . $stock["id2"]["price"]; 

                //while loops
                //1.
                echo"<h1>Loops</h1>";
                echo"<h3>While Loop</h3>";

                //2.
                $counter=1;
                while($counter < 6){
                  echo 'Count: '.$counter."<br>";
                  $counter++;
                }
                echo"<br><br>";

                //3.
                $shirtPrice = 9.99;
                $counter = 1;

                //4.
                while($counter <= 10){
                  $total= $counter*$shirtPrice;
                  echo"$counter - ?? $total<br>";
                  $counter++;
                }
                echo "<br><br>";

                $shirtPrice =9.99;
                $counter=1;
                echo "<table border=1px solid black cellpadding=10px>";
                echo "<tr>";
                echo "<th>Quantity</th>";
                echo "<th>Price</th>";
                while($counter<=10){
                    $total=$counter*$shirtPrice;
                    echo "<tr>";
                    echo "<td>" . $counter. "</td>";
                    echo "<td>" . '??'. $total. "</td>";
                    echo "<tr>";
                    $counter++;
                }
                echo "</table>";


                  //For and Foreach Loops
                  //1.
                  echo"<h3>For Loops</h3>";
                 
                  $names= array("Peter","Kat", "Laura", "ALi", "Popacatapetal");
                  for($i=0 ; $i < 5 ; $i++){
                    echo "$names[$i]<br>";
                  }
                  echo"<h2>Foreach Loops</h2>";
                     $names=array("Peter"=>"c123456","Kat"=>"c654321", "Laura"=>"c987654", "ALi"=>"c654987", "Popacatapetal"=>"c765984");
                     foreach($names as $key => $value){
                        echo"Name: $key ID : $value<br>";
                     }
                     //extra
                     echo"<br>";
                     $city=array("Peter"=>"LEEDS", "Kat"=>"bradford","Laura"=>"wakeFIeld");
                     print_r ( $city);
                     echo "<br />";
                     foreach ( $city as $key => $value)
                     {
                       $city[$key] = ucfirst ( strtolower ( $value));
                    }
                    print_r ( $city);
            ?>
            <br><br>
        </section>
        <footer>
            <small> <a href="../watIndex.html">Home</a></small>
        </footer>
    </body>
</html>