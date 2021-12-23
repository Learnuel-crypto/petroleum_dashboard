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

                <form class="form-container"   method="POST">
                    <h5 class="form-group">Find Account</h5>
                    <div class="form-group">
                        <lable for="InputEmail">Email address</lable>
                        <input type="email"class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="Enter email address"> 
                        <small id="emailHelp" class="form-text text-muted">The email that was used to sign up.</small>
                    </div> 
                     
                    <div class="form-group">
                        <p class="form-group"><a href="./login.php" class="infor">Login</a> </p>
                    </div>
                    <div class="form-group">
                        <h6 class="form-group" id="login-error"><small></small></h6> 
                    </div>
                    <button type="button" id="forget_password" class="btn btn-primary btn-block" name="forget_password">Submit</button>
                    
                </form> 
            </section>
        </section>
    </section>
     
    <script type="text/javascript">
        $(document).ready(function(){
            $("#forget_password").on('click',function(){
                var email=$("#InputEmail").val();
                var error="";

                if(email==""|| email==null){
                    error="Provide email address";
                }

                if(error !=""){
                    $("#login-error").html(error);
                }else{
                    $.ajax({
                            url:'../functions/Helper.php',
                            method:'POST',
                            data:{
                                forget_password:1,
                                email:email
                            },

                            success:function(response){
                                if(response.indexOf('success')<0){
                                    $("#login-error").html(response);
                                }

                                if(response.indexOf('success')>=0){
                                    // get user_type
                                    var user_type="<?php 
                                   if( isset($_SESSION["Regid"])){
                                        echo $_SESSION["Regid"];
                                    } 
                                    ?>";
                                    //if ordinary user show reset password page
                                    if(user_type=="" || user_type== null){
                                        //show reset password page
                                        window.location='./password_reset.php';
                                    }else{
                                        //else email the business user
                                        alert("check email for login details");
                                    } 
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