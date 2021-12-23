<?php
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>pupprice</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet" > 
    <link href="../css/market.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
    <section class="nav"> 
        <a class="logo-icon" href="./index.php"><img src="../icons/pumprice-icon-3.png"> </a> 
    <div class="log-infor">
    
    </div>
   
    </section>

    <section class="main-content"> 
        <div class="side-bar">
            <div class="user-details">
                <div class="text">
                    <h4 class="text-heading"><strong>Email</strong> </h4>
                    <h3 class="text-details"> linus.zoe@gmail.com</h4>
                    <h4 class="text- heading"> <strong>Username</strong></h4>
                </div> 
            </div>
            <a class="logout-icon" href="../index.php">Logout </a>
           
            <div class="items">
                <ul class="btn">
                    <li class="btn-list  ">
                        <a class=" btn-list-item " href="./dashboard.php">Dashboard</a>
                    </li> 
                    <li class="btn-list active-btn">
                        <a class=" btn-list-item active-list" href="./product.php">New product</a>
                    </li>
                    <li class="btn-list ">
                        <a class=" btn-list-item " href="./#">Update price</a>
                    </li>
                    <li class="btn-list ">
                        <a class=" btn-list-item " href="./#">Market</a>
                    </li>
                    <li class="btn-list ">
                        <a class=" btn-list-item " href="./#">Profile</a>
                    </li>
                    <li class="btn-list ">
                        <a class=" btn-list-item " href="./#">Account</a>
                    </li>
                </ul>
            </div>
        </div> 
        <div class="content">
            <div class="notification">
            <h6 class="notify-text" id="login-error"><small></small></h6>
            </div>
             <div class="card">
                <div class="card-body">
                    <h4 class="card-title"> Add Products</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Create new product details</h6>
                    <div class="form-group">
                         
                        <lable for="InputEmail">Product name</lable>
                        <input type="text"class="form-control" id="InputText" aria-describedby="ProductName" placeholder="Enter product name" name="product">
                        
                    </div>
                    <div class="form-group">
                        <label for="Symbols">Select symbol</label>
                        <select id="symbols" class="form-control">
                            <option value="select">Select</option>
                            <option value="AGO">AGO</option>
                            <option value="DSK">DSK</option>
                            <option value="Kero">Kero</option>
                            <option  value="Oil">OIL</option>
                        </select> 
                    </div>
                    <div class="form-group"> 
                         <lable for="InputPrice">Price</lable>
                         <input type="text"class="form-control" id="InputText" aria-describedby="price" placeholder="Enter product price" name="price">
                         
                     </div> 
                    <div class="form-group">
                        <h6 class="form-group" id="details-error"><small></small></h6>
                        
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="save">Save</button>
                    <hr>
                   
                </form>  
                </div>
                
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
                    <div class="social-link">
                      <a class="icons" href="#">facebook</a> 
                      <a  class="icons" href="#">instagam</a> 
                      <a class="icons" href="#">telegran</a>
                      <a class="icons" href="#">whatsapp</a>
                    </div>
                  </div>
              </footer>
          </section> 
   
</body>
</html>