<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_mysqli";



echo  "<h2>MySQLi Object-Oriented</h2>";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//Create Table

/*
  $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
    if ($conn->query($sql) === TRUE) {
      echo "Table MyGuests created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
 

  //Insert Data In table
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Jitendra', 'makwana', 'jitendra@gmail.com')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
 

     //Insert Data In last id table

     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
     VALUES ('Jitendra', 'makwana', 'jitendra@gmail.com')";
   
   if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
   } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
   }
     */ 

//Insert Multiple Records
     $sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Bhavin', 'Makwana', 'bhavin@gmail.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Keshav', 'Kumar', 'kk@gmail.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Pruthvi', 'Bhatt', 'pruthvi@gmail.com')";

if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



    $conn->close();

?>