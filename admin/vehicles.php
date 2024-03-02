<?php include 'header.php'; ?>







<?php
    $qry = "SELECT * FROM vehicles ORDER BY vid DESC";
    include '../includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
    $qry2 = "SELECT * FROM services";
    $result2 = mysqli_query($conn, $qry2);
    $row2 = mysqli_fetch_assoc($result2)
?>  


<h1 class="text-3xl font-bold">Vehicles</h1>
    <hr class="my-3 h-1 bg-blue-500">
        <div class="mb-4">
            <a href="addvehicle.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Vehicle</a>
        </div>
        <!-- Customer List Table -->
        <div class="">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            VID</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Owner</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Name</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Brand</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Number</th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit/Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Sample data, replace with dynamic data from backend -->
                    <?php while($row = mysqli_fetch_assoc($result)){  ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['vid'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cname'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['vname'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['vbrand'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['vnumber'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="addservices.php?vid=<?php echo $row['vid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2">Add Services</a>
                            <a href="editvehicle.php?vid=<?php echo $row['vid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                            <a href="vehicles.php?vid=<?php echo $row['vid'];?>" class="text-red-600 hover:text-red-900">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

<?php include 'footer.php'; ?>


<?php
            if (isset($_GET['vid'])) {
              $id = $_GET['vid'];
              $qry2 = "DELETE FROM vehicles WHERE vid = '$id'";
              $result = mysqli_query($conn, $qry2);
          }
            
        ?>

