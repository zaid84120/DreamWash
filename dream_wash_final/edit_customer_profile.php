<?php
session_start();
$customer_id=$_SESSION['customer_id'];
include 'db.php'; 
$query="SELECT* from  customer_signup where customer_id='$customer_id'";
    
          $result = mysqli_query($connection, $query);

?>



        <?php

        
        
        while ($row = mysqli_fetch_array($result))
        {
            $customer_id    = $_SESSION['customer_id'];
            $customer_name = $row['customer_name'];
            $customer_email= $row['customer_email'];
            $customer_mobile=$row['customer_mobile'];
;
        
        }
    
?>

<br><br><br><br><br><br>
<div class="row">
<form action="update_customer_profile.php" method="POST">
<legend>CUSTOMER DETAILS</legend>
<br>

<br><br>
<div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Name :</label>                  
                        <div class="col-sm-5">
                            <input type="text" name="c_name" value="<?php echo $customer_name;?>" id="textfield3" readonly class="form-control" />
                        </div>
                </div>

<br><br>
<div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Email :</label>                  
                        <div class="col-sm-5">
                            <input type="text" name="c_email" value="<?php echo $customer_email;?>" id="textfield3" readonly class="form-control" />
                        </div>
                </div>

<br><br>
                <div class="form-group">
                    <label for="field-1" class="col-sm-3 control-label">Mobile :</label>                   
                        <div class="col-sm-5">
                            <input type="text" name="mobile" value="<?php echo $customer_mobile;?>" id="textfield6" class="form-control" />
                        </div>
                </div>                                      


<br><br>
        <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Street Address :</label>
            <div class="col-sm-8">
              <input type="text" id="address1" name="address1"  placeholder="Street Address" class="form-control" />
              <br>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Street Address Line 1:</label>
            <div class="col-sm-8">
              <input type="text" id="address2" name="address2"  placeholder="Street Address Line 1" class="form-control" />
              <br>
            </div>
          </div>

       
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">City :</label>
            <div class="col-sm-8">
              <input type="text" id="city" name="city"  placeholder="City"  class="form-control"  style="width: 40%;" />
            <br>
            </div>
            </div>


<br>
          <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">State :</label>
            <div class="col-sm-8">
              <input type="text" id="state" name="state"  placeholder="State"  class="form-control"  style="width: 40%;" />
              <br>
            </div>
            </div>
            <br>
            
        <div class="form-group">
            <label class="col-sm-3 control-label" for="textinput">Pincode :</label>
            <div class="col-sm-7">
              <input type="text" id="zipcode" name="zipcode"  maxlength="6" placeholder="State" class="form-control" style="width: 40%;"/>
                <br><br>

            </div>
            </div>

  <div class="form-group">
            <div class="col-sm-offset-3">
            <div class="col-sm-4" >
              <div class="">
                
                <button id="cancel" type="submit" value="submit" class="btn btn-success btn-block" >Save Changes</button>
              </div>
            </div>                

</form>

</div>


</body>
</html>