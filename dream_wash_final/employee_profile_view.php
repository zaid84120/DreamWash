
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

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">



</head>

<body>

    <div id="wrapper">

       
       <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="employee_dashboard.html">DW Employee </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                

                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
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
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="employee_dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa    fa-th"></i> Tasks<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#"><i class="glyphicon glyphicon-option-horizontal"></i> Pending</a>
                                </li>
                                <li>
                                    <a href="#"><i class="glyphicon glyphicon-ok"></i> Complete</a>
                                </li>
                               
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                       
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-user"></i> Profile<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href=""><i class="glyphicon glyphicon-file"></i> View</a>
                                </li>
                                <li>
                                    <a href="#"><i class="glyphicon glyphicon-edit"></i> Update</a>
                                </li>
                                 <li>
                                    <a href="#"><i class="fa  fa-sign-out"></i> Logout	</a>
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





        <div id="page-wrapper">
             <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <form class="form-horizontal" id="fillform" role="form">
        <fieldset>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Employee ID</label>
            <div class="col-sm-5">
             <input  id="employee_id" name="employee_id"  type="text" >
    
            </div>
             </div>

        
          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Employee Type</label>
            <div class="col-sm-5">
              <input id="mytype" type="text" name="employee_type" >
              </div> 
             </div>

            <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Employee Mobile Number</label>
            <div class="col-sm-5">
            <input id="employee_no" type="text" name="employee_no" >
            </div> 
             </div>
                

            <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Employee Email</label>
            <div class="col-sm-5">
            <input id="employee_email" type="text" name="employee_email" >
            </div> 
             </div>

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput">Address</label>
            <div class="col-sm-10">
              <input type="text" id="address1" name="address1"  class="form-control" >
              
            </div>
          </div>
          

          <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput"></label>
            <div class="col-sm-5">
              <input type="text" id="city" name="city"  class="form-control">
              
            </div>

            
            <div class="col-sm-5">
              <input type="text" name="state" class="form-control" id="state" >
              
            </div>
          </div>

             <!-- Text input-->
          <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput"></label>
            <div class="col-sm-5">
              <input type="text"  name="pincode" class="form-control" id="pincode" >
              
            </div>
            

              <div class="form-group">
            <label class="col-sm-2 control-label" for="textinput"></label>
            <div class="col-sm-5">
              <input type="text"  name="country" class="form-control" id="country" >
              
            </div>
            
           
          <!-- Text input-->

   
         </fieldset>
      </form>
</div>
</div>
 </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/raphael.min.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
