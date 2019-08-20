<?php
session_start();
include 'db.php';
$employee_id=$_SESSION['employee_id'];
$employee_type=$_SESSION['employee_type'];


$curentpassword=$_POST['curentpassword'];
$newpassword=$_POST['password'];
$conformnewpassword=$_POST['cpassword'];
if($newpassword===$conformnewpassword)
{
	$sql="select employee_password from employee_signup where employee_id=".$employee_id;


	$result1=mysqli_query($connection,$sql);

	if($row=mysqli_fetch_array($result1))
	{
		$password=$row['employee_password'];
		echo"<script>alert($password)</script>";


		if($curentpassword===$password)
		{
			$query="UPDATE employee_signup SET employee_password='$newpassword' where employee_id='$employee_id' AND employee_type='$employee_type'";
			$result=mysqli_query($connection,$query);
			echo"<script>alert('Your Password Updated Successfully!');
			window.location.href='employee_dashboard.php'</script>";
		}
	
		else
		{
			echo"<script>alert('Your Password not Updated!');
			window.location.href='employee_dashboard.php';
			</script>";
		}
}	
	
}
else
{
		echo"<script>alert('New  Password is mismatched!');
		window.location.href='employee_dashboard.php';
		</script>";
	
}
mysqli_close($connection);
?>