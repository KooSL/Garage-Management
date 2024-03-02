





<?php
    include '../includes/dbconnection.php';

    $qry1= "SELECT * FROM customers";
    $qry2= "SELECT * FROM vehicles";
    $qry3= "SELECT * FROM services";
    $qry4 = "SELECT COUNT(*) AS num_completed FROM services WHERE sstatus = 'Done'";
    $qry5 = "SELECT COUNT(*) AS num_inprogress FROM services WHERE sstatus = ''";
    $qry6= "SELECT * FROM contact";
    // $qry5= "SELECT * FROM contact";
 
    $customers = mysqli_query($conn, $qry1);
    $vehicles = mysqli_query($conn, $qry2);
    $services = mysqli_query($conn, $qry3);
    $doneservices = mysqli_query($conn, $qry4);
    $inprogressservices = mysqli_query($conn, $qry5);
    $contact = mysqli_query($conn, $qry6);
    // $queries = mysqli_query($con, $qry5);

    if ($doneservices) {
        $row1 = mysqli_fetch_assoc($doneservices);
        $numCompletedServices = $row1['num_completed'];
    } else {
        $numCompletedServices = 0; // Default to 0 if there's an error
    }

    if ($inprogressservices) {
        $row2 = mysqli_fetch_assoc($inprogressservices);
        $numInprogressServices = $row2['num_inprogress'];
    } else {
        $numInprogressServices = 0; // Default to 0 if there's an error
    }
    
    $rows_count_customers = mysqli_num_rows($customers);
    $rows_count_vehicles = mysqli_num_rows($vehicles);
    $rows_count_services = mysqli_num_rows($services);
    $rows_count_doneservices = mysqli_num_rows($doneservices);
    $rows_count_inprogressservices = mysqli_num_rows($inprogressservices);
    $rows_count_contact = mysqli_num_rows($contact);
    // $rows_count_queries = mysqli_num_rows($queries);
?>



<?php include 'header.php'; ?>
            <h1 class="text-3xl font-bold"> Dashboard </h1>
            <hr class="my-3 h-1 bg-blue-500">
            <!-- <div class="grid grid-cols-3 gap-10"> -->
               
            <!-- <table class="w-full">
            <tr class="bg-gray-200">

            <div class="bg-blue-500 text-white p-5 shadow rounded">
                    <h1 class="text-2xl font-bold"> Total Jobs </h1>
                    <h1 class="text-4xl font-bold">5</h1>
                </div>
                
                <div class="bg-blue-500 text-white p-5 shadow rounded">
                    <h1 class="text-2xl font-bold">pending service Jobs  </h1>
                    <h1 class="text-4xl font-bold">5</h1>
                </div>

                <div class="bg-blue-500 text-white p-5 shadow rounded">
                    <h1 class="text-2xl font-bold">Total Work Done</h1>
                    <h1 class="text-4xl font-bold">5</h1>
                </div> 
            </div> -->

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1: Total Customers -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Total Customers</h2>
                <p class="text-3xl font-bold"><?php echo $rows_count_customers;?></p>
            </div>
            <!-- Card 2: Total Vehicles -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Total Vehicles</h2>
                <p class="text-3xl font-bold"><?php echo $rows_count_vehicles;?></p>
            </div>
            <!-- Card 3: Total Repairs -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Total Services</h2>
                <p class="text-3xl font-bold"><?php echo $rows_count_services;?></p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Done Services</h2>
                <p class="text-3xl font-bold"><?php echo $numCompletedServices; ?></p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">In Progress Services</h2>
                <p class="text-3xl font-bold"><?php echo $numInprogressServices; ?></p>
            </div>

            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Contacts</h2>
                <p class="text-3xl font-bold"><?php echo $rows_count_contact; ?></p>
            </div>

            <!-- Card 4: Revenue -->
            <!-- <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Revenue</h2>
                <p class="text-3xl font-bold">$15,000</p>
            </div> -->
            <!-- Card 5: Upcoming Appointments -->
            <!-- <div class="bg-white rounded-lg shadow-md p-6 col-span-2">
                <h2 class="text-lg font-semibold mb-4">Upcoming Appointments</h2>
                <ul>
                    <li class="mb-2">
                        <span class="font-semibold">John Doe</span> - Oil Change (Feb 15, 2024)
                    </li>
                    <li class="mb-2">
                        <span class="font-semibold">Jane Smith</span> - Brake Repair (Feb 17, 2024)
                    </li>
                </ul>
            </div> -->
        </div>

<?php include 'footer.php'; ?>


