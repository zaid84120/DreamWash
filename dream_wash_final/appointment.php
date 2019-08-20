 v<?php
session_start();
include 'db.php';
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 


                $customer_id=$_SESSION['customer_id'];
               


                $sql3="select * from package_details where customer_id=".$customer_id."";
                  $res = $connection->query($sql3);
                 // print_r($res->num_rows);
                if ($res->num_rows > 0) 
                {
?>

<br><br><br>
<br><br>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <form class="form-horizontal" id="fillform"  method="POST" action="appointment_process.php">
        <fieldset>

          <!-- Form Name -->
          <h2>Appointment Form :</h2>
          <br><br>



          <div class="form-group">
          <label class="col-sm-2 control-label" for="textinput">Package :</label>
            
            <div class="col-sm-5">
             <select class="form-control" id="package" name="package" data-validation="required">

              <option value="" disabled selected>Select Packages</option>
              <?php 
          
            
 
                $sql="select  DISTINCT package_id  from package_details where customer_id=".$customer_id."";
                //$result=mysqli_query($connection,$sql);
                  $result = $connection->query($sql);
                      if ($result->num_rows > 0) {
                    
                        while ($row = mysqli_fetch_array($result))
                        {
                        
                          $sql1="select * from package where package_id='".$row['package_id']."'";
                          $result1=mysqli_query($connection,$sql1);
                            while($row1 = mysqli_fetch_array($result1))
                            {
                              echo "<option value=".$row1['package_id'].">".$row1['package_name']."</option>";
                            }
                        }
                      }

                

              ?>
</select></div></div>

          <!-- Text input-->
          <div class="form-group">
            <br>
            <label class="col-sm-2 control-label" for="textinput">Appointment Date :</label>
            <div class="col-sm-5">
             <input  id="appointment_date" name="date_and_time" class="input-append date form_date form-control controls" type="text" placeholder="Enter Date And Time" data-validation="required">
              <span id="error_appointment_date" class="text-danger"></span>
            </div>
             </div>

        

          <!-- Text input-->
          <div class="form-group" id="address">
            <label class="col-sm-2 control-label" for="textinput">Address :</label>
            <div class="col-sm-10">
              <input type="text" id="address1" name="address1" placeholder="Street Address" class="form-control" data-validation="required">
              <span id="error_address1" class="text-danger"></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput"></label>
            <div class="col-sm-10">
              <input type="text" id="address2" name="address2" placeholder="Street Address Line 1" class="form-control" data-validation="required">
              <span id="error_address2" class="text-danger"></span>
            </div>
          </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput"></label>
            <div class="col-sm-5">
              <input type="text" id="city" name="city" placeholder="City" class="form-control" data-validation="required">
              <span id="error_city" class="text-danger"></span>
            </div>

            
            <div class="col-sm-5">
              <input type="text" placeholder="State" name="state" class="form-control" id="region" data-validation="required">
              <span id="error_region" class="text-danger"></span>
            </div>
          </div>

             <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput"></label>
            <div class="col-sm-5">
              <input type="text" placeholder="Postal/Zip Code" maxlength="6" name="zipcode" class="form-control" id="zipcode" data-validation="required">
              <span id="error_zipcode" class="text-danger"></span>
            </div>

            
            <div class="col-sm-5">
              <select class="form-control" id="country" name="country" data-validation="required">
                <option value="">Select Country</option>
                <option value="India"> India</option>
              </select>
              <span id="error_country" class="text-danger"></span>
            </div>
          </div>
          <!-- Text input-->

   <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Car Number :</label>
            
             
            <div class="col-sm-5">
              <input type="text" id="car_number" name="car_number" placeholder="Car Number" class="form-control" data-validation="required">
               <span id="error_car_number" class="text-danger"></span>
               <br>
            </div>
          </div>

        

          <div class="form-group">
               <div class="col-sm-offset-3">
            <div class="col-sm-4">
              <div class="">
                
                <button id="submit" type="submit" value="submit" class="btn btn-success btn-block" >Book Appointment</button>
              </div>
            </div>
             <div class="col-sm-2">
              
            </div>
</div>
          </div>

        </fieldset>
      </form>
    </div><!-- /.col-lg-12 -->
</div><!-- /.row -->


<script src="js/bootstrap-datetimepicker.min.js"></script> 
 <script src="js/custom.js"></script> 
</body>
</html>
<?php
}
else

echo "<script>alert('You have not yet purchased any package!');window.location.href='customer_dashboard.php';</script>";

?>