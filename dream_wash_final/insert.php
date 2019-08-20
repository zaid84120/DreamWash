<?php
session_start();
include 'db.php';
$cutomer_id=$_SESSION['customer_id'];
$package_id=$_SESSION['package_id'];

$sql="insert into package_details (customer_id,package_id) values(".$cutomer_id.",".$package_id.")";

$action=mysqli_query($connection,$sql);
if ($action)
    echo "Thank you Payment is done";
else 
    echo mysqli_error($action);
?>