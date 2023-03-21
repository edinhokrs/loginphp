<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "users";

$pdo = new PDO('mysql:host=localhost;dbname=users', $user, $pass);


$conn = new mysqli($host, $user, $pass, $dbname);
if($conn->connect_error) {
	die("Connection failed " . $conn ->connect_error);
} else {
	
}

?>