<?php

include 'db.php';
if (!$connection) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$sql = 'SELECT * 
        FROM employee_signup';
        
$query = mysqli_query($connection, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($connection));
}

?>



            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Employee Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <table id="table-1" class="display table table-striped table-bordered table-hover" >
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Employee Type</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    
                    <!--<th>Street</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Pincode</th>
                    <th>Country </th>-->
                    <th>Action</th>
                    
                </tr>
            </thead>
                <tbody>
                            
                            <?php
        $no     = 1;
        while ($row = mysqli_fetch_array($query))
        {
         $msgid=$row['employee_id'] ;  
            echo "<tr>";
                  echo  "<td>".$row['employee_id']."</td>";
                  echo  "<td>".$row['employee_type']."</td>";
                    echo "<td>".$row['employee_mobile']."</td>";
                   echo "<td>".$row['employee_email'] ."</td>";
                   echo "<td>" 
                   . $row['employee_street'] . " , " . $row['employee_city'] ." , ".$row['employee_state']. " , ". $row['employee_pincode'] ." , ". $row['employee_country'] .
                   "</td>";
               
      
              $no++;

            echo "<td><form action='delete_employee.php' method='post' onSubmit='return ConfirmDelete();'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Delete ' class='btn btn-danger'/></form></td></tr>";

         
         
           
    }?>
                    </tbody>
                </table>




 <!-- /.row -->
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
