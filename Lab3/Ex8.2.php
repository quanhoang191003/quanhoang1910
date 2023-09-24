<?php
// Create connection
$servername = "127.0.0.1";
$username = "root";
$password = "C01nC4rd@@";
$dbname = "myDB";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
// Create table
$sql = "CREATE TABLE STUDENTS (
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
NAME VARCHAR(30) NOT NULL,
CLASS VARCHAR(30) NOT NULL,
MARK INT(6) NOT NULL,
SEX VARCHAR(30) NOT NULL

)";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>