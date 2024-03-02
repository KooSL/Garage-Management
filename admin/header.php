<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=3.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex">
        <nav class="h-screen bg-gray-200 shadow w-60">
        <a href="../index.php"><img class="bg-gray-200 p-2" src= "../image/garage.png" alt=""></a>
        <div class="mt-4 pl-6 text-lg font-bold">
            <a href="dashboard.php" class="block p-4 hover:bg-gray-300 my-2">Dashboard</a>
            <a href="customers.php" class="block p-4 hover:bg-gray-300 my-2">Customers</a>
            <a href="vehicles.php" class="block p-4 hover:bg-gray-300 my-2">Vehicles</a>
            <a href="services.php" class="block p-4 hover:bg-gray-300 my-2">Services</a>
            <a href="tracking.php" class="block p-4 hover:bg-gray-300 my-2">Service Status</a>
            <a href="contact.php" class="block p-4 hover:bg-gray-300 my-2">Contacts</a>
            <a href="../login.php" class="block p-4 hover:bg-gray-300 my-2" onclick="return confirm('Are you sure to log out?')">logout</a>
        </div>
        </nav>
        <!-- For Content Part  -->
        <div class="p-4 flex-1">
            
        