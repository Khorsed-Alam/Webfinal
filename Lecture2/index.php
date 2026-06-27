<?php

use Pdo\Sqlite;

// connection build php & DB

$servername="localhost";
$username="root";
$password= "";
$dbname= "php_lecture2";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn-> connect_error){
    die("Connection failed: ".$conn->connect_error);
}

echo "Connecter Successfully";

// Create Table 
// $sql ="
// Create TABLE Student(
//     id int PRIMARY key,
//     name varchar(20),
//     cgpa float(3,2)
//     );

// ";
// $conn-> query($sql);// query execution



// //  Data  Insertion

// $sql="INSERT INTO student(id,name,cgpa)
// values(1,'a', 3.2),
// (2,'b', 3.4),
// (3,'c',2.2);";

// $conn-> query($sql);// query execution


// Data Read From html form

$name = $_POST['name'];
$id = (int) $_POST['id'];
$cgpa = (float) $_POST['cgpa'];


// data insert in db
$sql = "INSERT INTO student (id, name, cgpa) VALUES ('$id', '$name', '$cgpa')";// if doesnt work put variable in single quote ('$name' )

if ($conn->query($sql)) {
    echo "Data inserted successfully.";
} else {
    echo "Error: " . $conn->error;
}


?>