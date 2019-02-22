<?php
$servername="localhost";
$username="learner";
$password="Pass_1234";
$dbname="myDB";
//create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//check if connection is created
if($conn->connect_error){
    die("connection failed " . $conn->connect_error);
}


/*creating name for database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE){
    echo "DATABASE CREATED SUCCESSFULLY";
}
//error message
else {
    echo "error creating database" . $conn->error;
}
*/


//creating tables
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
    
if ($conn->query($sql) == TRUE) {
    echo "Table my guests created successfully";
}
else{
    echo "error creationg table:" . $conn->error;
}
$conn->close();
?>



