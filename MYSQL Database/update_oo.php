<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_mysqli";


echo  "<h1>Update Data</h1>";

echo  "<h2>MySQLi Object-Oriented</h2>";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE MyGuests SET lastname='makwana' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
