<?php
session_start();
$customer_id=$_SESSION['customer_id'];
include 'db.php';
$customer_id=$_SESSION['customer_id'];
                  $sql3="select * from customer_address where customer_id=".$customer_id."";
                  $res = $connection->query($sql3);
                  print_r($res->num_rows);
                if ($res->num_rows > 0) 
                {

$query="SELECT customer_signup.customer_id,customer_name,customer_email,customer_mobile,streetaddress,streetaddress1,city,state,zipcode FROM customer_signup,customer_address WHERE customer_signup.customer_id=customer_address.customer_id AND customer_signup.customer_id='$customer_id'";
    
          $result = mysqli_query($connection, $query);


?>


        <?php

        
        
        while ($row = mysqli_fetch_array($result))
        {
           // $customer_id    = $_SESSION['customer_id'];
            $customer_name = $row['customer_name'];
            $customer_email= $row['customer_email'];
            $customer_mobile=$row['customer_mobile'];
            $streetaddress=$row['streetaddress'];
            $streetaddress1=$row['streetaddress1'];
            $city=$row['city'];
            $state=$row['state'];
            $zipcode=$row['zipcode'];
        
        }
    
?>

<br><br><br><br><br><br>
<div class="row">
<legend>CUSTOMER DETAILS</legend>
<br><br>
<div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Name :</label>                  
                        <div class="col-sm-5">
                            <input type="text" name="c_name" value="<?php echo $customer_name;?>" id="textfield3" class="form-control" readonly/>
                        </div>
                </div>

<br><br>
<div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Email :</label>                  
                        <div class="col-sm-5">
                            <input type="text" name="c_email" value="<?php echo $customer_email;?>" id="textfield3" class="form-control" readonly/>
                        </div>
                </div>

<br><br>
                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Mobile :</label>                   
                        <div class="col-sm-5">
                            <input type="text" name="mobile" value="<?php echo $customer_mobile;?>" id="textfield6" class="form-control" readonly/>
                        </div>
                </div>                                      


<br><br>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Street Address :</label>
            <div class="col-sm-8">
              <input type="text" id="address1" name="address1" value="<?php echo $streetaddress;?>" placeholder="Street Address" class="form-control" readonly/>
              <br>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Street Address Line 1:</label>
            <div class="col-sm-8">
              <input type="text" id="address2" name="address2" value="<?php echo $streetaddress1;?>" placeholder="Street Address Line 1" class="form-control" readonly/>
              <br>
            </div>
          </div>

       
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">City :</label>
            <div class="col-sm-8">
              <input type="text" id="city" name="city" value="<?php echo $city;?>" placeholder="City" class="form-control" readonly style="width: 40%;" />
            <br>
            </div>
            </div>


<br>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">State :</label>
            <div class="col-sm-8">
              <input type="text" id="state" name="state" value="<?php echo $state;?>" placeholder="State" class="form-control" readonly style="width: 40%;" />
              <br>
            </div>
            </div>
            <br>
            
        <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Pincode :</label>
            <div class="col-sm-7">
              <input type="text" id="zipcode" name="zipcode" value="<?php echo $zipcode;?>" placeholder="State" class="form-control" readonly style="width: 40%;"/>
                <br><br>
            </div>
            </div>
            
</div>

</body>
</html>
<?php
}
else
echo "<script>alert('please Update Profile!');window.location.href='customer_dashboard.php';</script>";

    

?>