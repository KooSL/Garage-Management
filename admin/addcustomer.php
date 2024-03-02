<?php include 'header.php'; ?>







<h1 class="text-3xl font-bold">Add Customer</h1>
    <hr class="my-3 h-1 bg-blue-500">
        <div class="container mx-auto py-8">
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                    <input type="text" id="name" name="cname"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="cemail"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" id="phone" name="cphone"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300">
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea id="address" name="caddress"
                        class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300"></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit" name="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Add
                        Customer</button>
                </div>
            </form>
        </div>



<?php include 'footer.php'; ?>


<?php
if(isset($_POST['submit']))
{
    $cname = $_POST['cname'];
    $caddress = $_POST['caddress'];
    $cemail = $_POST['cemail'];
    $cphone = $_POST['cphone'];


        $qry = "INSERT INTO customers (cname, caddress, cemail, cphone) VALUES ('$cname', '$caddress', '$cemail', '$cphone')";
        include '../includes/dbconnection.php';
        if(mysqli_query($conn, $qry))
        {
            
            echo '<script type="text/javascript"> alert("Customer Added Successfully!"); window.location.assign("customers.php"); </script>';
            exit();
        }
        else
        {
            echo '<script type="text/javascript"> alert("Something Went Wrong!") </script>';
        }
}

?>


