<?php
session_start();
include 'db.php';
if (!$connection) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}
$customer_id=($_SESSION['customer_id']);

$sql="select package.package_id,package_name,No_Days, package_detail_id,package_type,no_of_services,package_price,customer_id,purchase_date from package,package_details where package.package_id=package_details.package_id AND package_details.customer_id like '$customer_id'";
$query=mysqli_query($connection,$sql);
if (!$query) {
    die ('SQL Error: ' . mysqli_error($connection));
}

?>




<br><br><br>
<br><br>
        <!-- Page Content -->
  
            <div class="row">
<legend>PACKAGE DETAILS</legend>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           <table class="table table-bordered datatable" id="table-1">
            <thead>
                <tr>
                    <th>Package Name</th>
                    <th>Package Type</th>
                    <th>Total Services</th>
                    <th>Package Price</th>
                    <th>Remaining Services</th>
                    <th>Purchase Date</th>
                    <th>Expire Date</th>
                    
                </tr>
            </thead>
                <tbody>



<?php
    $no= 1;
      while($row=mysqli_fetch_array($query))
      {
          $sql2='select appointment_id from appointment where package_detail_id='.$row['package_detail_id'].' AND appointment_status=1'; //echo $sql2; 
              $sqlrs=mysqli_query($connection,$sql2);
              $row1=mysqli_fetch_array($sqlrs);
              $count=mysqli_num_rows($sqlrs);
              //echo $count;
              
              $num_of_services=$row['no_of_services']-$count;
              if($num_of_services>0){
        echo'<tr>

              <td>'.$row['package_name'].'</td>
              <td>'.$row['package_type'].'</td>
              <td>'.$row['no_of_services'].'</td>
              <td>'.$row['package_price'].'</td>';

            
              echo'<td>'.$num_of_services.'</td>
              <td>'.$row['purchase_date'].'</td>';
              
              $timestamp = $row['purchase_date'];
              
              $start_date = date($timestamp);
           // echo $start_date;
              
              $expires = strtotime('+'.$row['No_Days'].'days', strtotime($timestamp));
              echo '<td>'.date('Y-m-d H:i:s', $expires).'</td>';
             



              echo'</tr>';
            // $no++;
            } 
      }



?>








                    </tbody>
                </table>

 


</body>
</html>
