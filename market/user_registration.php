<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pump price</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen"> 
    <link href="../css/loginstyle.css" rel="stylesheet" type="text/css" media="screen"> 
    <script type="text/javascript" src="../js/jquery.js"></script>
    <script src="https://kit.fontawesome.com/54be263888.js" crossorigin="anonymous"></script>
</head>
<body>
     
 <div class="container-fluid">
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
                
                <form name="register" class="form-container" action="../functions/Helper.php" method="POST">
                
                    <div class="form-group">
                        <h5 class="form-group">Registration</h5>
                        
                        <lable for="InputEmail">Email address</lable>
                        <input type="email"class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password1">
                    </div>
                    <div class="form-group">
                        <label for="InputPassword">Password</label>
                        <input type="password" class="form-control" id="InputPassword2" placeholder="Confirm password" name="password2">
                    </div>
                    <div class="form-group form-check"> 
                       <label class="form-text-2"  >Already a user ?  <a class="infor" href="./login.php"> Login</a> </label>
                    </div>
                     
                    <div class="form-group">
                        <h6 class="form-group" id="login-error"><small></small></h6>
                        
                    </div>
                    <button type="button" id="user_register" class="btn btn-primary btn-block" name="user_register">Submit</button>
                     
                </form> 
            </section>
        </section>
    </section>
    <script type="text/javascript"> 
        $(document).ready(function(){
           $("#user_register").on('click',function(){
                var email=$("#InputEmail").val();
                var password=$("#InputPassword").val();
                var con_password=$("#InputPassword2").val();
                var error="";

                if(email =="" || email==null){
                    error="Email is required";
                }else if(password =="" || password==null){
                    error="Password is required";
                } else if(password.length<2){
                    error="Password is too short";
                }else if(con_password =="" || con_password==null){
                    error="Confirm password"
                }else if(password !=con_password){
                    error="Password mismatch";
                }


                if(error !=""){
                    $("#login-error").html(error) ; 
                }else{
                    //connect to php
                    $.ajax({
                            url:'../functions/Helper.php',
                            method:'POST',
                            data:{
                                user_register:1,
                                email: email,
                                password: password
                            },
                            success:function(response){
                                if(response.indexOf('success')<0){
                                  $("#login-error").html(response) ;
                                }
                                  if(response.indexOf('success')>=0){
                                      alert("Registration successful");
                                    window.location="login.php";
                                  }
                            },
                            dataType: 'text'
                    });
                }
           }) ;
            
        });
    </script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com 54be263888.js" crossorigin="anonymous"></script>
</body>
</html>

