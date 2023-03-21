<?php include ('dbconnect.php'); ?>

<?php
$car = $_GET['v_model'];

$sql = "DELETE FROM Vehicles WHERE v_model";
 
if (mysqli_query($connect, $sql)) {
    echo "$car removed.";
} else {
    echo "Error deleting record: " . mysqli_error($connect);
}
?>
