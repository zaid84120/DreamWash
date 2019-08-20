<?php
session_start();
$appointment_id=$_POST['name'];
$employee_id=$_SESSION['employee_id'];
//echo "<script>alert($_SESSION[appointment_id])</script>";



if (!$connection) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}
$completion_date=date("Y/m/d h:i:sa");
$status="1";
$sql="UPDATE appointment SET  appointment_status=1,completion_date='$completion_date'where appointment_id='$appointment_id'AND employee_id='$employee_id'";

$status="idle";
$sql1="UPDATE employee_signup SET employee_status='$status' where employee_id='$employee_id' ";
$result=mysqli_query($conn,$sql);
$res=mysqli_query($conn,$sql1);
if($result)
{
echo"<script>alert('Successfully Completed')
window.location.href='employee_dashboard.php';
</script>";
}
else
{
	//echo mysqli_error($conn);
echo"<script>alert(unsuccessful)
window.location.href='employee_dashboard.php';
</script>";
}//echo"<script>alert($appointment_id)</script>";
echo $completion_date;
mysqli_close($conn);
?>