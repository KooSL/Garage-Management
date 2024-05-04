<?php include 'header.php'; ?>



<?php
    $qry = "SELECT * FROM customers";
    include '../includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
?>



<h1 class="text-3xl font-bold">Add Vehicle</h1>
    <hr class="my-3 h-1 bg-blue-500">
        <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="cid" class="block text-sm font-medium text-gray-700">Customer ID</label>
                    <input type="number" id="cid" name="cid"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300" required>
                    <label for="cname" class="block text-sm font-medium text-gray-700">Owner Name</label>
                    <select name="cname" id="cname" class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300" required>
                        <option value="">Select</option>
                        <?php while($row = mysqli_fetch_assoc($result)){  ?>
                            <option><?php echo $row['cname'];?> - <?php echo $row['cemail'];?></option>
                        <?php } ?>
                        </select><br>
                    <label for="name" class="block text-sm font-medium text-gray-700">Vehicle Name</label>
                    <input type="text" id="name" name="vname"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                </div>
                <div class="mb-4">
                    <label for="brand" class="block text-sm font-medium text-gray-700">Vehicle Brand</label>
                    <input type="text" id="brand" name="vbrand"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Vehicle Number</label>
                    <input type="text" id="phone" name="vnumber"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                </div>
                <!-- <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Vehicle Number</label>
                    <input type="text" id="phone" name="phone"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Vehicle Number</label>
                    <input type="text" id="phone" name="phone"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Vehicle Number</label>
                    <input type="text" id="phone" name="phone"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                </div> -->
                <!-- <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea id="address" name="address"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300"></textarea>
                </div> -->
                <div class="flex justify-end">
                    <button type="submit" name="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Add
                        Vehicle</button>
                </div>
            </form>
        </div>

<?php include 'footer.php'; ?>


<?php
if(isset($_POST['submit']))
{
    $cid = $_POST['cid'];
    $cname = $_POST['cname'];
    $vname = $_POST['vname'];
    $vbrand = $_POST['vbrand'];
    $vnumber = $_POST['vnumber'];

    $qry2 = "SELECT * FROM customers WHERE cid = $cid";
    $result2 = mysqli_query($conn, $qry2);

    if($result2 = TRUE){
        $qry = "INSERT INTO vehicles (cid, cname, vname, vbrand, vnumber) VALUES ('$cid', '$cname', '$vname', '$vbrand', '$vnumber')";
        include '../includes/dbconnection.php';
        if(mysqli_query($conn, $qry))
        {
            
            echo '<script type="text/javascript"> alert("Vehicle Added Successfully!"); window.location.assign("vehicles.php"); </script>';
            exit();
        }
        else
        {
            echo '<script type="text/javascript"> alert("Something Went Wrong!") </script>';
        }
    } else {
        echo '<script type="text/javascript"> alert("Customer ID not found!") </script>';
    }
}

?>
