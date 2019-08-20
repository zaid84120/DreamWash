<?php
session_start();
include 'db.php'; 


$user_id = $_POST['email'];
$result = mysqli_query($connection,"SELECT * FROM customer_signup where customer_email='" . $_POST['email'] . "'");
$row = mysqli_fetch_assoc($result);
$fetch_user_id=$row['customer_email'];
$email_id=$row['customer_email'];
$password=$row['customer_password'];
if($user_id==$fetch_user_id) {


//code for sending email

						$message="Your password is : .$password.";
						$name       = @trim(stripslashes("DreamWash")); 
						//$from       = @trim(stripslashes("info@DreamWash.org")); 
						$subject    = @trim(stripslashes("Your Password")); 
						$message    = @trim(stripslashes($message)); 
						$to   		= $email_id;//replace with your email
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
						echo "<script>alert('your password is successsfully sent your email address..!');
						window.location.href='index.php'</script>";
					}else
					{
					    	echo "<script>alert('Your email address is incorrect..!');
						window.location.href='index.php'</script>";
					    
					}

?>





