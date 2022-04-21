<?php 
include('connection.php') ;
include('adminheader.php');
$sql = "SELECT * FROM users ;";
$result = mysqli_query($conn, $sql);
$num = 1;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./adminrides.css">
    <link rel="stylesheet" href="./bootstrap.css">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
<div class="container" style = "max-width: 100%;">
<div class="row">
    <?php
    foreach($result as $r){ ?>

<div class="col-sm-6">
  <div class="card">
  <h5 class="card-header">User #<?php echo $num; ?></h5>
  <div class="card-body">
    <h5 class="card-title"><?php echo $r['Username']; ?> </h5>
    <p class="card-text">User-ID: <?php echo $r['Id']; ?></p>
    <p class="card-text">Phone Number: <?php echo $r['phonenumber']; ?></p>
    <p class="card-text">Email-ID: <?php echo $r['Emailid']; ?></p>
    <a href="./adminprofile.php?userid=<?php echo $r['Id']; ?>" class="btn btn-primary">View Details</a>
  </div>
  </div>
  </div>
    <?php $num = $num +1;
     }?>
   
</div>
</div>
</body>
</html>
