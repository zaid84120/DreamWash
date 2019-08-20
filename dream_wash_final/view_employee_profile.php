
<?php
session_start();
$employee_id=$_SESSION['employee_id'];
$employee_type=$_SESSION['employee_type'];
include 'db.php';
//echo "<script>alert($employee_id)</script>";

?>








       



 <?php

        $query="select * from employee_signup where employee_id='$employee_id'"AND"employee_type='$employee_type' ";
    
          $result = mysqli_query($connection, $query);
        
        while ($row = mysqli_fetch_array($result))
        {
            $employee_id    = $_SESSION['employee_id'];
            $employee_name = $row['employee_name'];
            $employee_email= $row['employee_email'];
            $employee_mobile=$row['employee_mobile'];
            $employee_street=$row['employee_street'];
            $country=$row['employee_country'];
            $city=$row['employee_city'];
            $state=$row['employee_state'];
            $zipcode=$row['employee_pincode'];
        
        }
    
?>




            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View Profile</h1>
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
                                    <form role="form" method="POST" action="add_package_db.php">
                                         
                                        <div class="form-group">
                                        <!--Employee Name-->
                                            <label>Employee Name:</label>
                                           <input class="form-control" value="<?php echo $employee_name;?>"  name="ename" readonly >
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <!--Employee Mobile-->
                                        <div class="form-group">
                                            <label> Employee Mobile:</label>
                                         <input class="form-control" value="<?php echo $employee_mobile;?>" name="emobile"  readonly >
                                           
                                        </div>
                                        <!--Employee Email-->
                                        <div class="form-group">
                                            <label>Employee Email:</label>
                                          <input class="form-control" readonly value="<?php echo $employee_email;?>" name="eemail" >
                                       
                                        </div>
                                        <!--Employee Street-->
                                        <div class="form-group">
                                            <label> Street:</label>
                                            <input class="form-control" readonly value="<?php echo $employee_street;?>" name="estreet"  >
                                        </div>
                                        <!--Employee City-->
                                        <div class="form-group">
                                            <label> City:</label>
                                           <input class="form-control"  value="<?php echo $city;?>" name="ecity" readonly >
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                         <!--Employee State-->
                                        <div class="form-group">
                                            <label> State:</label>
                                         <input class="form-control" value="<?php echo $state;?>" name="estate"  readonly >   
                                        </div> 
                                        
                                        <!--Employee Pinode-->
                                        <div class="form-group">
                                            <label> Pincode:</label>
                                          <input class="form-control" readonly value="<?php echo $zipcode;?>" name="epincode" required="">
                                       
                                        </div>

                                        <!--Employee country-->
                                        <div class="form-group">
                                            <label> Country:</label>
                                            <input class="form-control" readonly value="<?php echo $country;?>"  name="ecountry"  >
                                           
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
 <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
  $('#table-1').DataTable();
  $('.dataTables_length').addClass('bs-select');
});  
</script>
</body>

</html>
                    
