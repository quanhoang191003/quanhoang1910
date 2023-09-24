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
// Insert datas
$sql = "INSERT INTO STUDENTS(ID, NAME, CLASS, MARK, SEX)
VALUES (1,'John Deo','Four',75,'female');";
$sql .= "INSERT INTO STUDENTS(ID, NAME, CLASS, MARK, SEX)
VALUES (2,'Max Ruin','Three',85,'male');";
$sql .= "INSERT INTO STUDENTS(ID, NAME, CLASS, MARK, SEX)
VALUES (3,'Arnold','Three',55,'male');";
$sql .= "INSERT INTO STUDENTS(ID, NAME, CLASS, MARK, SEX)
VALUES (4,'Krish Star','Four',60,'female');";
$sql .= "INSERT INTO STUDENTS(ID, NAME, CLASS, MARK, SEX)
VALUES (5,'John Mike','Four',60,'female');";
$sql .= "INSERT INTO STUDENTS(ID, NAME, CLASS, MARK, SEX)
VALUES (6,'Alex John','Four',55,'male');";
$sql .= "INSERT INTO STUDENTS(ID, NAME, CLASS, MARK, SEX)
VALUES (7,'My John Rob','Fifth',78,'male');";
$sql .= "INSERT INTO STUDENTS(ID, NAME, CLASS, MARK, SEX)
VALUES (8,'Asruid','Five',85,'male');";
$sql .= "INSERT INTO STUDENTS(ID, NAME, CLASS, MARK, SEX)
VALUES (9,'Tes Qry','Six',78,'male');";
$sql .= "INSERT INTO STUDENTS(ID, NAME, CLASS, MARK, SEX)
VALUES (10,'Big John','Four',55,'female')";

if ($conn->multi_query($sql) === TRUE) {
    echo "Data is inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// $sql = "UPDATE STUDENTS SET CLASS = 'Two' WHERE MARK < 60";

// if ($conn->multi_query($sql) === TRUE) {
//     echo "New records created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// // SQL query to select best students (marks > 75)
// $best_students_sql = "SELECT * FROM STUDENTS WHERE MARK > 75";
// $best_students_result = $conn->query($best_students_sql);

// // SQL query to select good students (marks >= 60 and <= 75)
// $good_students_sql = "SELECT * FROM STUDENTS WHERE MARK >= 60 AND MARK <= 75";
// $good_students_result = $conn->query($good_students_sql);

// // SQL query to select average students (marks < 60)
// $average_students_sql = "SELECT * FROM STUDENTS WHERE MARK < 60";
// $average_students_result = $conn->query($average_students_sql);

// // Function to display a table for a result set
// function displayTable($result, $title) {
//     echo "<h2>$title</h2>";
//     echo "<table border='1'>";
//     echo "<tr><th>ID</th><th>Name</th><th>Mark</th><th>Class</th></tr>";
    
//     while ($row = $result->fetch_assoc()) {
//         echo "<tr><td>".$row["ID"]."</td><td>".$row["NAME"]."</td><td>".$row["MARK"]."</td><td>".$row["CLASS"]."</td></tr>";
//     }
    
//     echo "</table>";
// }

// // Display tables for best, good, and average students
// displayTable($best_students_result, "Best Students (Marks > 75)");
// displayTable($good_students_result, "Good Students (Marks > 60 and <= 75)");
// displayTable($average_students_result, "Average Students (Marks < 60)");

$conn->close();
?>