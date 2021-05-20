<?php
$servername = "servername";
$username = "username";
$password = "Password";
$database = "database Name";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    // echo "Connection was successful<br>"; // Enable this to show your connection was establsih or not
}


?>
