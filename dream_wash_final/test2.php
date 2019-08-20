
<!doctype html>
<html class="no-js" lang="">

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="webthemez">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DREAM WASH </title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/1.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" type="text/css" href="css/style4.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">

 
<style>
body{
background-color:white !important;
}

</style>


</head>

<body >
<!-- header section -->
<section class="banner" role="banner" id="home">
  <header id="header">
    <div class="header-content clearfix"> <a class="logo" href="customer_dashboard.php">DREAM WASH</a>
                  <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" >HOME</a>
                            </li>
                            <li><a href="#price">PACKAGES</a></li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">APPOINTMENT <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="appointment.php">BOOK </a></li>
                                        <!--<li><a href="#">RESECHDULE </a></li>-->
                                        <li><a href="cancel-appointment.php">CANCEL </a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFILE <span class="caret"></span></a>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li><a href="#">VIEW PACKAGES</a></li>
                                        <li><a href="#">UPDATE PROFILE</a></li>
                                        <li><a href="#">HISTORY</a></li>
                                        <li><a href="customer_logout.php">LOGOUT</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#contact">CONTACT</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>
        <!-- banner text --> 
 
<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li> 
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                <div class="row"><div class="container"> 
                    <div class="col-md-9 text-left">
                        <h3 data-animation="animated bounceInDown">Best Car Wash</h3>
                        <h4 data-animation="animated bounceInUp">Easily use stunning effects</h4>             
                     </div>
                </div></div>
             </div> 
            <!-- Item 2 -->
            <div class="item slide2">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Best plans</h3>
                        <h4 data-animation="animated bounceInUp">Minimum Rates  </h4>
                     </div> 
                </div></div>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <div class="row"><div class="container">
                    <div class="col-md-7 text-left">
                        <h3 data-animation="animated bounceInDown">Best Support</h3>
                        <h4 data-animation="animated bounceInUp">24/7</h4>
                     </div>    
                </div></div>
            </div>     
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>
  
</section>

<?php

$connection = mysqli_connect("localhost", "root", "") or die("unable to connect to host");
$db = mysqli_select_db( $connection,"dreamwash"); 

$sql = 'SELECT * 
        FROM package';
$resultViewPackage=mysqli_query($connection,"$sql");
?>

<section id="price">
 <div id="pricing5" data-section="pricing-5" class="data-section">
      <div class="container">
        <?php
        if((mysqli_num_rows($resultViewPackage))!=0){

        $count=0;
        while($count<(mysqli_num_rows($resultViewPackage))){
        ?>
        <div class="row">
          <?php
          $i=0;
          while($i<4 && $dataViewPackage=mysqli_fetch_array($resultViewPackage)){
?>

          <div class="col-sm-6 col-md-3">
          <div class="table">
              <h3 class="editContent" > <?php echo $dataViewPackage['package_name']; ?></h3>
              <h2 class="editContent" ><?php echo "Rs"."&nbsp".$dataViewPackage['package_price']."/-"; ?></h2>
              <p class="editContent" ><?php echo $dataViewPackage['package_type']; ?></p>
              <ul class="table-content">
                <li class="editContent" ><i class="fa fa-automobile"></i> <?php echo $dataViewPackage['no_of_services']."&nbsp"."Car Washes"; ?></li>
                
                <li class="editContent"><i class="fa fa-envelope-o"></i> Email Support</li>
                <li class="editContent"><i class="fa fa-phone"></i> 24x7 Support</li>
              </ul>
              
              <div class="text-center text-uppercase">
                <a  href="cardpayment.php" class="btn btn-default-green-transparent-tiny editContent" >BUY NOW</a>
              </div>
            </div>
          </div>

          <?php
          $i++;


        }
        ?>
  </div>
  <?php
  $count++;
      }
}else{

?>

<?php
}
?>
</div>

</section>
 


<!-- contact section -->
<section id="contact" class="section">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Contact Us</h2>
                <p class="wow fadeInDown animated">We are here to help you 24/7.</p>
            </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">       
        <div id="message"></div>
        <form method="post" action="php/contact.php" name="cform" id="cform">
          <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
          <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
          <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea>
          <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
          <div id="simple-msg"></div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- contact section --> 
<!-- JS FILES --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/jquery.fancybox.pack.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.contact.js"></script> 
</body>
</html>

