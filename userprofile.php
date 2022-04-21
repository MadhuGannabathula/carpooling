<?php
include('connection.php');
include('menuheader.php');
$id = $_SESSION['id'];
$sql = "SELECT * FROM users where Id = '$id';";
$result = mysqli_query($conn, $sql);
$user = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
<div class="card">
  <div class="card-header">
    <?php echo $user['Username']; ?>
  </div>
  <div class="card-body">
    <h5 class="card-title">Name: <?php echo $user['Username']; ?> </h5>
    <p class="card-title">User-ID: <?php echo $user['Id']; ?> </p>
    <p class="card-text">Email-ID: <?php echo $user['Emailid']; ?></p>
    <p class="card-text">Phone Number: <?php echo $user['phonenumber']; ?></p>
    <p class="card-text">Password: <?php echo $user['Password']; ?> </p>
    <a href="./editprofile.php" class="btn btn-primary">Edit Profile</a>
    <a href="./logout.php" class="btn btn-primary">Logout</a>
  </div>
</div>
</body>
</html>