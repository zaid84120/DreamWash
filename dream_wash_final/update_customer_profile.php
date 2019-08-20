<?php
session_start();
$customer_id=$_SESSION['customer_id'];
include 'db.php';
$customer_mobile=$_POST['mobile'];
$customer_street=$_POST['address1'];
$customer_landmark=$_POST['address2'];
$customer_city=$_POST['city'];
$customer_state=$_POST['state'];
$customer_pincode=$_POST['zipcode'];
$customer_country="india";
$query="INSERT INTO customer_address(customer_id, streetaddress, streetaddress1, city, state, zipcode, country) VALUES ('$customer_id','$customer_street','$customer_landmark','$customer_city','$customer_state','$customer_pincode','$customer_country')";
//echo $customer_id; 
$sql="UPDATE customer_signup SET customer_mobile='$customer_mobile' where customer_id='$customer_id'";   
          $result = mysqli_query($connection, $query);
          $result1=mysqli_query($connection,$sql);
          if($result && $result1)
          {
          	echo "<script>alert('Profile Updated successfully')
          		window.location.href='customer_dashboard.php';
          	</script>";
          }
          else
          {
          	echo "<script>alert('Profile Updated Unsuccessfully')
          		window.location.href='customer_dashboard.php';
          	</script>";
          }

mysqli_close($connection);
?>