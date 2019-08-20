<?php

include 'db.php';
if (!$connection) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}
$sql = 'select * from package';
$query = mysqli_query($connection, $sql);
if (!$query) {
    die ('SQL Error: ' . mysqli_error($connection));
}
?>



            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Manage Packages</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <table class="table table-bordered datatable" id="table-1">
            <thead>
                <tr>
                    <th>Package Id</th>
                    <th>Package Name</th>
                    <th>Package Type</th>
                    <th>No. of Services</th>
                    <th>Price</th>
                    <th>Action</th>
                    <th>Delete</th>

                                        
                </tr>
            </thead>
                <tbody>
                            
                            <?php
       
        while ($row = mysqli_fetch_array($query))
        {
        	         $msgid=$row['package_id'] ;
				  echo '<tr>
                    
                    <td>'.$row['package_id'].'</td>
                    <td>'.$row['package_name'].'</td>
                    <td>'.$row['package_type'] . '</td>
                    <td>'.$row['no_of_services'] . '</td>
                    <td>'.$row['package_price'] . '</td>';   
					echo "<td><form action='edit_packages.php' method='post''><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Edit ' class='btn btn-warning'/></form></td>";

            echo "<td><form action='delete_packages.php' method='post' onSubmit='return ConfirmDelete();'><input type='hidden' name='name' value='" . $msgid . "'/><input type='submit' value='Delete ' class='btn btn-danger'/></form></td></tr>";
        }
        ?>
                    </tbody>
                </table>



    <!-- jQuery -->

    <script type="text/javascript">
        function ConfirmDelete() {
  return confirm("Are you sure you want to delete?");
}</script>

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
