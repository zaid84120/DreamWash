
<?php
error_reporting(0);
ob_start();
session_start();

if(isset($_SESSION['employee_id']) && isset($_SESSION['employee_type']))
{
$employee_id=$_SESSION['employee_id'];
$employee_type=$_SESSION['employee_type'];
include 'db.php'; 
//echo "<script>alert($employee_id)</script>";
        $query="select * from employee_signup where employee_id='$employee_id'"AND"employee_type='$employee_type' ";
    
          $result = mysqli_query($connection, $query);
        
        while ($row = mysqli_fetch_array($result))
        {
            $employee_id    = $_SESSION['employee_id'];
            $employee_name = $row['employee_name'];
            $employee_email= $row['employee_email'];
            $employee_mobile=$row['employee_mobile'];
        
        }
}
    
?>



            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Update Profile</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Employee Profile
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="update_employee_profile.php">
                                         
                                        <div class="form-group">
                                        <!--Employee Name-->
                                            <label>Employee Name:</label>
                                           <input class="form-control" value="<?php echo $employee_name;?>"  name="ename" readonly >
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                          <!--Employee Email-->
                                        <div class="form-group">
                                            <label>Employee Email:</label>
                                          <input class="form-control" readonly value="<?php echo $employee_email;?>" name="eemail" >
                                       
                                        </div>                                      
                                        <!--Employee Mobile-->
                                        <div class="form-group">
                                            <label> Employee Mobile:</label>
                                         <input class="form-control"    value="<?php echo $employee_mobile;?>" name="emobile">
                                           
                                        </div>

                                        <!--Employee Street-->
                                        <div class="form-group">
                                            <label> Street:</label>
                                            <input class="form-control"    placeholder="Enter Street." name="estreet"  >
                                        </div>
                                        <!--Employee City-->
                                        <div class="form-group">
                                            <label> City:</label>
                                           <input class="form-control"      placeholder="Enter city" name="ecity" >
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                         <!--Employee State-->
                                        <div class="form-group">
                                            <label> State:</label>
                                         <input class="form-control"    placeholder="Enter State" name="estate"   >   
                                        </div> 
                                        
                                        <!--Employee Pinode-->
                                        <div class="form-group">
                                            <label> Pincode:</label>
                                          <input class="form-control" name="epincode"  maxlength="6" placeholder="Enter Pincode">
                                       
                                        </div>
                                        <div class="form-group">
                                            <label>Country:</label>
                                              <select class="form-control" id="country" name="country"  >
                                                <option value="">Select Country</option>
                                                <option value="India"> India</option>
                                              </select>
                                        </div>
                                        <!--Employee country
                                        <div class="form-group">
                                            <label> Country:</label>
                                            <input class="form-control"  name="ecountry"  >
                                           
                                        </div>       -->                               
                                                                                <div>
                                <input type="submit" class="btn btn-primary btn-lg btn btn-success fa fa-user" value="Update Profile">
                                        </div>

                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
 
</body>

</html>
                    
