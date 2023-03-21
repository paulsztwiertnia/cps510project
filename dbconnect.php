<?php
$host = "localhost";
$database = "my_database";
$user = "my_account";
$password = "my_password";

$connect = mysqli_connect($host, $user, $password, $database) 
or die(mysqli_error());
echo "<div>Connected to MySQL Database <b>$database</b></div>";
?>
