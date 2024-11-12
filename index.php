<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/new/Logo.png" />
        <title>Gift Ordering System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body>
        <div>
           <strong>
           <?php
            require 'header.php';
           ?>
           </strong>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1><em><strong>We sell </strong></em>.</h1>
                       <p>Flat 40% OFF on all premium brands.</p>
                       <a href="products.php" class="btn btn-danger">Shop Now</a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/new/LAccessoriesnew.jpg" alt="Accessories" height="200">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Accessories</p>
                                        <p1>Choose among the best available in the world.</p1>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/new/fashion-women-new.jpg" alt="Watch" height="200">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Dresses</p>
                                    <p1>Our exquisite collection of dresses </p1>
                                </div>
                         </center>
                     </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/new/giftnew.jpg" alt="GiftItems" height="200">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">Gift Items</p>
                                   <p1>Originals from the best brands.</p1>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
           <footer class="footer"> 
               <div class="container">
               <center>
                   <p><a href="https://roserivira.com">Rose Rivira</a> Online Store. All Rights Reserved.</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>