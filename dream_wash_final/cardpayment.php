<?php
session_start();
include 'db.php';

$package_id=$_GET['package_id'];
$_SESSION['package_id']=$package_id;
$customer_id=$_SESSION['customer_id'];
                  $sql3="select * from customer_address where customer_id=".$customer_id."";
                  $res = $connection->query($sql3);
                  //print_r($res->num_rows);
                if ($res->num_rows > 0) 
                {
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <script>
    $(document).ready(function(){
        $("button").click(function(){
            $.ajax({
                url:"insert.php" ,
                success:function(data){
                alert(data);
                location.href="customer_dashboard.php";
                    }
                });
        });
    });
    </script>
    
</head>

<body>

<div class="container">

<!--<div class="page-header">
    <h1>Credit Card Payment Form <small>A responsive credit card payment template</small></h1>
</div>-->

<!-- Credit Card Payment Form - START -->

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <h3 class="text-center">Payment Details</h3>
                        <img class="img-responsive cc-img" src="images/1.jpg">
                    </div>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>CARD NUMBER</label>
                                    <div class="input-group">
                                        <input type="tel" class="form-control" maxlength="16" placeholder="Enter Valid Card Number" />
                                        <span class="input-group-addon"><span class="fa fa-credit-card"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input type="tel" class="form-control" maxlength="5"  placeholder="MM / YY" />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label>CV CODE</label>
                                    <input type="tel" class="form-control" maxlength="3"  placeholder="CVV" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>NAME ON CARD</label>
                                    <input type="text" class="form-control" placeholder="Enter Name On Card" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col-xs-12">
                            <button class="btn btn-warning btn-lg btn-block">Make payment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .cc-img {
        margin: 0 auto;
    }
</style>
<!-- Credit Card Payment Form - END -->

</div>

</body>
</html>
<?php
}
else
echo "<script>alert('please Update Profile!');window.location.href='customer_dashboard.php';</script>";

    

?>