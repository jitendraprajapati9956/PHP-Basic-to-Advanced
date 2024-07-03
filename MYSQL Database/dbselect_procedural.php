<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_procedural";

echo  "<h1>Display Data</h1>";
echo  "<h2>MySQLi Procedural</h2>";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

//Where

echo  "<br>";
echo  "<h3>Where Clause:</h3>";

$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='bhatt'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}


//ORDER BY Clause

echo  "<br>";
echo  "<h3>ORDER BY Clause:</h3>";

$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}


//Limit Data Selections

echo  "<br>";
echo  "<h3>Limit Data Selections:</h3>";

$sql = "SELECT * FROM MyGuests LIMIT 30";

echo  "<br>";

$sql = "SELECT * FROM MyGuests LIMIT 10 OFFSET 15";

echo  "<br>";

$sql = "SELECT * FROM MyGuests LIMIT 15, 10";



mysqli_close($conn);
?>