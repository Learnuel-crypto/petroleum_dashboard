<?php
 
  session_start();
 
 
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">  
    <link href="../css/loginstyle.css" rel="stylesheet" type="text/css" media="screen">  -->
    <script type="text/javascript" src="../js/jquery.js"></script>
</head>
<body> 
         
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
                } 

                if(error !=""){
                    $("#login-error").html(error);
                }else{
                    $("#login-error").html(error);

                    const xhttp = new XMLHttpRequest();

                    // Define a callback function
                    xhttp.onload = function() {
                    // Here you can use the Data
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("login-error").innerHTML =
                        this.responseText;
                        }
                    }

                    // Send a request
                    xhttp.open("GET", "../functions/Helper.php");
                    xhttp.send();
                }

               
            });
        });
    </script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/54be263888.js" crossorigin="anonymous"></script>
</body>
</html>