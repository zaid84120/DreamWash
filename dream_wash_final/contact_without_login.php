
<?php
session_start();
$customer_id=$_SESSION['customer_id'];
//echo $customer_id;
include 'db.php';   
/* @var $customername type */
$customername = $_POST['name'];
$customeremail = $_POST['email'];
$comments = $_POST['comments'];

$query = mysqli_query($connection,"insert into contact(contact_name,contact_email,contact_message,customer_id)values('$customername','$customeremail','$comments','$customer_id')");

echo "<script>
alert('Thank You for contacting us! our Team will contacting you shortly ');
window.location.href='index.php';
</script>";


mysqli_close($connection); 
?>

