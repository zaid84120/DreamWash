	
<?php
session_start();
include 'db.php';    
$customer_id=($_SESSION['customer_id']);
$appointment_date = $_POST['date_and_time'];
//$customer_name= $_POST['firstname'];
$streetaddress=$_POST['address1'];
$streetaddress1=$_POST['address2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zipcode=$_POST['zipcode'];
$country=$_POST['country'];
$car=$_POST['car_number'];
$package=$_POST['package'];
$r1='';
$r2='';
$r3='';

$result=mysqli_query($connection,"insert into customer_address(customer_id,streetaddress,streetaddress1,city,state,zipcode,country)values('$customer_id','$streetaddress','$streetaddress1','$city','$state','$zipcode','$country')");
echo $result;
$sql="select package_detail_id from package_details where customer_id=".$customer_id." AND package_id=".$package;
$result1=$connection->query($sql);
//echo $result1;
echo $package ." ".$customer_id;
$result2=mysqli_query($connection,"select customer_address_id from customer_address where customer_id=".$customer_id);
                        while ($row = mysqli_fetch_array($result1))
                        {
                        	while($row1=mysqli_fetch_array($result2))
                        	{
                        		$r1= $row['package_detail_id']." ";
                        		$r2=$row1['customer_address_id']." ";
                        		//echo $r1." ".$r2;
                        		//"$row['package_detail_id']","$row1['customer_address_id']"
                                  }
                           }
                           $r3="0";             
$query=mysqli_query($connection,"insert into appointment(package_detail_id,customer_address_id,appointment_date,employee_id,car_no)values('$r1','$r2','$appointment_date','$r3','$car');");

						//}
					//}
if(!$query)
echo mysqli_error($connection);
else
	echo "<script>alert('Your appointment is successfully booked');window.location.href='customer_dashboard.php';</script>";

mysqli_close($connection); 

?>