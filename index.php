<?php
$servername = "172.18.0.3";
$username = "root";
$password = "abcde";
$dbname = "Trucorpdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, office FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Office: " . $row["office"]. "<br><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
