<?php include 'connect.php';?>
<?php

$sql = "SELECT * FROM register";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " , $row["username"], " - rating: " , $row["age"],  "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>