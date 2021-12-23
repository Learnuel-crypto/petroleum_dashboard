<?php
 
  session_start();
 
  function load_page(){
    echo $_SESSION["Regid"];
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">  
    <link href="../css/loginstyle.css" rel="stylesheet" type="text/css" media="screen"> 
    <script type="text/javascript" src="../js/jquery.js"></script>
</head>
<body> 
        <div class="nav">
            <div class="logo"> 
                    <a class="infor" href="../index.php">
                        <img src="../icons/pumprice-icon-3.png">
                    </a>
            </div>
        </div>
    <section class="container-fluid bg">
        <section class="row justify-content-center">
            <section class="col-12 col-sm-6 col-md-3">
                <form name="login-fm" class="form-container"   method="POST" > 
                            <h5 class="form-group">Please Login</h5>
                        <div class="form-group">
                            <lable for="InputEmail">Email address</lable>
                            <input type="email"class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="enter email" name="email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="InputPassword">Password</label>
                            <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password">
                        </div>
                        <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="check">
                        <label class="form-check-label" for="check">Remember me</label>
                        </div>
                        <div class="form-group">
                            <p class="form-group"><a href="forgetpassword.php" class="infor">Forgot password ?</a> </p>
                        </div>
                        <div class="form-group">
                            <h6 class="form-group" id="login-error"><small>
                                  
                        </small></h6> 
                        </div>
                        <button type="button" class="btn btn-primary btn-block" id="login" name="login">Login</button>
                        <div class="form-group">
                            <label class="form-text-2">Not a user ?<a href="./user_registration.php" class="infor"> Register</a> </label>
                        </div>
                    </form> 
                </section>
            </section>
        </section>
    </div>
    <script type="text/javascript">  
        //validate form data
        $(document).ready(function(){
            $("#login").on('click',function(){
                var email=$("#InputEmail").val();
                var password=$("#InputPassword").val();
                var error=""; 
                if(email=="" || email==null){
                    error="Enter email address";
                }else if(password=="" || password ==null){
                    error="Enter password";
                }

                if(error !=""){
                    $("#login-error").html(error);
                }else{
                    $("#login-error").html(error);

                    $.ajax({url:'../functions/Helper.php',method:'POST',data:{login:1,email:email,password:password },

                        success:function(response){
                            if(response.indexOf('success')<0){
                        $("#login-error").html(response) ; 
                       }

                      if(response.indexOf('success')>=0){  
                          //i want to get the user Regid
                          //which will determing if am to load
                          // price.php (when Regi is nothing) 
                          //or
                          //load dashboard.php (when Regid has a value)
                        } 
                        },
                        dataType:'text'
                    });
                }

               
            });
        });
    </script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/54be263888.js" crossorigin="anonymous"></script>
</body>
</html>