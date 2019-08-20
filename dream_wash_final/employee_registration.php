<!DOCTYPE html>

    
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Employee Registration</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Employee  Basic Information 
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="employee_signup.php">
                                         <div class="form-group">
                                        <!--employee type-->
                                            <label>Employee Type:</label>&nbsp;&nbsp;&nbsp;
                                           Admin <input type="radio" name="r" value="Admin" required="">&nbsp;&nbsp;&nbsp;
                                           Employee <input type="radio" name="r" value="Employee" required="">
                                           
                                        </div>
                                        <div class="form-group">
                                        <!--Name-->
                                            <label>Employee Name:</label>
                                            <input class="form-control" placeholder="Enter Employee Name"  name="ename" required="">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <!--Mobile-->
                                        <div class="form-group">
                                            <label>Mobile Number:</label>
                                          <input class="form-control" type="tel" maxlength="10" name="emobile" placeholder="Enter Mobile Number" required="">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <!--Email-->
                                        <div class="form-group">
                                            <label>Email Address:</label>
                                            <input class="form-control" type="email"  name="eemail" placeholder="Enter Email Address" required="">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div><br>

                                        <!--Password-->
                                        <div class="form-group">
                                            <label>Password:</label>
                                            <input class="form-control" type="password" required="" name="password" placeholder="Enter Your Password" >
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div><br>


                    

                               
                                        <!--street-->
                                       <div class="form-group">
                                            <label>Street Address:</label>
                                            <input class="form-control" type="text" name="estreet" placeholder="Enter Street Name" required="">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <!--City-->
                                        <div class="form-group">
                                            <label>City:</label>
                                            <input class="form-control" type="text" name="city" placeholder="Enter Your City" required="">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <!--State-->
                                         <div class="form-group">
                                            <label>State:</label>
                                            <input class="form-control" type="text" name="state" placeholder="Enter Your State" required="">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <!--pincode-->
                                       <div class="form-group">
                                            <label>Pincode:</label>
                                            <input class="form-control" type="text" name="pincode" maxlength="6" placeholder="Enter Pin Code" required="">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>


                                        <div class="form-group">
                                            <label>Country:</label>
                                              <select class="form-control" id="country" name="country" required="" >
                                                <option value="">Select Country</option>
                                                <option value="India"> India</option>
                                              </select>
                                        </div>

                                       <div class="form-group">
                                            <label>Status:</label>
                                              <select class="form-control" id="status" name="status" required="" >
                                                <option value="">Select Status</option>
                                                <option value="idle"> Idle</option>
                                                <option value="working"> Working</option>
                                              </select>
                                        </div>




                                        <div>
                                <input type="submit" class="btn btn-primary btn-lg btn btn-success fa fa-user" value="+Add">
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
