<?php include 'header.php'; ?>







<?php
    
    $qry3 = "SELECT * FROM services ORDER BY sid DESC";
    include '../includes/dbconnection.php';
    
    $result3 = mysqli_query($conn, $qry3);
    

?>  


<h1 class="text-3xl font-bold">Services</h1>
    <hr class="my-3 h-1 bg-blue-500">
        <!-- <div class="mb-4">
            <a href="addvehicle.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Vehicle</a>
        </div> -->
        <!-- Customer List Table -->
        <div class="">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            SID</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            VID</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Owner</th>
                        <!-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Name</th> -->
                        <!-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Brand</th> -->
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Number</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Services</th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit/Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Sample data, replace with dynamic data from backend -->
                    <?php while($row3 = mysqli_fetch_assoc($result3)){  ?>
                        <?php
                        $vid = $row3['vid'];
                        $qry = "SELECT * FROM vehicles WHERE vid = '$vid'";
                        $result = mysqli_query($conn, $qry);
                        $row = mysqli_fetch_assoc($result)
                        ?>



                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['sid'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['vid'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cname'];?></td>
                        <!-- <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['vname'];?></td> -->
                        <!-- <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['vbrand'];?></td> -->
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['vnumber'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['sdescription'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            
                            <?php if ($row3['sstatus'] != 'Done') { ?>
                                <a href="services.php?confirm_id=<?php echo $row3['sid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2" onclick="return confirm('Are you sure to mark this service as done?')">Done</a>
                            <?php } ?>
                                <a href="editservice.php?sid=<?php echo $row3['sid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                                <a href="vehicles.php?vid=<?php echo $row['vid'];?>" class="text-red-600 hover:text-red-900">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

<?php include 'footer.php'; ?>


    <?php
          if (isset($_GET['delete_id'])) {
            $del_id = $_GET['delete_id'];
            $qry2 = "DELETE FROM bookings WHERE b_id = '$del_id'";
            $result = mysqli_query($con, $qry2);
          }
          elseif (isset($_GET['confirm_id'])) {
            $confrim_id = $_GET['confirm_id'];
            $sstatus = "Done";
            $qry4 = "UPDATE services SET sstatus = '$sstatus' WHERE sid = '$confrim_id'";
            $result2 = mysqli_query($conn, $qry4);
          }
          elseif (isset($_GET['cancel_id'])) {
            $cancel_id = $_GET['cancel_id'];
            $b_status = "Canceled";
            $qry5 = "UPDATE bookings SET b_status = '$b_status' WHERE b_id = '$cancel_id'";
            $result3 = mysqli_query($con, $qry5);
          }
      ?>         

