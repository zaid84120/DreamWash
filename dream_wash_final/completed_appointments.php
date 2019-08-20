<?php
session_start();
include 'db.php';
if (!$connection) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

  $sql='select appointment_id,appointment_date, car_no,streetaddress,streetaddress1,zipcode,completion_date,appointment.customer_address_id,appointment.package_detail_id,package.package_id,package_name,customer_signup.customer_id,appointment.employee_id,employee_name,customer_name from customer_address,appointment,package,package_details,customer_signup,employee_signup where appointment.customer_address_id=customer_address.customer_address_id AND appointment.package_detail_id=package_details.package_detail_id AND package.package_id=package_details.package_id AND package_details.customer_id=customer_signup.customer_id AND appointment.employee_id=employee_signup.employee_id AND appointment_status=1';      

$query = mysqli_query($connection, $sql);


if (!$query) {
    //die ('SQL Error: ' . mysqli_error($conn));
    echo mysqli_error($connection);
}

?>



            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Completed Appointments</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <table class="table table-bordered datatable" id="table-1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Customer Name</th>
                    <th>Package Name</th>
                    <th>Appt Date</th>
                    <th>Car No.</th>
                    <th>Address</th>
                    <th>Comp Date</th>
                    <th>Emp Id</th>
                    <th>Emp Name</th>
                                        
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
                    
                    <td>'.$appointment_id.'</td>
                    <td>'.$row['customer_name'].'</td>
                    <td>'.$row['package_name'].'</td>
                    <td>'.$row['appointment_date'] . '</td>
                    <td>'.$row['car_no'] . '</td>
                    <td>'.$row['streetaddress'] . ','.$row['streetaddress1'] . ',' .$row['zipcode'] . '</td>
                    <td>'.$row['completion_date'].'</td>
                    <td>'.$row['employee_id'].'</td>
                    <td>'.$row['employee_name'].'</td>';   
                            
					//echo "<td><form action='asign_task.php' method='post'><input type='hidden' name='name' value='".$appointment_id."' /><input type='submit'  value='Asign ' class='btn btn-success'/></form></td></tr>";

        }?>
                    </tbody>
                </table>



 
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
