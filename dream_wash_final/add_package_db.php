<?php

include 'db.php';
$package_name= $_POST['pname'];
$package_type= $_POST['ptype'];
$package_quantity= $_POST['pquantity'];
$package_price= $_POST['price'];
$days=$_POST['days'];
$query=mysqli_query($connection,"insert into package(package_name,package_type,no_of_services,package_price,No_Days)values('$package_name','$package_type','$package_quantity','$package_price','$days')");
echo "<script>
alert('Package Added Successfully!!');
window.location.href='admin_dashboard.php';
</script>";
mysqli_close($connection);

?>
