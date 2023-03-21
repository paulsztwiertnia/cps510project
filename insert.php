<?php include ('dbconnect.php'); ?>


<?php
$sql = "INSERT INTO Vehicles (v_id, v_make, v_model, v_year) VALUES ('10021', 'Volkswagen', 'GTI', '2021')";
 
if (mysqli_query($connect, $sql)) {
    echo "New vehicle record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO Vehicles (v_id, v_make, v_model, v_year) VALUES ('20020', 'BMW', 'M5', '2020')";
 
if (mysqli_query($connect, $sql)) {
    echo "New vehicle record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO Employee (e_id, salary, contact_info, e_flname) VALUES ('100', '45000', '6479201100', 'John Doe')";
 
if (mysqli_query($connect, $sql)) {
    echo "New employee record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO Employee (e_id, salary, contact_info, e_flname) VALUES ('101', '60000', '6474448090', 'Joseph Hynek')";
 
if (mysqli_query($connect, $sql)) {
    echo "New employee record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO Customer (c_id, paymentdetails, c_flname, c_drivinglicense, c_info ) VALUES ('901', 'VISA', 'Kevin Oleary', 'ON drivers license','4167540104')";
 
if (mysqli_query($connect, $sql)) {
    echo "New customer record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO Customer (c_id, paymentdetails, c_flname, c_drivinglicense, c_info ) VALUES ('902', 'MASTERCARD', 'Mark Cuban', 'US drivers license','4169024509')";
 
if (mysqli_query($connect, $sql)) {
    echo "New customer record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}


$sql = "INSERT INTO Reservation (r_id, cancellation_id, pickup_detail, return_detail ) VALUES ('1000', '901', 'Yorkville', 'Etobicoke' )";
 
if (mysqli_query($connect, $sql)) {
    echo "New reservation record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

$sql = "INSERT INTO Reservation (r_id, cancellation_id, pickup_detail, return_detail ) VALUES ('1001', '902', 'Pearson airport', 'Oakville' )";
 
if (mysqli_query($connect, $sql)) {
    echo "New reservation record created successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}








?>
