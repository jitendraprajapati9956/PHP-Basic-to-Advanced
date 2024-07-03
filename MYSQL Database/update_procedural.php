<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_procedural";

echo  "<h1>Update Data</h1>";
echo  "<h2>MySQLi Procedural</h2>";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE MyGuests SET lastname='makwana' WHERE id=2";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
