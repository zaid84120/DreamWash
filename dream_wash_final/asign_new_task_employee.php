<?php
session_start();
include 'db.php';
if (!$connection) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}
$employee_id=$_SESSION['employee_id'];
$r1="0";
  $sql='select DISTINCT customer_signup.customer_id,appointment_id,appointment_date,appointment_status, car_no,streetaddress,streetaddress1,zipcode,appointment.customer_address_id,appointment.package_detail_id,package.package_id,package_name,customer_signup.customer_id,customer_name,appointment.employee_id from customer_address,appointment,package,package_details,customer_signup,employee_signup where appointment.customer_address_id=customer_address.customer_address_id AND appointment.package_detail_id=package_details.package_detail_id AND package.package_id=package_details.package_id AND package_details.customer_id=customer_signup.customer_id AND appointment_status=0 AND appointment.employee_id='.$employee_id;      

  //$sql='select appointment_id,appointment_date,car_no,employee_id,appointment.customer_address_id from appointment,customer_address where employee_id='.$employee_id;

$query = mysqli_query($connection, $sql);


if (!$query) {
    die ('SQL Error: ' . mysqli_error($connection));
}

?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">New Tasks</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <table class="table table-bordered datatable" id="table-1">
            <thead>
                <tr>
                    <th>Appointment Id</th>
                    <th>Customer Name</th>
                    <th>Package Name</th>
                    <th>Appointment Date</th>
                    <th>Car Number</th>
                    <th>Street</th>
                    <th>Landmark</th>
                    <th>PinCode</th>
                    <th>Action</th>
                                        
                </tr>
            </thead>
                <tbody>
                            
                            <?php
        $no     = 1;
        while ($row = mysqli_fetch_array($query))
        {
            $appointment_id=$row['appointment_id'];
            //$_SESSION['appointment_id']=$appointment_id;
            //echo "<script>alert($_SESSION[appt_id])</script>";
           ?> 
           <!--<input type="hidden" name="appointment_id" value="<?php //echo $appointment_id;?>">-->
           <?php echo '<tr>
                    
                    <td>'.$row['appointment_id'].'</td>
                    <td>'.$row['customer_name'] . '</td>
                    <td>'.$row['package_name'].'</td>
                    <td>'.$row['appointment_date'] . '</td>
                    <td>'.$row['car_no'].'</td>
                    <td>'.$row['streetaddress'] . '</td>
                    <td>'.$row['streetaddress1'] . '</td>
                    <td>'.$row['zipcode'] . '</td>';   
                            
					echo "<td><form action='complete_task_employee.php' method='post'><input type='hidden' name='name' value='".$row['appointment_id']."' /><input type='submit'  value='Complete	 ' class='btn btn-success'/></form></td></tr>";

        }?>
                    </tbody>
                </table>



 <!-- /.row -->

    <!-- jQuery -->
  
    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

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
