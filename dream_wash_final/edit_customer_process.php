<?php
include 'db.php'; 


  if(isset($_POST['Submit'])){
  
 
		    $customer_id    = $_POST['customer_id '];
            $customer_name = $_POST['customer_name'];
            $customer_email= $_POST['customer_email'];
            $customer_mobile=$_POST['customer_mobile'];
            $streetaddress=$_POST['streetaddress '];
            $streetaddress1=$_POST['streetaddress1'];
            $city=$_POST['city'];
            $state=$_POST['state'];
            $zipcode=$_POST['zipcode'];
        
  
  $query="UPDATE customer_address, customer_signup SET where customer_id = '".$customer_id."'";
  
  mysql_query($query) or die("Cannot update");//update or error
  }

?>