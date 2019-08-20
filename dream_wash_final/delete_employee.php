<?php
include 'db.php'; 

$msgid=$_POST['name'];
$query="delete from employee_signup where employee_id='$msgid'";
$result=mysqli_query($connection,$query);
if($result){
echo "<html><head><script>alert('Member Deleted');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=admin_dashboard.php'>";
} else {
    echo "<html><head><script>alert('ERROR! Delete Opertaion Unsucessfull');</script></head></html>";
    echo "<meta http-equiv='refresh' content='0; url=admin_dashboard.php'>";
}
mysqli_close($connection);

?>
