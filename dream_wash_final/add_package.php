
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Packages</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Add Package Details 
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="add_package_db.php">
                                         
                                        <div class="form-group">
                                        <!--Name-->
                                            <label>Package Name:</label>
                                            <input class="form-control" placeholder="Enter Package Name"  name="pname" required="">
                                           <!-- <p class="help-block">Example block-level help text here.</p>-->
                                        </div>
                                        <!--Package Type-->
                                        <div class="form-group">
                                            <label>Package Type:</label>
                                          <input class="form-control"  name="ptype" placeholder="Enter Package Type" required="">
                                           
                                        </div>
                                        <!--Package Duration-->
                                        <div class="form-group">
                                            <label>Package Quantity:</label>
                                            <input class="form-control"   name="pquantity" placeholder="Enter Package Quantity" required="">
                                       
                                        </div>

                                        <!--Package Price-->
                                        <div class="form-group">
                                            <label>Package Price:</label>
                                            <input class="form-control"   name="price" placeholder="Enter Package Price" >
                                           
                                        </div>
                                       <!--No. Days-->
                                        <div class="form-group">
                                            <label>No. Days:</label>
                                            <input class="form-control"   name="days" placeholder="Enter Days" >
                                           
                                        </div><br>


 						<div>

                                <input type="submit" class="btn btn-primary btn-lg btn btn-success fa fa-user" value="Add">
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
        
                    
