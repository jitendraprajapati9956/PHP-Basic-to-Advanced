<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pdo_conn";



echo  "<h2>PDO</h2>";
echo  "<h2>Prepared Statements in PDO</h2>";

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