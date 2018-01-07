<?php
$username ="splashto_sp1";
$password = "T?SXgG]k5V3F";
$host = "localhost";
$table = "splashto_sp1";

/*
$servername = "localhost";
$username = "splashto_sp1";
$password = "T?SXgG]k5V3F";
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $table);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

/*global $con;
$con=mysqli_connect("localhost","splashto_sp1","T?SXgG]k5V3F","splashto_sp1","upload");
?>*/