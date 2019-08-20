
<?php
session_start();
$employee_id=$_SESSION['employee_id'];
$employee_type=$_SESSION['employee_type'];
include 'db.php';
//echo "<script>alert($employee_id)</script>";
$employee_mobile=$_POST['emobile'];
$employee_street=$_POST['estreet'];
$employee_city=$_POST['ecity'];
$employee_state=$_POST['estate'];
$employee_pincode=$_POST['epincode'];
$employee_country=$_POST['country'];




if($employee_type=="Admin")
{
$query="UPDATE employee_signup SET employee_mobile='$employee_mobile',employee_street='$employee_street',employee_city='$employee_city',employee_state='$employee_state',employee_pincode='$employee_pincode',employee_country='$employee_country' where employee_id='$employee_id' AND employee_type='Admin'";
$result=mysqli_query($connection,$query);
if($result)
{
   
    //code for sending email
						$message="Dear Admin,\r\n Admin Profile Updated Successfully \r\n";
						$name       = @trim(stripslashes("DreamWash")); 
						//$from       = @trim(stripslashes("info@DreamWash.org")); 
						$subject    = @trim(stripslashes("Profile Upadated")); 
						$message    = @trim(stripslashes($message)); 
						$to   		= 'pawanch08@gmail.com';//replace with your email
						$bcc 		= array("Admin <zaidshaikh505@gmail.com>","Pawan <pawanch08@gmail.com>");
						$bcc_to = implode(',', $bcc); // your email address
						
						$headers   = array();
						$headers[] = "MIME-Version: 1.0";
						$headers[] = "Content-type: text/plain; charset=iso-8859-1";
						$headers[] = "From: Info Dreamwash <info@DreamWash.org>";
						$headers[] = "Bcc: $bcc_to";
						$headers[] = "Reply-To: Info Dreamwash <info@DreamWash.org>";
						$headers[] = "Subject: {$subject}";
						$headers[] = "X-Mailer: PHP/".phpversion();
					
						//if(mail($to, $subject, $message,implode("\r\n", $headers)))
						mail($to, $subject, $message,implode("\r\n", $headers));
						
						//email code ends
     echo"<script>alert('Admin Profile Updated Successfully'); window.location.href='admin_dashboard.php';</script>";
}
else
{
    echo"<script>alert('Admin Profile Updated unSuccessfully');  
    window.location.href='admin_dashboard.php';</script>
    ";
}
}
else
{
    $query1="UPDATE employee_signup SET employee_mobile='$employee_mobile',employee_street='$employee_street',employee_city='$employee_city',employee_state='$employee_state',employee_pincode='$employee_pincode',employee_country='$employee_country' where employee_id='$employee_id' AND employee_type='Employee'";
$result=mysqli_query($connection,$query);
if($result)
{
    echo"<script>alert('Employee Profile Updated Successfully');  
    window.location.href='employee_dashboard.php';</script>
    ";
}
else
{
    echo"<script>alert('Employee Profile Updated unSuccessfully');  
    window.location.href='employee_dashboard.php';</script>
    ";
}

}
mysqli_close($connection);






?>