<?php
  include"header.html";
   include "connection.html"; 
   // Turn off all error reporting
   error_reporting(0);
   //Insertion of new record in database table when form submitted 
  //read data from form
   if (isset($_POST['btnSubmit'])){
    $Username= $_POST['Username'];
    $EmailID= $_POST['Email'];
    $PhoneNo= $_POST['Phone'];
    $Age_Range= $_POST['selAge'];
    $Password=$_POST['Password'];
    $Checkbox= $_POST['check'];
    $error = array();
    //Making ensure whether the testfield is empty or not
    if(empty($_POST['Username']) || empty($_POST['Email']) || empty($_POST['Phone']) || empty($_POST['selAge']) || empty($_POST['Password']) || empty($_POST['check'])){
     if (empty($Username)){
        $error[0]='Username is empty.';
     }
     if(empty($EmailID)){
        $error[1]='EmailID is empty';
     }
     if(empty($PhoneNo)){
        $error[2]='PhoneNo required';
     }
     if(empty($Age_Range)){
        $error[3]='Age should be selected';
     }
     if(empty($Password)){
        $error[4]='Password required';

     }
     if(empty($Checkbox)){
        $error[5]='You need to check the Terms and Condition';
     }     
    }
  if(!empty($_POST['Username']) || !empty($_POST['Email']) || !empty($_POST['Phone']) || !empty($_POST['selAge']) || !empty($_POST['Password']) || !empty($_POST['check'])){  
    //password validation
    if(!empty($_POST['Username'])){
           // username validation

      if(strlen($Username)<6){
        $error[0]='Username should be at least of 6 characters.';
    }
    }
    $pattern="#.^(?=.[a-z])(?=.[A-Z])(?=.[0-9]).*$#";
    if(!empty($Password)){
      if (!preg_match($pattern, $Password)) {
     $error[4]='Password must contain at least one number, one upper case letter, one lower case letter.';
    } 
    } 

   //Email validation
    if(!empty($EmailID)){
        if(!filter_var($EmailID, FILTER_VALIDATE_EMAIL)){
           $error[1]= $EmailID. 'is not a valid email address.';
        }

      }
    }
 
    if(strlen($Username)>6 && (filter_var($EmailID, FILTER_VALIDATE_EMAIL)) && (preg_match($pattern,$Password)) && (!empty($Age_Range)) && (!empty($Checkbox)) )
    {
        //To insert value in database through form
            //Password encrypted before storing in the database using md5
      $Password=md5($Password);
        $sql = "INSERT INTO register(Username, EmailID, PhoneNo, Age_Range, Password) VALUES ('$Username','$EmailID','$PhoneNo','$Age_Range','$Password')";

     $result=mysqli_query($connection, $sql) or die(mysqli_error($connection));
    if($result){
       echo"<br>Data Inserted Successfully";
           
      }else{
        echo"<br>Data Insertion Error";
    } 

   }
}
// else{
//            //Do nothing
//            }

?>
<html>
<head>
<title>Registration Page</title>
</head><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
   <!-- Glidejs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css" />
    <!-- Custom Stylesheet -->
  <link rel="stylesheet" href="styles.css" />
    <title></title>
</head>
<body>
<!-- 
        ========================
        Header
        ========================
     -->
  <header id="header" class="header">
    <!-- Navigation -->
    <div class="navigation">
      <div class="container">
        <nav class="nav__center">
          <div class="nav__header">
            <div class="nav__logo">
              <h1>SHOPI<span>Q</span></h1>
            </div>

            <div class="nav__hamburger">
              <span>
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-menu"></use>
                </svg>
              </span>
            </div>
          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <h1 class="nav__category">SHOPI<span>Q</span></h1>
              <div class="close__toggle">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-cross"></use>
                </svg>
              </div>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="shopiq.html" class="nav__link scroll-link">Home</a>
              </li>

              <li class="nav__item">
                <a href="#featured" class="nav__link scroll-link">Featured</a>
              </li>

              <li class="nav__item">
                <a href="#blog" class="nav__link scroll-link">Blog</a>
              </li>

              <li class="nav__item">
                <a href="#newsletter" class="nav__link scroll-link">Subscribe</a>
              </li>

              <li class="nav__item">
                <a href="login.html" class="nav__link">Login</a>
              </li>

              <li class="nav__item">
                <a href="register.html" class="nav__link">Register</a>
              </li>
            </ul>
            <ul class="nav__icons">             

              <a href="#" class="icon__item">
                <svg>
                  <use xlink:href="./images/sprite.svg#icon-user"></use>
                </svg>
              </a>

            </ul>
          </div>
        </nav>
      </div>
    </div>

    <!--registration form -->
    
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Register" name="btnSubmit" />
        </div>
        <div class="container signin">
    <p>Already have an account? <a href="login.html">Sign in</a>.</p>
  </div>
    </form>
</div>
</div>
</div>