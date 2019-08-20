<?php
include 'db.php';  
/* @var $customername type */
$employeetype = $_POST['r'];
$employeename = $_POST['ename'];
$employeenumber = $_POST['emobile'];
$employeeemail = $_POST['eemail'];
$employeepassword=$_POST['password'];
$employeestreet=$_POST['estreet'];
$employeecity=$_POST['city'];
$employeestate=$_POST['state'];
$employeepincode=$_POST['pincode'];
$employeecountry=$_POST['country'];
$employeestatus=$_POST['status'];
$query1= mysqli_query($connection,"select employee_email from employee_signup where employee_email='$employeeemail'");
if(mysqli_num_rows($query1) != 0){
   echo"<script> alert('Email Already Exsist')
	window.location.href='admin_dashboard.php';
   </script>";

//header("Location:../index.html");
//echo "<script>('#myModal').modal('show')</script>";

}
else{
$query = mysqli_query($connection,"insert into employee_signup(employee_type,employee_name,employee_status,employee_mobile,employee_email,employee_password,employee_street,employee_city,employee_state,employee_pincode,employee_country)values('$employeetype','$employeename','$employeestatus','$employeenumber','$employeeemail','$employeepassword','$employeestreet','$employeecity','$employeestate','$employeepincode','$employeecountry')");

echo "<html><head><script>alert('Registeration Successfully Done..!');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=admin_dashboard.php'>";

//header("Location:../pages/employee_login.html");
//echo"<script> alert('Dear Employee,Ypu Username is your email and password is mobile number!')</script>";
}

mysqli_close($connection); 
?>
