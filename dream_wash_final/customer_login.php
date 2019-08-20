<?php
session_start();
include 'db.php'; 
$username=$_POST['email'];
$password=$_POST['password'];
$query="select customer_id,customer_email,customer_password,customer_name from customer_signup where customer_email='".$username."' AND  customer_password='".$password."'";
//.base64_decode('customer_password')
$result=mysqli_query($connection,$query);

//echo $result;



$num_rows = mysqli_fetch_assoc($result);

if($num_rows) {
  $_SESSION["customer_id"] = $num_rows['customer_id'];
  $_SESSION["customer_name"] = $num_rows['customer_name'];
  //$_SESSION["username"] = $username;

  header("Location: customer_dashboard.php");
  //echo"Successfully Login";
}
else
 {

	echo "<html><head><script>alert('Your Username and Password Is incorrect!');
window.location.href='index.php';
</script></head></html>";
    //echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    
}

//mysqli_free_result($result);
mysqli_close($connection);


?>



