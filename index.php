<?php
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="5"> -->
    <title>pupprice</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" > 
    <link href="./css/landing.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" src="./js/jquery.js"></script>
    <script src="https://kit.fontawesome.com/54be263888.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
        <div class="menue">
            <ul class="nav"> 
              <a class="logo" href="./index.php"><img src="./icons/pumprice-icon-3.png"> </a>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link " href="#">Market</a>
                    </li> 
                      <a class="nav-link " href="./market/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./market/about.php">About</a>
                    </li>
                </li> 
                <li class="nav-item">
                      <a class="nav-link " href="./market/login.php">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./market/user_registration.php">Register</a>
                    </li> 
            </ul>  
      </div> 
    <section class="landing-page">
              <div class="header"> 
                  <div class="img-wrapper">   
                    <img src="./images/landing.jfif">
                  </div>
              </div> 
            <div class="row">
            
                <div class="col-md-7">
                    <h1 class="text-left-header">Register Gas Station</h1>
                      <p class="text-left">
                          Register your gas station for easy price display for customers.
                          This can increase your sales to a great extent. Provide the required
                          details in the form and wait for a comfirmation email.
                          And know when there is change in price. to check for affordable Price
                          in the market with other sellers.
                      </p> 
                      <div class="jumbotron">
                        <form action="" method="post">
                        <input type="button" id="get-started" class="btn btn-primary btn-block" name="get-started" value="Get Started" ></input>
                        </form>
                       
                      </div> 
               </div>
            </div>
      </section> 
     
  </div>
  <section class="footer-section">
          <footer class="footer">
            <div class="footer-content">
            <p class="copyright">
                      copyright &copy;2021 final year project by 19h/0051/cs-
                      All Rights Reserved.
                    </p> 
            </div>
            <div class="social-links">
               <a class="icons"  href="www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a> 
                <a class="icons" href="www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a> 
                <a class="icons"href="www.twitter.com" target="_blank"><i class="fab fa-twitter-square"></i></a> 
            </div>
          </footer>
    </section>
  <script>
    $(document).ready(function(){
      $("#get-started").on('click',function(){
        window.location="./market/registration.php";
      });
    });
  </script>
      <script src="./js/bootstrap.min.js"></script>
</body>
</html>