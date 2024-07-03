<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pdo_conn";

echo  "<h1>Update Data</h1>";
echo  "<h2>PDO</h2>";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    $sql = "UPDATE MyGuests SET lastname='makwana' WHERE id=2";
  
    // Prepare statement
    $stmt = $conn->prepare($sql);
  
    // execute the query
    $stmt->execute();
  
    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
  
  $conn = null;
  ?>
  
