<?php include ('dbconnect.php'); ?>

<?php

$sql = "INSERT INTO Vehicles (v_id, v_make, v_model, v_year) VALUES ('90002','Volkswagen', 'Beetle', '2009');";
$sql .= "INSERT INTO Vehicles (v_id, v_make, v_model, v_year) VALUES('90003','BMW', 'Z3', '2001');";
$sql .= "INSERT INTO Vehicles (v_id, v_make, v_model, v_year) VALUES ('90004','Ford', 'Mustang', '2019');";
$sql .= "INSERT INTO Vehicles (v_id, v_make, v_model, v_year) VALUES ('90005','Audi', 'A3', '2015');";

if (mysqli_multi_query($connect, $sql)) {
    echo "Multiple automobiles added successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connect);
}

?>
