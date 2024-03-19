




<?php include 'header.php';
 

?>






<?php
    $qry = "SELECT * FROM customers ORDER BY cid ASC";
    include '../includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
?>  


<h1 class="text-3xl font-bold">Customers</h1>
    <hr class="my-3 h-1 bg-blue-500">

    <?php if($email == 'admin@gmail.com'){ ?>
        <div class="mb-4">
            <a href="addcustomer.php" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Customer</a>
        </div>
        <!-- Customer List Table -->
        <div class="">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            S.N</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Phone</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Address</th>
                        <!-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Number</th> -->
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit/Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Sample data, replace with dynamic data from backend -->
                    <?php while($row = mysqli_fetch_assoc($result)){  ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cid'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cname'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cemail'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cphone'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['caddress'];?></td>
                        <!-- <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['caddress'];?></td> -->
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="editcustomer.php?cid=<?php echo $row['cid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                            <a href="customers.php?cid=<?php echo $row['cid'];?>" class="text-red-600 hover:text-red-900">Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <?php } else { ?>
            <div class="">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            S.N</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Name</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Email</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Phone</th>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Address</th>
                        <!-- <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Vehicle Number</th> -->
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit/Delete</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Sample data, replace with dynamic data from backend -->
                    <?php while($row = mysqli_fetch_assoc($result)){  ?>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cid'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cname'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cemail'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['cphone'];?></td>
                        <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['caddress'];?></td>
                        <!-- <td class="px-6 py-4 whitespace-nowrap"><?php echo $row['caddress'];?></td> -->
                        <!-- <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="editcustomer.php?cid=<?php echo $row['cid'];?>" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                            <a href="customers.php?cid=<?php echo $row['cid'];?>" class="text-red-600 hover:text-red-900">Delete</a>
                        </td> -->
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <?php } ?>

<?php include 'footer.php'; ?>

<?php
            if (isset($_GET['cid'])) {
              $id = $_GET['cid'];
              $qry2 = "DELETE FROM customers WHERE cid = '$id'";
              $result = mysqli_query($conn, $qry2);
          }
            
        ?>


