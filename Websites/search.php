
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cosmetic WebDesign </title>

    <!-- font awsome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section start page -->
<section id="header" class="header">
    <a href="#" class="logo"><i class="fas fa-female"></i> GLAMOUR</a>
    <nav class="navbar">
        <a href="index.html">home</a> 
        <a href="#about">about</a> 
        <a href="#product">Product</a>
        <a href="#shop">Shop Now</a>   
        <a href="#contact">Contact US</a>
    </nav>

    <div class="icons">
        <a href = "search.html"><i class = "fas fa-search"></i></a>
        <a href = "logout.html"><i class = "fas fa-user"></i></a>
        <div id="menu-btn" class="fas fa-bars"></div>
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-shopping-cart"></a>
    </div>
</section>

<!-- header section ends -->

<!-- Search Submit Button -->
<?php

    
    include ('connection.php');
?>
  <style>
 
        input[type="radio"] {
            width:10%;
            /*margin-left: 10%;*/
            padding-top:20px;
            padding-bottom:30px;
          /*  margin-top:50px;*/
        }
        button[type="submit"]{
            padding:5px 20px;
            cursor: pointer;  
            background-color:#F08080;
            color:#fff;
            margin-left: 30%;
        } 
        button[type="submit"]:hover{
            color:red;
        }
        form {
            margin-left: 40%;
            font-size: 1rem;
        }
        button{
            background-color: #F08080;
            padding-top: 5px;
            padding-bottom: 5px;
            font-size: 1.7rem;
            font-weight: bold;
        }
        .images label{
            font-size: 1.5rem;
        }
        
  </style>

  <form action="" method="post" style = "font-size:1.5rem">
        <label>Category:</label>
        <select name = "Category" id="Category" >
            <option value="" hidden selected disabled style = "font-color: gray">--Please select--</option>
            <option value="All" <?php 
                if (isset($_POST['Category']) && ($_POST['Category'] == 'All')) 
                    echo 'selected'; ?>
                >All</option>
            <option value="Skincare" <?php 
                if (isset($_POST['Category']) && ($_POST['Category'] == 'Skincare')) 
                    echo 'selected'; ?>
                >Skincare</option>
            <option value="Makeup" <?php 
                if (isset($_POST['Category']) && ($_POST['Category'] == 'Makeup')) 
                    echo 'selected'; ?>
                >Makeup</option>
            <option value="Face" <?php 
                if (isset($_POST['Category']) && ($_POST['Category'] == 'Face')) 
                    echo 'selected'; ?>
                >Face</option>

        </select>

        <br/>
        <label>Sort by:</label>  <br>      
            <input type="radio" id="sort" name="sort" value="sortAtoZ" <?php
                if (isset($_POST['sort']) && ($_POST['sort'] == 'sortAtoZ')) 
                    echo ' checked="checked"'; 
                ?> />Name, A to Z<br/>
            <input type="radio" id="sort" name="sort" value="sortZtoA" <?php
                if (isset($_POST['sort']) && ($_POST['sort'] == 'sortZtoA')) 
                    echo ' checked="checked"'; 
                ?> />Name, Z to A<br/>
            <input type="radio" id="sort" name="sort" value="sortLowtoHigh" <?php
                if (isset($_POST['sort']) && ($_POST['sort'] == 'sortLowtoHigh')) 
                    echo ' checked="checked"'; 
                ?> />Price, Low to High<br/>
            <input type="radio" id="sort" name="sort" value="sortHightoLow" <?php
                if (isset($_POST['sort']) && ($_POST['sort'] == 'sortHightoLow')) 
                    echo ' checked="checked"'; 
                ?> 
                />Price, High to Low<br/>

            <button type="submit" name="btnSubmit">Search</button>
    </form>

    <?php
        if (isset($_POST['btnSubmit'])){
            if (isset($_POST['Category'])){
    
                if ($_POST['Category']=='Skincare'){
                    $category = "where Category = 'Skincare'";
                }
                else if ($_POST['Category']=='Makeup'){
                    $category = "where Category = 'Makeup'";
                }
                else if ($_POST['Category']=='Face'){
                    $category = "where Category = 'Face'";
                }
                else{
                    $category = "";
                }

                if(isset($_POST['sort'])){
                    if ($_POST['sort']=='sortAtoZ'){
                        $sort = " order by Name asc";
                    }
                    else if ($_POST['sort']=='sortZtoA'){
                        $sort = " order by Name desc";
                    }
                    else if ($_POST['sort']=='sortLowtoHigh'){
                        $sort = " order by Price asc";
                    }
                    else if ($_POST['sort']=='sortHightoLow'){
                        $sort = " order by Price desc";
                    }
                }
                else{
                    $sort = "";
                }
              

                $sql = "SELECT * from  search ".$category.$sort;
                $result=mysqli_query($connection,$sql);

                if (mysqli_num_rows($result)>0){
                    //Use a while loop to iterate through your $result array and display 
                    while($row = mysqli_fetch_assoc($result)){
                    //proceed
                    $ID = $row['ID'];
                    $Name = $row['Name'];
                    $Image = $row['Image'];
                    $Price = $row['Price'];
                ?>
                    <div class = images style = "margin-left: 50rem;">
                        <img src="img/<?php echo $Image; ?>" style = "width: 30%; height: 30%; "/><br>
                        <label>Price: $</label><?php echo $Price; ?><br/>
                        <label>Name: </label><?php echo $Name; ?> <br>
                        <button>Add to cart</button>
                    </div>

                <?php
                echo "<br/>";
                    }
                }
            }
        }
      
        else{
                $sql = "SELECT * from search";
                $result=mysqli_query($connection,$sql);

                if (mysqli_num_rows($result)>0){
                    //Use a while loop to iterate through your $result array and display 
                    while($row = mysqli_fetch_assoc($result)){
                    //proceed
                    $ID = $row['ID'];
                    $Name = $row['Name'];
                    $Image = $row['Image'];
                    $Price = $row['Price'];
                ?>
                    <div class = "images" style = "margin-left: 50rem;">
                        <img src="img/<?php echo $Image; ?>"  style = "width: 30%; height: 30%;  "/><br/>
                        <label>Price: $</label><?php echo $Price; ?><br/>
                        <label>Name: </label><?php echo $Name; ?> <br>
                        <button>Add to cart</button>
                    </div>                                   
                <?php
                 echo "<br/>"; 
                    }
                }
            }

?>
<!-- services section starts -->

<section class="services">

    <div class="box">
        <img src="img/icon-1.png" alt="">
        <h3>free delivery</h3>
        <p>lorem ipsum dolor sit amet, consectetur adip</p>
    </div>

    <div class="box">
        <img src="img/icon-2.png" alt="">
        <h3>secure payments</h3>
        <p>lorem ipsum dolor sit amet, consectetur adip</p>
    </div>

    <div class="box">
        <img src="img/icon-3.png" alt="">
        <h3>24/7 support</h3>
        <p>lorem ipsum dolor sit amet, consectetur adip</p>
    </div>

</section>

<!-- services section ends -->

<!-- footer section starts -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a class="link" href="#home"> <i class="fas fa-angle-right"></i> home</a>
            <a class="link" href="#about"> <i class="fas fa-angle-right"></i> about</a>
            <a class="link" href="#product"> <i class="fas fa-angle-right"></i> Product</a>
            <a class="link" href="#shop"> <i class="fas fa-angle-right"></i> Shop Now</a>
            <a class="link" href="#contact"> <i class="fas fa-angle-right"></i> Contact Us</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my favorite </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my order </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> my wishlist </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> private policy </a>
            <a class="link" href="#"> <i class="fas fa-angle-right"></i> terms of use </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a class="link" href="#"> <i class="fas fa-phone"></i> +9237347753 </a>
            <a class="link" href="#"> <i class="fas fa-phone"></i> +977 9834545423 </a>
            <a class="link" href="#"> <i class="fas fa-envelope"></i> barsha939@gmail.com </a>
            <a class="link" href="#"> <i class="fas fa-map"></i> Kathmandu, Nepal - 44400 </a>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>newsletter</h3>
            <p>subscribe for recent updates</p>
            <form action="">
                <input type="email" name="" placeholder="enter your email" id="" class="email">
                <input type="submit" value="subscribe" class="btn">
            </form>
        </div>

    </div>

    <div class="credit"> created by <span>Barsha Shakya@copyright2021</span> || all rights reserved! </div>

</section>



<!-- custom js file link -->
<script src="js/main.js"></script>

</body>
</html>
