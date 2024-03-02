<?php include 'header.php'; ?>





<?php
    // $sid = $_GET['sid'];
    $vid = $_GET['vid'];
    $qry = "SELECT * FROM services WHERE vid = '$vid'";
    include '../includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
    $row = mysqli_fetch_assoc($result);
    $sdescription = $row['sdescription'];
    // $qry = "SELECT * FROM vehicles WHERE vid = '$vid'";
    // $qry2 = "SELECT * FROM customers";
    // include '../includes/dbconnection.php';
    // $result = mysqli_query($conn, $qry);
    // $row = mysqli_fetch_assoc($result);
?>



<h1 class="text-3xl font-bold">Add Services</h1>
    <hr class="my-3 h-1 bg-blue-500">
        <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="" method="POST">
                <div class="mb-4">
                    <!-- <label for="cid" class="block text-sm font-medium text-gray-700">Customer ID</label>
                    <input type="number" id="cid" name="cid"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300" required>
                    <label for="cname" class="block text-sm font-medium text-gray-700">Owner Name</label>
                    <select name="cname" id="cname" class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300" required>
                        <option value="">Select</option>
                        <?php while($row = mysqli_fetch_assoc($result)){  ?>
                            <option><?php echo $row['cname'];?> - <?php echo $row['cemail'];?></option>
                        <?php } ?>
                        </select>
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
                </div> -->
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
                <div class="mb-4">
                    <label for="vservice" class="block text-sm font-medium text-gray-700">Services</label>
                    <textarea id="vservice" name="sdescription" placeholder="Enter Services Details"
                        class="mt-1 p-2 block w-full h-80 rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300"><?php echo $sdescription; ?></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit" name="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Add
                        Services</button>
                </div>
            </form>
        </div>

<?php include 'footer.php'; ?>


<?php
if(isset($_POST['submit']))
{
    $sdescription = $_POST['sdescription'];


        // $qry3 = "INSERT INTO services WHERE (vid, sdescription) VALUES ('$vid', '$sdescription')";
        $qry3 = "INSERT INTO services (vid, sdescription) VALUES ('$vid', '$sdescription')";

        include '../includes/dbconnection.php';
        if(mysqli_query($conn, $qry3))
        {
            
            echo '<script type="text/javascript"> alert("Service Added Successfully!"); window.location.assign("services.php"); </script>';
            exit();
        }
        else
        {
            echo '<script type="text/javascript"> alert("Something Went Wrong!") </script>';
        }
}

?>
