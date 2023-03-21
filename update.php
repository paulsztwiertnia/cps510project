<?php include ('dbconnect.php'); ?>

<?php

$sql = "UPDATE Vehicles SET v_model='GTI' WHERE v_year='2019' ";
 if (mysqli_query($connect, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($connect);
}

?>
