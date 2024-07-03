<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_procedural";


echo  "<h2>MySQLi Procedural</h2>";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// sql to create table

/*
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

// Insert Data in Table

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Jitendra', 'makwana', 'jitendra@gmail.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


// Insert Data in last id Table

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Jitendra', 'makwana', 'jitendra@gmail.com')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
*/

//Insert Multiple Records
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Bhavin', 'Makwana', 'bhavin@gmail.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Keshav', 'Kumar', 'kk@gmail.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Pruthvi', 'Bhatt', 'pruthvi@gmail.com')";

if (mysqli_multi_query($conn, $sql)) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



mysqli_close($conn);
?>