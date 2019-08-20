
<?php
session_start();
include 'db.php';
$employee_id=$_SESSION['employee_id'];
$employee_type=$_SESSION['employee_type'];

//echo "<script>alert($employee_id)</script>";

?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Reset Password</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Reset Password
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="change_employee_password.php">
                                         
                                        <div class="form-group">
                                        
                                        <!--Employee Street-->
                                        <div class="form-group">
                                            <label> Current Password:</label>
                                            <input type="password" class="form-control"  name="curentpassword" required=""  placeholder="Enter Current Password." name="estreet"  >
                                        </div>
                                        <!--Employee City-->
                                        <div class="form-group">
                                            <label> Enter New Password:</label>
                                           <input  type="password" class="form-control"  id="password" name="password"  required="" placeholder="Enter  New Password" name="ecity" >
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                         <!--Employee State-->
                                        <div class="form-group">
                                            <label> Re-enter New Password:</label>
                                         <input  type="password" class="form-control" id="cpassword"  name="cpassword" required=""  placeholder="Re-enter New Password" name="estate"   >   
                                        </div> 
                                        
                              
                                                                                <div>
                                <input type="submit"   class="btn btn-primary btn-lg btn btn-success fa fa-user" value="Reset Password">
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
            </div>

</body>

</html>
                    
