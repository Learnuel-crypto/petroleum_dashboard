<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>pumpprice</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" > 
    <link href="../css/contact.css" rel="stylesheet" type="text/css" media="screen">
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script src="https://kit.fontawesome.com/54be263888.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid">
        <div class="menue">
            <ul class="nav"> 
              <a class="logo" href="../index.php"><img src="../icons/pumprice-icon-3.png"> </a>
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li> 
                    <li class="nav-item">
                      <a class="nav-link " href="#">Market</a>
                    </li> 
                      <a class="nav-link " href="./contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./about.php">About</a>
                    </li>
                </li> 
                <li class="nav-item">
                      <a class="nav-link " href="./login.php">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="./user_registration.php">Register</a>
                    </li> 
            </ul>  
      </div> 
    <section class="landing-page">
              <div class="header"> 
                <div class="img-wrapper">   
                  <img src="../images/phone_desk.jpg">
                </div>
             </div> 
            <div class="box-1">
                <div class="container">   
                    <section class="contact">
                       <div class="contact-wrapper">
                              <div class="registration-left">
                        
                                </div>
                          <div class="contact-right">
                              <h2 class="contact-heading">Contact</h2>
                                <div id="registration-error">
                                
                                </div>
                                <form class="form-control" action="../functions/Helper.php" method="POST">
                                  <div class="input-group">
                                    <input type="text" id="fullname" require class="field">
                                    <label class="input-lable">Fullname</label>
                                  </div>
                                  <div class="input-group">
                                    <input type="email" id="email" class="field">
                                    <label class="input-lable">E-mail</label>
                                  </div>
                                  <div class="input-group">
                                    <textarea class="field" id="message" name="message" ></textarea>
                                    <label for="message">Message</label>
                                  </div>
                                   <button type="button" id="submit_contact" class="submit_contact" name="submit_contact">Submit</button> 
                                 
                                </form>
                              </div>
                        </div>
                    </section>
              </div>
          </div>
        </section> 
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
  </div>
 

  <script>
    $(document).ready(function(){
      $("#submit_contact").on('click',function(){
        var fullname=$("#fullname").val();
        var email=$("#email").val();
        var message=$("#message").val();
        var error="";

        if(fullname =="" || fullname==null){
          error="Fullname is required";
        }else if(email=="" || email==null){
          error=" Provide email address";
        }else if(message=="" || message==null){
          error="Type your message";
        }
         
        if(error !="" ){
          $("#registration-error").html(error);
        }else{
          
            $.ajax({
                url:'../functions/Helper.php', 
                method:'POST',
                data:{
                  submit_contact:1,
                    fullname:fullname,
                    email:email,
                    message:message
                },
               
                success:function(response){
                  if(response.indexOf('success')<0){
                     $("#registration-error").html(response) ;
                      }
                  if(response.indexOf('success')>=0){
                      alert("Message sent successfully");
                    window.location="../index.php";
                  }
                },
                dataType:'text'
            });
        }
      });
    });
  </script>
      <script src="../js/bootstrap.min.js"></script>
</body>
</html>