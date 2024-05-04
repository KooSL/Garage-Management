<?php include 'includes/header.php'; ?>

<body class="bg-[url('image/background.png')] bg-cover bg-no-repeat">
    
<div class="w-80 mx-auto my-20">
    <form action="" method="POST">
        <p class="text-white text-2xl font-bold mb-5">Customer Feedback</p>
        <input type="text" class="w-full p-2 my-2 border-2 border-gray-300 border rounded-md focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300" name="cntname" placeholder="Full Name" required>
        <input type="email" class="w-full p-2 my-2 border-2 border-gray-300 border rounded-md focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300" name="cntemail" placeholder="Email" required>
        <input type="text" class="w-full p-2 my-2 border-2 border-gray-300 border rounded-md focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300" name="cntphone" placeholder="Phone Number">
        <textarea type="text" class="w-full p-2 my-2 border-2 border-gray-300 border rounded-md focus:border-purple-400 focus:outline-none focus:ring focus:ring-purple-300" name="cntmessage" placeholder="Message" required></textarea>
        <input type="submit" name="submit" class="w-full p-2 my-2 bg-blue-700 text-white font-bold cursor-pointer hover:bg-gray-600" value="Submit">
    </form>
</div>

</body>

        
<?php include 'includes/footer.php'; ?> 

<?php
if(isset($_POST['submit'])){
    $cntname = $_POST['cntname'];
    $cntemail = $_POST['cntemail'];
    $cntphone = $_POST['cntphone'];
    $cntmessage = $_POST['cntmessage'];

    $qry = "INSERT INTO feedback (cntname, cntemail, cntphone, cntmessage) VALUES ('$cntname', '$cntemail', '$cntphone', '$cntmessage')";
    include 'includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include 'includes/closeconnection.php';
    if($result){
        echo "<script>alert('Submitted Successfully');
            window.location.href = 'feedback.php';
            </script>";
    }else{
        echo "<script>alert('Submission Failed')</script>";
    }
}
?>
