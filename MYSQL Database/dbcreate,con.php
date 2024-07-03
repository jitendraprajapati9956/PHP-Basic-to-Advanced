<?php
$servername = "localhost";
$username = "root";
$password = "";

echo  "<h2>MySQLi Object-Oriented</h2>";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo  "<br>";

echo  "<h2>MySQLi Procedural</h2>";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo  "<br>";

echo  "<h2>PDO</h2>";

try {
    $conn = new PDO("mysql:host=$servername;dbname=db_pdo_con", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }



echo  "<br>";
echo  "<h1>Close the Connection</h1>";

echo  "<h2>MySQLi Object-Oriented</h2>";
//$conn->close();

echo  "<h2>MySQLi Procedural</h2>";
//mysqli_close($conn);

echo  "<h2>PDO</h2>";
//$conn = null;

echo  "<br>";
echo  "<h1>Create a MySQL Database Using MySQLi and PDO</h1>";

echo  "<h2>MySQLi Object-Oriented</h2>";

$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE db_mysqli";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();

echo  "<h2>MySQLi Procedural</h2>";
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE db_procedural";
if (mysqli_query($conn, $sql)) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);

echo  "<h2>PDO</h2>";
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE db_pdo_conn";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Database created successfully<br>";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
?>

