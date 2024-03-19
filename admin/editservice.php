<?php include 'header.php'; ?>





<?php
    $sid = $_GET['sid'];
    $qry = "SELECT * FROM services WHERE sid = '$sid'";
    include '../includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
    $row = mysqli_fetch_assoc($result);
    $sdescription = $row['sdescription'];
?>


<h1 class="text-3xl font-bold">Edit Services</h1>
    <hr class="my-3 h-1 bg-blue-500">
        <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="service" class="block text-sm font-medium text-gray-700">Services</label>
                    <textarea id="service" name="sdescription" placeholder="Enter Services Details"
                        class="mt-1 p-2 block w-full h-80 rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300"><?php echo $sdescription; ?></textarea>
                </div>
<!-- 
                <div class="mb-4">
                    <label for="service" class="block text-sm font-medium text-gray-700">Services</label>
                    <div class="mt-1 p-2 block w-full h-80 rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                        <?php
                            $result_services = mysqli_query($conn, $qry);
                            while ($row_services = mysqli_fetch_assoc($result_services)) {
                                $checked = ($row_services['sdescription'] == $sdescription) ? "checked" : "";
                                echo '<input type="checkbox" name="service[]" value="' . $row_services['sid'] . '" ' . $checked . '>' . $row_services['sdescription'] . '<br>';
                            }
                        ?>
                    </div>
                </div> -->

                <div class="flex justify-end">
                    <button type="submit" name="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Save</button>
                </div>
            </form>
        </div>

<?php include 'footer.php'; ?>


<?php
if(isset($_POST['submit']))
{
    $sdescription = $_POST['sdescription'];
    $sdate = date('Y-m-d H:i:s');


        $qry3 = "UPDATE services SET sdescription = '$sdescription', sstatus = null,  supdate = '$sdate' WHERE sid = '$sid'";
        include '../includes/dbconnection.php';
        if(mysqli_query($conn, $qry3))
        {
            
            echo '<script type="text/javascript"> alert("Service Updated Successfully!"); window.location.assign("services.php"); </script>';
            exit();
        }
        else
        {
            echo '<script type="text/javascript"> alert("Something Went Wrong!") </script>';
        }
}

?>


