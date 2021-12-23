<?php
session_start();
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
        <a class="logo-icon" href="../index.php"><img src="../icons/pumprice-icon-3.png"> </a>
         
    <div class="log-infor">
    
    </div>
   
    </section>

    <section class="main-content"> 
        <div class="side-bar">
            <div class="user-details">
                <div class="text">
                    <h4 class="text-heading"><strong>Email</strong> </h4>
                    <h3 class="text-details"> 
                      <?php echo $_SESSION["Email"]; ?></h4>
                    <h4 class="text- heading"> <strong>Username</strong></h4>
                </div> 
            </div>
            <a class="logout-icon" href="../index.php">Logout </a>
           
            <div class="items">
                <ul class="btn">
                    <li class="btn-list active-btn">
                        <a class=" btn-list-item active-list" href="./dashboard.php">Dashboard</a>
                    </li> 
                    <li class="btn-list ">
                        <a class=" btn-list-item " href="./product.php">new product</a>
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
               1 This is some text within a card body to hadd more content.
               <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
            </div>
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