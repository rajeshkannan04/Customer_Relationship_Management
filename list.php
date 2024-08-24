<?php
$servername = "localhost";
$username = "root";
$password = "admin123";
$dbname = "CRM";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM customers";
$result = $conn->query($sql);
// print_r($result);           

// $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
// print_r($data=$result->fetch_assoc());

// $conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Info</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container{
            font-weight:600;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2 class="text-center">Customer Info</h2>
    <input type="text" id="search"><input type="submit" name="submit" id="submit">
    <p class="text-center"><a href="/customer" class="btn btn-success">Add Customer</a></p>
    
    <table class="table table-striped table-hover mt-3 fw-bold">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="text-center">Name</th>
                <th scope="col" class="text-center">Email</th>
                <th scope="col" class="text-center">Phone</th>
            </tr>
        </thead>    
        <tbody id="taskTable">

          
            <?php while($row = $result->fetch_assoc()) { ?>
            
                <tr>
                    <td class="text-center"><?php echo $row['name'] ?></td>
                    <td class="text-center"><?php echo $row['email'] ?></td>
                    <td class="text-center"><?php echo $row['phone'] ?></td>
                    <td class="text-center btn btn">
                        <a href="profile?id=<?php echo $row['id'] ?>">more-></a>
                    </td>
                </tr>
               
            <?php } ?>
            
            <!-- <tr>
                <td><?php echo $row['List'] ?></td>
                <td class="text-center">completed</td>
            </tr> -->
        </tbody>
    </table>

   
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
