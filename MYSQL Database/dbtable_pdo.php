<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_pdo_conn";

echo  "<h2>PDO</h2>";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
    // sql to create table
  /*  $sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
  
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "Table MyGuests created successfully";
  } catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
  }
 

  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Jitendra', 'makwana', 'jitendra@gmail.com')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


 $sql = "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Jitendra', 'makwana', 'jitendra@gmail.com')";

$conn->exec($sql);
$last_id = $conn->lastInsertId();
echo "New record created successfully. Last inserted ID is: " . $last_id;
} catch(PDOException $e) {
echo $sql . "<br>" . $e->getMessage();
}
 */


//Insert Multiple Records

  // begin the transaction
  $conn->beginTransaction();
  // our SQL statements
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Bhavin', 'Makwana', 'bhavin@gmail.com')");
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Keshav', 'Kumar', 'kk@gmail.com')");
  $conn->exec("INSERT INTO MyGuests (firstname, lastname, email)
  VALUES ('Pruthvi', 'Bhatt', 'pruthvi@gmail.com')");

  // commit the transaction
  $conn->commit();
  echo "New records created successfully";
} catch(PDOException $e) {
  // roll back the transaction if something failed
  $conn->rollback();
  echo "Error: " . $e->getMessage();
}


  $conn = null;
  ?>
  
