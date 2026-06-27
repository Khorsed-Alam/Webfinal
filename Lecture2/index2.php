<?php

/// Database connection===========================
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_lecture2";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



// A student is already in the DB. now, we want to update the CGPA
// take input:
// id, previously completed credits, new course credit, new course grade 
// new CGPA = (previously completed credits * previous CGPA + new course credit * new course grade) / (previously completed credits + new course credit)
// then update the CGPA in the database




// take input from html==================================

$id = (int)$_POST['id'];
$prev_credit = (int)$_POST['prev_credit'];
$new_credit = (int)$_POST['new_credit'];
$new_grade = (float)$_POST['new_grade'];


// data fetching========================================

$sql = "SELECT cgpa FROM student WHERE id = $id";

$result = $conn->query($sql);
/// inside result
// num_rows: how many rows are there in the result
// fetch_assoc(): fetch the data as an associative array/list
// if there is a row, then we can fetch the data using $row['column_name']

$old_cgpa = 0.0;
if ($result ->num_rows > 0) {
    while($row = $result->fetch_assoc()){
        $old_cgpa = (float)$row['cgpa'];
    }
    
} else {
    echo "0 results";
}


// backend calculation====================================

$new_cgpa = ($prev_credit * $old_cgpa + $new_credit * $new_grade) / ($prev_credit + $new_credit);

// update the database====================================

$sql = "UPDATE student SET cgpa = $new_cgpa WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}




$conn->close();









?>