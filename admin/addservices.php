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



<h1 class="text-3xl font-bold">Add Services <span class="text-2xl font-normal">(*Write each service in different lines)</span></h1>
    <hr class="my-3 h-1 bg-blue-500">
        <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="" method="POST">    
                <div class="mb-4">
                    <label for="vservice" class="block text-sm font-medium text-gray-700">Services</label>
                    <textarea id="vservice" name="sdescription" placeholder="Enter Service Details"
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
