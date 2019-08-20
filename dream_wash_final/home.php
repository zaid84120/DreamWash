<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Admin Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <!--customer-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php
                           
                            $query = "SELECT COUNT(*) FROM customer_signup;";

                            //echo $query;
                            $result = mysqli_query($connection, $query);
                            $i      = 1;
                            if (mysqli_affected_rows($connection) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo $row['COUNT(*)'];
                                }
                            }
                            $i = 1;
                            ?>
                                       
                                   </div>
                                    <div> Customers!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" id="customer" onclick="customer()">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--New Task-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        
                            <?php
                           
                            $query = "SELECT COUNT(*) FROM appointment WHERE appointment_status<>1;";

                            //echo $query;
                            $result = mysqli_query($connection, $query);
                            $i      = 1;
                            if (mysqli_affected_rows($connection) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo $row['COUNT(*)'];
                                }
                            }
                            $i = 1;
                            ?>

                                    </div>
                                    <div>New Appointments!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" id="new_appointments" onclick="new_appointments()">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--Complete Task-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        
                                         <?php
                           
                            $query = "SELECT COUNT(*) FROM appointment WHERE appointment_status=1;";

                            //echo $query;
                            $result = mysqli_query($connection, $query);
                            $i      = 1;
                            if (mysqli_affected_rows($connection) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo $row['COUNT(*)'];
                                }
                            }
                            $i = 1;
                            ?>
                                    </div>
                                    <div> Completed </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" id="complete_appointments" onclick="complete_appointments()">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <!--complient-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                          <?php  $query = "SELECT COUNT(*) FROM contact where customer_id >0";

                            //echo $query;
                            $result = mysqli_query($connection, $query);
                            //$i      = 1;
                            if (mysqli_affected_rows($connection) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo $row['COUNT(*)'];
                                }
                            }
                           //    $i = 1;
                            ?>



                                    </div>
                                    <div>Support Tickets!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#" id="contact_details" onclick="contact_details()">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
