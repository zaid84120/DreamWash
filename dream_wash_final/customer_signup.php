
<?php
include 'db.php';    
/* @var $customername type */
$customername = $_POST['name'];
$customeremail = $_POST['email'];
$customermobile = $_POST['mobile'];
$customerpassword =  $_POST['password'];
//base64_encode($_POST['password']);
$query1= mysqli_query($connection,"select customer_email from customer_signup where customer_email='$customeremail'");
if(mysqli_num_rows($query1) != 0){
   echo "<script>
alert('Email Already Exsist!');
window.location.href='index.php';
</script>";

//header("Location:../index.html");
//echo "<script>('#myModal').modal('show')</script>";

}
else{
$query = mysqli_query($connection,"insert into customer_signup(customer_name,customer_email,customer_mobile,customer_password)values('$customername','$customeremail','$customermobile','$customerpassword')");

echo "<script>
alert('Your Signup is successfully Done!');
window.location.href='index.php';
</script>";
}

mysqli_close($connection); 
?>

