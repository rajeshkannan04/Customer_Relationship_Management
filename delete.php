<?php
$servername = "localhost";
$username = "root";
$password = "admin123";
$dbname = "crm";

$id = $_GET['id'];


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM customers WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  header('location:dashboard');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>