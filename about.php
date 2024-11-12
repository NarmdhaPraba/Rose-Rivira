<?php
    session_start();
    require 'connection.php';
    if(!isset($_SESSION['email'])){
        header('location:index.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/new/Logo.png" />
        <title>Rose Rivira Online Store</title>
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
            <?php 
               require 'header.php';
            ?>
            <br>
            <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Unleash Your New Fashion</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="img/new/RRLogo.gif" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">Let your inner peace with most trendy way...</h4>
                </a>
                <p>
                We have Top Level Brands in our shop. Providing best sevices too .You
			can contact us at any time.
			Our service is available 24*7 hours.Our shop is still running sucessfully by the hard working of our employees.
			We are connected with world best brands. We provide our service since 2018 to till
			now. We showcase some additional seasonal things too.
			Once you visit and shop at our web page you will feel the better experience of trends.
			    </p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <p><span class="glyphicon glyphicon-earphone"></span> Contact us : 0705648913</p>
                <p><span class="glyphicon glyphicon-envelope"></span>e-mail : roserivira@yahoo.com</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>Nugegoda, Colombo.</p>
<br></br>
				<br></br>
			  <br></br>
			<br></br>			  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
            <br><br><br><br><br><br><br><br><br><br>
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
