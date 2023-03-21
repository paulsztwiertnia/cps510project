<?php include ('dbconnect.php'); ?>

<?php

$sql = "SELECT * FROM Vehicles";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "v_id: " . $row["v_id"] . " v_make: " . $row["v_make"] . " v_model: " . $row["v_model"] . " v_year: " . $row["v_year"] . "<br>";
  }
} else {
  echo "No results.";
}
echo "<br>";

$sql = "SELECT * FROM Employee";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "e_id: " . $row["e_id"] . " salary: " . $row["salary"] . " contact_info: " . $row["contact_info"] . " e_flname: " . $row["e_flname"] . "<br>";
  }
} else {
  echo "No results.";
}
echo "<br>";

$sql = "SELECT * FROM Customer";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "c_id: " . $row["c_id"] . " payment details: " . $row["paymentdetails"] . " c_flname: " . $row["c_flname"] . " c_drivinglicense: " . $row["c_drivinglicense"] . " c_info: " . $row["c_info"] . "<br>";
  }
} else {
  echo "No results.";
}

echo "<br>";
$sql = "SELECT * FROM Reservation";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) {

  while($row = mysqli_fetch_assoc($result)) {
    echo "r_id: " . $row["r_id"] . " cancellation_id: " . $row["cancellation_id"] . " pickup detail: " . $row["pickup_detail"] . " return detail: " . $row["return_detail"] . "<br>";
  }
} else {
  echo "No results.";
}  

  
mysqli_close($connect);
?>
