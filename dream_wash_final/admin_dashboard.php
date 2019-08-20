<?php
ob_start();
session_start();
include 'db.php';

error_reporting(0);
$employee_name=$_SESSION['employee_name'];

 
if(isset($_SESSION['employee_type']))
{
    if($_SESSION['employee_type']="Admin")
    {
?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DW Admin </title>
    <!-- Data table CSS -->
    <link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- sb-admin-2 CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">
   
    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <script  type="text/javascript">
            function add_packages(){
                $("#page-wrapper").load("add_package.php"); }
             function manage_package(){
                $("#page-wrapper").load("manage_package.php");}               
             function employee_registration(){
                $("#page-wrapper").load("employee_registration.php");}
             function employee_manage(){
                $("#page-wrapper").load("view_employee_details.php");}
                function new_appointments(){
                    $("#page-wrapper").load("new_appointments.php");}
                function complete_appointments(){
                    $("#page-wrapper").load("completed_appointments.php");}     
                function customer(){
                    $("#page-wrapper").load("view_customer_details.php");} 
                function view_admin_profile(){
                    $("#page-wrapper").load("view_employee_profile.php");}
                function update_admin_profile(){
                    $("#page-wrapper").load("edit_employee_profile.php");
                    
                    
                }
                    
                    
                    function contact_details(){
                        $("#page-wrapper").load("contact_details.php"); }


                                                                      
</script>
</head>

<body>

<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="admin_dashboard.php">DW Admin </a>
            </div>
            <!-- /.navbar-header -->
            <div class="nav navbar-top-links navbar-right">
              <a href="" class="navbar-brand" ><?php echo "Welcome  ".$employee_name;?></a>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="admin_dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-th-large"></i> Packages<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" id="add_packages" onclick="add_packages();"><i class="glyphicon glyphicon-plus"></i> Add Packages</a>
                                </li>
                                <li>
                                    <a href="#" id="manage_package" onclick="manage_package()"><i class="glyphicon glyphicon-pencil"></i> Manage Packages</a>
                                </li>
                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-users"></i> Employee<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" id="employees_registration" onclick="employee_registration()"><i class="glyphicon glyphicon-plus"></i> Add Employee</a>
                                </li>
                                <li>
                                    <a href="#" id="employee_manage" onclick="employee_manage()"><i class="glyphicon glyphicon-pencil"></i> Manage Employee</a>
                                </li>
                               

                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-edit"></i> Appointments<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" id="new_appointments" onclick="new_appointments()"><i class="fa  fa-file"></i> New Apointments</a>
                                </li>
                                <li>
                                    <a href="#" id="complete_appointments" onclick="complete_appointments()"><i class="glyphicon glyphicon-tasks"></i>  Completed Apointments</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                          <li>
                            <a href="#" id="customer" onclick="customer()"><i class="fa fa-users"></i> Customers</a>
                        </li>
                         <li>
                            <a href="#"><i class="glyphicon glyphicon-user"></i> Profile<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" id="view_admin_profile" onclick="view_admin_profile()"><i class="glyphicon glyphicon-file"></i> View</a>
                                </li>
                                <li>
                                    <a href="#" id="update_admin_profile" onclick="update_admin_profile()"><i class="glyphicon glyphicon-pencil"></i> Update</a>
                                </li>
                   
                            </ul>
                        
                            <!-- /.nav-second-level -->
                        </li>
                         <li>
                           <a href="logout.php" id="admin_profile_logout"><i class="glyphicon glyphicon-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>    


<div id="wrapper">
        <div id="page-wrapper">
            
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
                            $result = mysqli_query($connection, $query);
                            //$i      = 1;
                            if (mysqli_affected_rows($connection) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo $row['COUNT(*)'];
                                }
                            }
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

        
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
</div>

    <!-- jQuery -->
  <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
<script src="js/jquery.dataTables.min.js"></script>

    <script src="js/dataTables.bootstrap.min.js"></script>
  <!-- jQuery -->

    <script type="text/javascript">
        function ConfirmDelete() {
  return confirm("Are you sure you want to delete?");
}</script>
 
<script type="text/javascript">
    $(document).ready(function () {
  $('#table-1').DataTable();
  $('.dataTables_length').addClass('bs-select');
});  
</script>

</body>

</html>
<?php
        
    }        
    
}
else
{
   	echo'<body bgcolor="silver">';
	echo'<center>';
	echo "<center></h1>Access Denied Verify your username and password</h1></center>"."<br />";
			echo "<center></h6>Please wait </h6></center>"."<br />";
			header('Refresh: 3; url=employees_logins.php');
	echo'</center>';
	echo'</body>';
    
}
?>


