<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com/"></script>
</head>

<body>
    <div class=" flex items-center justify-center min-h-screen bg-gray-100 ">
        <div class="w-full max-w-md p-8 space-y-6 rounded-xl bg-gray-500 bg-opacity-90 backdrop-filter backdrop-blur-lg shadow-md">
            <h1 class="text-2xl font-bold text-center"><img src=""></h1><img src="image/garage.png" alt="">
            <form class="space-y-6" action="" method="POST">
                <div>
                    <label for="email" class="text-sm font-semibold">Email</label>
                    <input type="email" id="email" placeholder="Email" name="email" required
                        class="w-full p-2 mt-1 border rounded-md focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300" />
                </div>
                <div>
                    <label for="password" class="text-sm font-semibold">Password</label>
                    <input type="password" id="password" placeholder="Password" name="password" required
                        class="w-full p-2 mt-1 border rounded-md focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300" />
                </div>
                <div class="flex items-center justify-between">
                    <!-- <div class="flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="w-4 h-4 border-gray-300 rounded focus:ring-purple-500" />
                        <label for="remember_me" class="ml-2 text-sm">Remember me</label>
                    </div> -->
                    <a href="#" class="text-sm text-blue-700 hover:underline">Forgot password?</a>
                </div>
                <input type="submit" name="submit" value="Login" class="w-full py-2 text-white bg-blue-700 rounded-md hover:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-blue-700 focus:ring-opacity-50">
                </input>
            </form>
        </div>
    </div>
</body>

</html>

<?php include 'includes/footer.php'; ?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $password = md5($password);
    $qry = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    include 'includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
    // include 'includes/closeconnection.php';
    if(mysqli_num_rows($result) == 1)
    {
        // $row = mysqli_fetch_assoc($result);
        // header('location: admin/dashboard.php');
        echo '<script type="text/javascript"> alert("Logged In Successfully!"); window.location.assign("admin/dashboard.php"); </script>';
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Email or Password!');</script>";
    }
}
?>
