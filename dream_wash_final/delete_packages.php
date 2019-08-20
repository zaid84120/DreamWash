<?php
include 'db.php'; 

$msgid=$_POST['name'];
$query="delete from package where package_id='$msgid'";
$result=mysqli_query($connection,$query);
if($result){
echo "<script>
alert('Package Deleted Successfully!!');
window.location.href='admin_dashboard.php';
</script>";
} else {
echo "<script>
alert('Error! Deletion Unsuccessfull!');
window.location.href='manage_package.php';
</script>";
}
mysqli_close($connection);

?>
