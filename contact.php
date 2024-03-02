<?php include 'includes/header.php'; ?>

<body class="bg-[url('image/background.png')] bg-cover bg-no-repeat">
    


<div class="">
    <form action="" method="POST">
        <p>Contact Us</p>
        <input type="text" class="w-full p-2 my-5 border-2 border-gray-300" name="cntname" placeholder="Full Name">
        <input type="email" class="w-full p-2 my-5 border-2 border-gray-300" name="cntemail" placeholder="Email">
        <input type="text" class="w-full p-2 my-5 border-2 border-gray-300" name="cntphone" placeholder="Phone Number">
        <textarea type="text" class="w-full p-2 my-5 border-2 border-gray-300" name="cntmessage" placeholder="Message"></textarea>
        <input type="submit" name="submit" class="w-full p-2 my-5 bg-blue-700 text-white font-bold"></input>
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

    $qry = "INSERT INTO contact (cntname, cntemail, cntphone, cntmessage) VALUES ('$cntname', '$cntemail', '$cntphone', '$cntmessage')";
    include 'includes/dbconnection.php';
    $result = mysqli_query($conn, $qry);
    include 'includes/closeconnection.php';
    if($result){
        echo "<script>alert('Submited Successfully');
            window.location.href = 'contact.php';
            </script>";
    }else{
        echo "<script>alert('Submission Failed')</script>";
    }
}
?>

