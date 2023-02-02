<?php
$servername = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'chamamata';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name =$_POST['name'];
$age =$_POST['age'];
$status =$_POST['status'];
$date =$_POST['date'];
$platenumber =$_POST['platenumber'];
$license =$_POST['license'];
$description =$_POST['description'];

$sql = "INSERT INTO drivers (name, age, status, date, platenumber, license, description)
VALUES ('$name', '$age', '$status', '$date', '$platenumber', '$license', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 