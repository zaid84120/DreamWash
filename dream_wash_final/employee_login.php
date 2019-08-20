<?php
session_start();
include 'db.php';  
/* @var $customername type */
//print_r($_POST);

$username=$_POST['email'];
$password=$_POST['password'];
//$password=sha1($password);




//select Data from processing Table
$query="select employee_type,employee_id,employee_name from employee_signup where employee_email='$username' and employee_password='$password'";
//echo $query;
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)==1)
{
    while($row= mysqli_fetch_assoc($result))
    {

        $employee_type=$row['employee_type'];
        $employee_id=$row['employee_id'];
        $employee_name=$row['employee_name'];
        
    }

//echo $employee_type;


if($employee_type=="Admin")
{

$_SESSION['employee_type']="Admin";
$_SESSION['employee_id']=$employee_id;
$_SESSION['employee_name']=$employee_name;
header("location:admin_dashboard.php");

/*
else
{
	echo'<body bgcolor="silver">';
	echo'<center>';
	echo "<center></h1>Access Denied Verify your username and password</h1></center>"."<br />";
			echo "<center></h6>Please wait while you are redirected in 3 seconds</h6></center>"."<br />";
			header('Refresh: 10; url=../pages/employee_login.html');
	echo'</center>';
	echo'</body>';
}*/
}
else
{

    $_SESSION['employee_type']="Employee";
    $_SESSION['employee_id']=$employee_id;
    $_SESSION['employee_name']=$employee_name;
    header("location:employee_dashboard.php");
}

}
 else {
echo "<script>
alert('Username And Passeord is incorrect!!');
window.location.href='employees_logins.php';
</script>";

 }


?>

