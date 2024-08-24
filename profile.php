<?php
$servername = "localhost";
$username = "root";
$password = "admin123";
$dbname = "crm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM customers where id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
  }

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
      .info{
        font-weight: bold;
        font-size: 100%;
        margin: 20px;
      }
      .btn{
        color: blue;
        font-weight: bold;
      }
    </style>
</head>
<body>

<div class="info">
  <h3><u>Customer Details</u></h3>
    <p class="name info  text-uppercase"><?php  echo $row['name'] ?></p>
    <p class="email info "><?php  echo $row['email']?></p>
    <p class="phone info "><?php  echo $row['phone']?></p>
    <a href="delete?id=<?php echo $row['id'] ?>" class="btn">DELETE</a>
    <a href="update?id=<?php echo $row['id'] ?>" class="btn">UPDATE</a>
</div>
   


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>