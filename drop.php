<?php include ('dbconnect.php'); ?>

<?php

$sql = "DROP TABLE Vehicles";

if (mysqli_query($connect, $sql)) {
    echo "Table Vehicles Dropped.<br>";
} else {
    echo "Error: " . $sql . "=>" . mysqli_error($connect);
}

$sql = "DROP TABLE Employee";

if (mysqli_query($connect, $sql)) {
    echo "Table Employee Dropped.<br>";
} else {
    echo "Error: " . $sql . "=>" . mysqli_error($connect);
}

$sql = "DROP TABLE Customer";

if (mysqli_query($connect, $sql)) {
    echo "Table Customer Dropped.<br>";
} else {
    echo "Error: " . $sql . "=>" . mysqli_error($connect);
}

$sql = "DROP TABLE Reservation";

if (mysqli_query($connect, $sql)) {
    echo "Table Reservation Dropped.<br>";
} else {
    echo "Error: " . $sql . "=>" . mysqli_error($connect);
}



mysqli_close($connect);
