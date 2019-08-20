<?php
session_start();
include 'db.php';
$customer_id=$_SESSION['customer_id'];

//echo "<script> alert ($customer_id) </script>";
$status="0";
$sql = "SELECT appointment_id,appointment_date,appointment_status,package_name FROM appointment,package_details,package WHERE appointment.package_detail_id=package_details.package_detail_id AND package_details.package_id=package.package_id AND appointment_status=0 AND  customer_id='$customer_id'";
        //appointment_status='$status' AND
$query = mysqli_query($connection, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($connection));
}

?>


            <div class="row">
                <div class="col-lg-12"><br><br><br><br><br>
                    <h3 >Cancel Appointment</h3><br>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <table class="table table-bordered datatable" id="table-1">
            <thead>
                <tr>
                    
                    <th>Appointment Date</th>
                    <th>Appointment Status</th>
                    <th>Package Name</th>
                    <th>Action</th>
                    
                    
                </tr>
            </thead>
                <tbody>
                            
                            <?php
        $no     = 1;
        while ($row = mysqli_fetch_array($query))
        {
             $msgid=$row['appointment_id'] ; 
            echo "<tr>";
                    
                    
                    echo "<td>".$row['appointment_date']."</td>";
                    if(($row['appointment_status'])==0){
                    
                           echo '<td><span class="badge badge-info">in progress</span></td>';}
                            else{
                            echo'<td><span class="badge badge-success">completed</span></td>';}
  
                    echo "<td>".$row['package_name']."</td>";

                   $no++;

            echo "<td><form action='delete_appointment.php' method='post' onSubmit='return ConfirmDelete();'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Cancel ' class='btn btn-danger'/></form></td>";

              echo  "</tr>";
            
          
         ?>
           

    <?php    }?>
                    </tbody>
                </table>




 <!-- /.row -->

        <script type="text/javascript">
        function ConfirmDelete() {
  return confirm("Are you sure you want to cancel?");
}</script>


</body>
</html>