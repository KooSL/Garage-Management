<?php
//create connection
$server = "localhost";
$username = "root";
$password = "";
$db = "garagemanagement";

$conn = mysqli_connect($server, $username, $password, $db);

//check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
?>
