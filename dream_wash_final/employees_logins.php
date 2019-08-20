<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Employee Login</title>

    
    <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/alogin.css">
   <script src="js/bootstrap.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>









</head>


<body id="LoginForm">
<div class="container">

<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2>
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" method="POST" action="employee_login.php">

        <div class="form-group">


            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email Address">

        </div>

        <div class="form-group" >

            <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" >
            
        </div>
        <div class="forgot">
     <input type="checkbox" onclick="myFunction()">Show Password
        <br><br><a href="#">Forgot password?</a>
</div>
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    </div>

</div></div>

<script>
	function myFunction() {
    var x = document.getElementById("inputPassword");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>


</body>
</html>
