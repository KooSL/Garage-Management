<?php include 'header.php'; ?>



<?php
    $sid = $_GET['sid'];
    $qry = "SELECT * FROM services WHERE sid = '$sid'";
    include '../includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
    $row = mysqli_fetch_assoc($result);
    $sdescription = $row['sdescription'];
    $vid = $row['vid'];
    $qry2 = "SELECT * FROM vehicles WHERE vid = '$vid'";
    $result2 = mysqli_query($conn, $qry2);
    $row2 = mysqli_fetch_assoc($result2);
?>



<h1 class="text-3xl font-bold">Service Details</h1>
<h1 class="text-2xl">Vehicle Name: <?php echo $row2['vname'] ?></h1>
<h1 class="text-2xl">Vehicle Number: <?php echo $row2['vnumber'] ?></h1>
    <hr class="my-3 h-1 bg-blue-500">
        <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <!-- <form action="" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="cname" value="<?php echo $row['cname'];?>"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="cemail" value="<?php echo $row['cemail'];?>"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" id="phone" name="cphone" value="<?php echo $row['cphone'];?>"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea id="address" name="caddress"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300"><?php echo $row['caddress'];?></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit" name="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Save</button>
                </div>
            </form> -->
            <textarea readonly id="vservice" name="sdescription" placeholder="Enter Services Details"
                        class="mt-1 p-2 block w-full h-80 rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300"><?php echo $sdescription; ?></textarea>
        </div>



<?php include 'footer.php'; ?>


<?php
if(isset($_POST['submit']))
{
    $cname = $_POST['cname'];
    $caddress = $_POST['caddress'];
    $cemail = $_POST['cemail'];
    $cphone = $_POST['cphone'];


        $qry = "UPDATE customers SET cname = '$cname', caddress = '$caddress', cemail = '$cemail' , cphone = '$cphone' WHERE cid = '$cid'";
        include '../includes/dbconnection.php';
        if(mysqli_query($conn, $qry))
        {
            
            echo '<script type="text/javascript"> alert("Customer Updated Successfully!"); window.location.assign("customers.php"); </script>';
            exit();
        }
        else
        {
            echo '<script type="text/javascript"> alert("Something Went Wrong!") </script>';
        }
}

?>


