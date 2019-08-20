<?php
include 'db.php';

$msgid=$_POST['name'];
$query="delete from appointment where appointment_id='$msgid'";
$result=mysqli_query($connection,$query);
if($result){
echo "<html><head><script>alert('Appointmet Canceled');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=customer_dashboard.php'>";
} else {
    echo "<html><head><script>alert('ERROR! Cancel Opertaion Unsucessfull');</script></head></html>";
   // echo "<meta http-equiv='refresh' content='0; url=view_employee_details.php'>";
}
mysqli_close($connection);

?>
