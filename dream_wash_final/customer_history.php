<?php
session_start();
include 'db.php';
if (!$connection) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}
$customer_id=($_SESSION['customer_id']);

//$sql = 'SELECT * FROM appointment';
//$sql1="SELECT package_name from appointment,package_details,package WHERE appointment.package_detail_id=package_details.package_detail_id AND package.package_id=package_details.package_id AND package_details.customer_id like '$customer_id'";

$sql="select appointment_date,car_no,appointment_status,completion_date,appointment.package_detail_id,package.package_id,package_name,package_details.customer_id from appointment,package_details,package where appointment.package_detail_id=package_details.package_detail_id AND package.package_id=package_details.package_id AND appointment_status=1 AND package_details.customer_id='$customer_id'";

$query = mysqli_query($connection, $sql);
//$result=mysqli_query($conn,$sql1);
if (!$query) {
    die ('SQL Error: ' . mysqli_error($connection));
}

?>



<br><br><br>
<br><br>
        <!-- Page Content -->
   
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">History</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <table class="table table-bordered datatable" id="table-1">
            <thead>
                <tr>
                    <th>Appointment Date</th>
                    <th>Car Number</th>
                    <th>Package Name</th>
                    <th>Appointment status</th>
                    <th>Completion Date</th>
                    
                </tr>
            </thead>
                <tbody>
                            
                            <?php
        $no = 1;
        while ($row = mysqli_fetch_array($query))
        {
           // while($row1=mysqli_fetch_array($result))
           // {
                 echo '<tr>
                        <td>'.$row['appointment_date'].'</td>
                        <td>'.$row['car_no'] . '</td>
                            <td>'.$row['package_name'] . '</td>';
                            if(($row['appointment_status'])==0){
                           echo '<td><span class="badge badge-info">in progress</span></td>';}
                            else{
                            echo'<td><span class="badge badge-success">completed</span></td>';}
                            


                           echo '<td>'.$row['completion_date'] . '</td>
                      </tr>';
            
            $no++;
          //}
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
