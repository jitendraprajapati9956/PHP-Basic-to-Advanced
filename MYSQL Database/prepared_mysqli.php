<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_mysqli";



echo  "<h2>MySQLi Object-Oriented</h2>";
echo  "<h2>Prepared Statements in MySQLi</h2>";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "Vishal";
$lastname = "patel";
$email = "vishal@gmail.com";
$stmt->execute();

$firstname = "Aman";
$lastname = "khatri";
$email = "aman@gmail.com";
$stmt->execute();

$firstname = "Jinal";
$lastname = "makwana";
$email = "jinal@gmail.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();

?>