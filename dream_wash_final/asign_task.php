<?php
session_start();
include 'db.php';
$_SESSION['appointment_id']=$_POST['name'];
//echo "<script>alert($_SESSION[appointment_id])</script>";
if(isset($_SESSION['employee_type']))
{
    if($_SESSION['employee_type']="Admin")
    {




if (!$connection) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DW Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script  type="text/javascript">
            function add_packages(){
                $("#d").load("add_package.php"); }
             function manage_package(){
                $("#d").load("manage_package.php");}               
             function employee_registration(){
                $("#d").load("employee_registration.php");}
             function employee_manage(){
                $("#d").load("view_employee_details.php");}
                function new_appointments(){
                    $("#d").load("new_appointments.php");}
              /*  function complete_appointments(){
                    $("#d").load("#");}     */
                function customer(){
                    $("#d").load("view_customer_details.php");} 
                function view_admin_profile(){
                    $("#d").load("view_employee_profile.php");}
                /*function update_admin_profile(){
                    $("#d").load(".php");} */ 
                                                                      
</script>
</head>

<body>

<!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin_dashboard.php">DW Admin </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <!--<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                     /.dropdown-user 
                </li>-->
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

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
                                 <li>
                                    <a href="logout.php" id="admin_profile_logout"><i class="glyphicon glyphicon-off"></i> Logout</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>    


        <div id="d">
 <div id="wrapper">

 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Asign Tasks</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                          Asign Tasks 
                        </div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="update_appointment_employee_id.php">
                                         
                                        <div class="form-group">
                                        <!--Name-->
                                            <label>Select Idle Employee:</label>
            <select class="form-control" id="employee" name="employee" data-validation="required">

              <option value=""  selected>Select Employee</option>
              <?php
                        $status="idle";
                        $sql11="select * from employee_signup where employee_status='idle'";
                          $result11=mysqli_query($connection,$sql11);
                          if ($result11->num_rows > 0) {
                            while($row11 = mysqli_fetch_array($result11))
                            {
                                $employee_id=$row11['employee_id'];
                                //$_SESSION['empid']=$employee_id;
                                //echo "<script>alert($_SESSION[empid])</script>";

                              echo "<option value=".$row11['employee_id'].">".$row11['employee_name']."</option>";
                              //echo "<script>alert($_SESSION[empid]])</script>";
                            }
                        }
							
?>
             </select>
				<br>
							<div>
                                <input type="submit" class="btn btn-primary btn-lg btn btn-success fa fa-user" value="Update">
                                <!--<a href="update_appointment_employee_id.php?empid=<?php// echo $employee_id;?>" class="btn btn-primary btn-lg btn btn-success " value="Update">Update</a>-->
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
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</div>
        <div class="contentwrapper" id="disp">
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

<!DOCTYPE html>

