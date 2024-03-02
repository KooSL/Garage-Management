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
                            Service Number</th>
                        <!-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            VID</th> -->
                        <!-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Owner</th> -->
                        <!-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Name</th> -->
                        <!-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Brand</th> -->
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Status</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Last Update</th>
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
                        <td class="px-6 py-4 whitespace-nowrap">
                            <?php
                            $sstatus = $row3['sstatus'];
                             
                                if($sstatus == "Done"){
                                    echo '<p class="bg-green-500 pr-10 text-white" name="status" id="status">Done</p>';
                                }
                                elseif($sstatus == ""){
                                    echo '<p class="bg-yellow-500 text-white" name="status" id="status">In Progress</p>';
                                }
                            ?>
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['supdate'];?></td>
                        <!-- <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['vname'];?></td> -->
                        <!-- <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['vbrand'];?></td> -->
                        <!-- <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['vnumber'];?></td> -->
                        <!-- <td class="px-6 py-4 whitespace-nowrap"><?php echo $row3['sdescription'];?></td> -->
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="serviceview.php?sid=<?php echo $row3['sid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2">View</a>
                            <!-- <a href="editservice.php?sid=<?php echo $row3['sid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                            <a href="vehicles.php?vid=<?php echo $row['vid'];?>" class="text-red-600 hover:text-red-900">Delete</a> -->
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

<?php include 'footer.php'; ?>


