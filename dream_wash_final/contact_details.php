<?php
//session_start();
//$customer_id=$_SESSION['customer_id'];
include 'db.php';
if (!$connection) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}

$sql = 'select contact_id,contact_name,contact_email,customer_id,contact_message from contact';
//'SELECT customer_name, package_name,package_detail_id,No_Days, package_type, no_of_services,purchase_date FROM customer_signup,package,package_details where customer_signup.customer_id=package_details.customer_id AND package.package_id=package_details.package_id';
        
$query = mysqli_query($connection, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($connection));
}

?>

            <div class="row"  >
                <div class="col-lg-12">
                    <h1 class="page-header">Cutomer Details</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <table id="table-1" class="display table table-striped table-bordered table-hover" >
            <thead>
                <tr>
                   <!-- <th>Contact Id</th>-->
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>

                                        
                </tr>
            </thead>
                <tbody>
                            
                            <?php
        $no     = 1;
        while ($row = mysqli_fetch_array($query))
        {
            //$muq=$row['customer_id'];
            echo '<tr>
                    
                    
                    <td>'.$row['contact_name'].'</td>
                    <td>'.$row['contact_email'] . '</td>
                    <td>'.$row['contact_message'] . '</td></tr>';
          }
          //<td>'.$row['contact_id'].'</td>
          ?>
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
