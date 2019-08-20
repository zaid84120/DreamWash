<?php
session_start();
$customer_name=$_SESSION['customer_name'];

include 'db.php';
if(isset($_SESSION['customer_id']))
{

?>
<!doctype html>
<html>
<head>
    <title>Dream Wash</title>


<link rel="stylesheet" href="css/3.css">
<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/22.css">
<link rel="stylesheet" href="css/font-icon.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
<style>
body{
background-color:white !important;
}
</style>
    <script  type="text/javascript">
            function book_appointmnt(){
                $("#page-wrapper").load("appointment.php"); }
             function cancel_appointment(){
                $("#page-wrapper").load("cancel-appointment.php");}               
             function view_customer_packages(){
                $("#page-wrapper").load("view_customer_packages.php");}
             function view_customer_profile(){
                $("#page-wrapper").load("view_customer_profile.php");}
                function edit_customer_profile(){
                    $("#page-wrapper").load("edit_customer_profile.php");}
                function customer_history(){
                    $("#page-wrapper").load("customer_history.php");}     
                  /*function customer_logout(){
                    $("#d").load("customer_logout.php");}*/              
                                                                      
</script>
</head>
<body>



<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   
      <div class="w3-bar w3-white w3-wide w3-padding w3-card">

 <a href="" class="w3-bar-item w3-button"><?php echo "Welcome   ".$customer_name;?></a>    
      <div class="w3-right w3-hide-small">
  
      <a href="customer_dashboard.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-home"></span>Home</a>
   

        
             
                <a href="customer_logout.php" class="w3-bar-item w3-button"><span class="glyphicon glyphicon-off"></span>Logout</a>
                 
            
      

    </div>
  </div>
</div>
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a>
        </div>
        <div class="w3-top">
  
    
        </div>
    </div>
</nav>

<div id="wrapper" class="toggled">
    <div class="container-fluid">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
              	<li class="sidebar-brand">
                    <br>
                </li>
                
                <li><br>
                    <a href="customer_dashboard.php" ><span class="glyphicon glyphicon-home" aria-hidden="true" ></span> Home</a>
                </li>
                              
               
              
                    
                     <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="  glyphicon glyphicon-pencil"></i> Appointment <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                  <li><a href="#" id="book_appointmnt" onclick="book_appointmnt()">Book Appointment</a></li>
                  <li><a href="#" id="cancel_appointment"  onclick="cancel_appointment()">Cancel Appointment</a></li>
                  
                </ul>


                     <li data-toggle="collapse" data-target="#profile" class="collapsed">
                  <a href="#"><i class="glyphicon glyphicon-user"></i> Profile <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="profile">
                  <li><a href="#" onclick="view_customer_packages()">View Packages</a></li>
                   <li><a href="#" onclick="view_customer_profile()">View Profile</a></li>
                  <li><a href="#" onclick="edit_customer_profile()">Update profile</a></li>
                  <li><a href="#" onclick="customer_history()">History</a></li>
                  
                </ul>
                

               
              <!--  <li>
                   <a href="#contact"> <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>Contact Us</a>
                </li>-->
                <li>
                    <a href="customer_logout.php" ><span class="glyphicon glyphicon-off" aria-hidden="true"></span>Logout</a>
                </li>
              	
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
     
            
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                   <header class="w3-display-container w3-content w3-wide" style="max-width:1300px;" id="home">
  <img class="w3-image" src="images/portfolio/1.jpg" alt="Dreamwash" width="1300" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>DREAM</b></span> <span class="w3-hide-small w3-text-light-grey">WASH</span></h1>
  </div>
</header>
                </div>

                <div class="row">
                    <!-- package section --> 

<?php

   

$sql = 'SELECT * 
        FROM package';
$resultViewPackage=mysqli_query($connection,"$sql");
?>

<section id="price">
 <div id="pricing5" data-section="pricing-5" class="data-section">
      <div class="container">
         <div class="section-header">
                <h2 class="wow fadeInDown animated">Packages</h2>
                <p class="wow fadeInDown animated">Best Services at Best Prices .</p>
            </div>
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
                  <a  href="cardpayment.php?package_id=<?php echo  $dataViewPackage['package_id'] ?>" class="btn btn-default-green-transparent-tiny editContent" >BUY NOW</a>
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

 <section id="contact" class="section">
  <div class="container">
      <div class="section-header">
                <h2 class="wow fadeInDown animated">Contact Us</h2>
                <p class="wow fadeInDown animated">We are here to help you 24/7.</p>
            </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2 conForm">       
        <div id="message"></div>
        <form method="post" action="contact.php" name="cform" >
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
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
</div>
<!-- /#wrapper -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 

<script src="js/retina.min.js"></script> 
<script src="js/custom.js"></script> 
 <script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.contact.js"></script>


<script type="text/javascript">
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
</body>
</html>

<?php
  
    
}

else
{
        echo'<body bgcolor="silver">';
  echo'<center>';
  echo "<center></h1>Access Denied Verify your username and password</h1></center>"."<br />";
      echo "<center></h6>Please wait </h6></center>"."<br />";
      header('Refresh:3 ; url=index.php');
  echo'</center>';
  echo'</body>';
    
}
?>