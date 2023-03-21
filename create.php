<?php include ('dbconnect.php'); ?>

<?php
// creating a table with 5 fields
$sql = "CREATE TABLE Vehicles (
   v_id    INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
   v_make   VARCHAR(20) NOT NULL, 
   v_model  VARCHAR(20) NOT NULL, 
   v_year   VARCHAR(4)
   ); ";
   
if (mysqli_query($connect, $sql)) {
    echo "New table Vehicle created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "CREATE TABLE Employee (
    e_id    INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    salary   INT(6) NOT NULL, 
    contact_info  VARCHAR(20) NOT NULL, 
    e_flname   VARCHAR(20) NOT NULL
    ); ";
    
 if (mysqli_query($connect, $sql)) {
     echo "New table Employee created successfully.<br>";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($connect);
 }


$sql = "CREATE TABLE Customer (
    c_id    INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    paymentdetails   VARCHAR(20) NOT NULL, 
    c_flname  VARCHAR(20) NOT NULL, 
    c_drivinglicense   VARCHAR(20) NOT NULL,
    c_info VARCHAR(20) NOT NULL
    ); ";
    
 if (mysqli_query($connect, $sql)) {
     echo "New table Customer created successfully.<br>";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($connect);
 }
 

 $sql = "CREATE TABLE Reservation (
    r_id    INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    cancellation_id   INT(6) NOT NULL, 
    pickup_detail  VARCHAR(20) NOT NULL, 
    return_detail   VARCHAR(20) NOT NULL
    ); ";
    
 if (mysqli_query($connect, $sql)) {
     echo "New table Reservation created successfully.<br>";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($connect);
 }
 

 

?>
