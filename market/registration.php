<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pump price</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen"> 
    <link href="../css/bizregstyle.css" rel="stylesheet" type="text/css" media="screen">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="../js/bootstrap.min.js"></script> 
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script src="https://kit.fontawesome.com/54be263888.js" crossorigin="anonymous"></script>
</head>
    <body>
     
      <div class="container-fluid">
        <section class="row1 justify-content-centre">
          <div class="logo"> 
              <a class="infor" href="../index.php">
                <img src="../icons/pumprice-icon-3.png" width="15%">
              </a>
          </div>
      </section>
      <div class="container">   
        <section class="contact">
          <div class="contact-wrapper">
            <div class="registration-left">
                   
            </div>
            <div class="contact-right">
            <h2 class="contact-heading">Registration</h2>
            <div id="registration-error">
                
            </div>
            <form name="reg-form" class="form-control" action="../functions/Functions.php" method="POST" onsubmit="return form_validation()">
              <div class="input-group">
                <input type="text"id="businessname"  class="field" name="businessname">
                <label class="input-lable">Business name</label>
              </div>
              <div class="input-group"> 
                <input type="text"  id="cacnumber" class="field" name="cacnumber">
                <label class="input-lable">CAC Number</label>
              </div>
              <div class="input-group">
                <input type="email"id="email"  class="field" name="email">
                <label class="input-lable">E-mail</label>
              </div>
             
              <div class="input-group"> 
                <input type="text"id="state"  class="field" name="state">
                <label class="input-lable">State</label>
              </div>
              <div class="input-group"> 
                <input type="text"id="city"  class="field" name="city">
                <label class="input-lable">City</label>
              </div>
              <div class="input-group"> 
                <input type="text"id="businesscontact"  class="field" name="businesscontact">
                <label class="input-lable">Business contact</label>
              </div> 
              <div class="input-group"> 
                <input type="text"id="address"  class="field" name="address">
                <label class="input-lable">Address</label>
              </div> 
              <input type="button" id="register" class="submit-btn" value="Submit"name="register">
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
            <div class="social-link">
              <a class="icons"  href="www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a> 
                <a class="icons" href="www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a> 
                <a class="icons"href="www.twitter.com" target="_blank"><i class="fab fa-twitter-square"></i></a> 
              </div>
        </footer>
      </section>
      <script type="text/javascript">

        $(document).ready(function(){
            $("#register").on('click',function(){
              var businessname=$("#businessname").val();
          var cacnumber=$("#cacnumber").val();
          var email=$("#email").val();
          var state=$("#state").val();
          var city=$("#city").val();
          var businesscontact=$("#businesscontact").val();
          var address=$("#address").val();
          var error=""; 
          if(businessname =="" || businessname==null){
            error="Business name is required";
          }else if(cacnumber=="" || cacnumber==null){
            error="CAC number is required";
          }else if(email=="" || email==null){
            error="Email address is required";
          }else if(state=="" || state==null){
            error="State is required";
          }else if(city=="" || city==null){
            error="City of business is required";
          }else if(businesscontact ==""|| businesscontact==null){
            error="Contact is required";
          }else if(businesscontact.length<11){
              error="Invalid contact";
          }
          else if(address=="" || address==null){
            error="Business address is required";
          }

          if(error !=""){
                    $("#registration-error").html(error) ; 
          }else{

            $.ajax({
                    url:'../functions/Helper.php',
                    method:'POST',
                    data:{
                        register:1,
                        businessname: businessname,
                        cacnumber:cacnumber, 
                        email: email,
                        state:state,
                        city:city,
                        businesscontact:businesscontact,
                        address:address 
                      }, 
                    success:function(response){

                      if(response.indexOf('success')<0){
                        $("#registration-error").html(response) ; 
                       }

                      if(response.indexOf('success')>=0){
                          alert("Registration successful, \nCheck email within 48 hours");
                           window.location="../index.php";
                         } 
                    },
                    dataType:'text'
            });
          }

            });
        });
 
      </script>
    </body>
</html>