<?php
session_start();
include 'db.php';
if (!$connection) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}
$employee=$_POST['employee'];
$appointment_id=$_SESSION['appointment_id'];
$status="working";
$sql="UPDATE appointment SET employee_id='$employee' where appointment_id='$appointment_id'";
$sql1="UPDATE employee_signup SET employee_status='$status' where employee_id='$employee'";
$result=mysqli_query($connection,$sql);
$res=mysqli_query($connection,$sql1);
if($result)
{
echo "<script>alert('Asign Employee Id successfully')
window.location.href='admin_dashboard.php';
</script>";
}
else
{
	echo "<script>alert('Asign Employee Id unsuccessfully')
window.location.href='asign_task.php';
</script>";
}
mysqli_close($connection);
?>