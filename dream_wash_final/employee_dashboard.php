
<?php
session_start();
$employee_name=$_SESSION['employee_name'];
include 'db.php';   
$employee_id=$_SESSION['employee_id'];
if(isset($_SESSION['employee_type']))
{
    if($_SESSION['employee_type']="Employee")
    {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DW Employee</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script  type="text/javascript">
            function new_tasks(){
                $("#page-wrapper").load("asign_new_task_employee.php"); }
             function complete_tasks(){
                $("#page-wrapper").load("completed_task_by_employee.php");}                
             function view_employee_profile(){
                $("#page-wrapper").load("view_employee_profile.php");}
            function update_employee_profile(){
                $("#page-wrapper").load("edit_employee_profile.php");}
             function Change_password(){
                $("#page-wrapper").load("change_password.php");}

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
                <a class="navbar-brand" href="employee_dashboard.php">DW Employee </a>
            </div>
            <!-- /.navbar-header -->
            <div class="nav navbar-top-links navbar-right">
              <a href="" class="navbar-brand" ><?php echo "Welcome  ".$employee_name;?></a>
            </div>
            
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                        <li>
                            <a href="employee_dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-th-large"></i> Tasks<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" id="new_tasks" onclick="new_tasks()"><i class="glyphicon glyphicon-plus"></i> New Tasks</a>
                                </li>
                                <li>
                                    <a href="#" id="complete_tasks" onclick="complete_tasks()"><i class="glyphicon glyphicon-tasks"></i> Completed Tasks</a>
                                </li>
                                                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                         <li>
                            <a href="#"><i class="glyphicon glyphicon-user"></i> Profile<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#" id="view_employee_profile" onclick="view_employee_profile()"><i class="glyphicon glyphicon-file"></i> View</a>
                                </li>
                                <li>
                                    <a href="#" id="update_employee_profile" onclick="update_employee_profile()"><i class="glyphicon glyphicon-edit"></i> Update</a>
                                </li>
                                 <li>
                                    <a href="#" id="Change_password" onclick="Change_password()"><i class="glyphicon glyphicon-lock"></i> Change_password</a>
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
                <h1 class="page-header">Employee Dashboard</h1>
                      <!--New Task-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php
                           
                            $query = "SELECT COUNT(*) FROM appointment WHERE appointment_status<>1 AND employee_id= $employee_id;";

                            //echo $query;
                            $result = mysqli_query($connection, $query);
                            $i      = 1;
                            if (mysqli_affected_rows($connection) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo $row['COUNT(*)'];
                                }
                            }
                            $i = 1;
                            ?></div>
                                    <div>New Tasks!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#"  id="new_tasks" onclick="new_tasks()">
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
                                    <div class="huge"><?php
                           
                            $query = "SELECT COUNT(*) FROM appointment WHERE appointment_status=1 AND employee_id=$employee_id";
                                            

                            //echo $query;
                            $result = mysqli_query($connection, $query);
                            $i      = 1;
                            if (mysqli_affected_rows($connection) != 0) {
                                while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                    echo $row['COUNT(*)'];
                                }
                            }
                            $i = 1;
                            ?></div>
                                    <div>Complete Task!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#"  id="complete_tasks" onclick="complete_tasks()">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            
                </div>
                <!-- /.col-lg-12 -->
            </div>

        </div>
    <!-- /#wrapper -->
   </div> 
 
    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
    <script src="js/metisMenu.min.js"></script>

<script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
  $('#table-1').DataTable();
  $('.dataTables_length').addClass('bs-select');
});  
</script>

<?php
        
    }        
    
}
else
{
       	echo'<body bgcolor="silver">';
	echo'<center>';
	echo "<center></h1>Access Denied Verify your username and password</h1></center>"."<br />";
			echo "<center></h6>Please wait </h6></center>"."<br />";
			header('Refresh:3 ; url=employees_logins.php');
	echo'</center>';
	echo'</body>';
    
}
?>
</body>
</html>