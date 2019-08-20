<?php
session_start();
if(isset($_POST['pname']) && isset($_POST['ptype']) && isset($_POST['pquantity']) && isset($_POST['price']))
{
include 'db.php';
$package_id=$_SESSION['packid'];
$package_name=$_POST['pname'];
$package_type=$_POST['ptype'];
$package_quantity=$_POST['pquantity'];
$package_price=$_POST['price'];
$query="UPDATE package SET package_name='$package_name',package_type='$package_type',no_of_services='$package_quantity',package_price='$package_price' WHERE package_id='$package_id'";
$result=mysqli_query($connection,$query);
if($result){
echo "<script>
alert('Package Updated Successfully!!');
window.location.href='admin_dashboard.php';
</script>";
} else {
echo "<script>
alert('Error! Updation Unsuccessfull!');
window.location.href='edit_packages.php';
</script>";
}
mysqli_close($connection);
}

?>