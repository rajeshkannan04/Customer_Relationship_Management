<?php
$servername = "localhost";
$username = "root";
$password = "admin123";
$dbname = "CRM";

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO customers (name, email, phone)
VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
header('location:dashboard');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>