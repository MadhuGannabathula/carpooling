<?php include('adminheader.php'); ?>
<?php include('connection.php') ; ?>

<?php
  $sql = "SELECT Id FROM rides2 where Status = 'Available';";
  $result = mysqli_query($conn, $sql);
  $available = $result->num_rows;
  $sql = "SELECT Id FROM rides2 where Status = 'Booked';";
  $result = mysqli_query($conn, $sql);
  $booked = $result->num_rows;
  $sql = "SELECT Id FROM rides2 where Status = 'Cancelled';";
  $result = mysqli_query($conn, $sql);
  $cancelled = $result->num_rows;
  $sql = "SELECT Id FROM users;";
  $result = mysqli_query($conn, $sql);
  $users = $result->num_rows;
  $total = $available + $booked + $cancelled;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css">
    <title>Dashboard</title>
    <style>
        .row{ margin:10px;}
        #dashboard-row{
            height:400px;
            margin:10px;
        }
        .card-img-top{
            height:300px;
        }
        #dashboard-card{
            height:500px;
            align-content: center;
        }
    </style>
</head>
<body>

<div class="row" id="dashboard-row">
  <div class="col-sm-3">
    <div class="card" id="dashboard-card">
      <img class="card-img-top" src="./images/totalrides2.png" alt="Card image cap">
      <div class="card-body" id="dashboard-card">
        <h3 class="card-title" style="text-align: center;"><?php echo $total; ?></h3>
        <p class="card-text" style="text-align: center;">Total Rides</p>
        <a href="./adminrides.php" class="btn btn-primary" style="margin : 20px 0px 0px 100px;">View Rides</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card" id="dashboard-card">
      <img class="card-img-top " src="./images/Available.png" alt="Card image cap">
      <div class="card-body">
        <h3 class="card-title" style="text-align: center;"><?php echo $available; ?></h3>
        <p class="card-text" style="text-align: center;">Available Rides</p>
        <a href="./adminavailable.php" class="btn btn-primary" style="margin : 20px 0px 0px 100px;">View Rides</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card" id="dashboard-card">
      <img class="card-img-top" src="./images/Booked.png" alt="Card image cap">
      <div class="card-body">
        <h3 class="card-title" style="text-align:center;"><?php echo $booked; ?></h3>
        <p class="card-text" style="text-align: center;">Booked Rides</p>
        <a href="./adminbook.php" class="btn btn-primary" style="margin : 20px 0px 0px 100px;">View Rides</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card" id="dashboard-card">
      <img class="card-img-top" src="./images/Cancelled.png" alt="Card image cap">
      <div class="card-body" id="dashboard-card">
      <h3 class="card-title" style="text-align:center;"><?php echo $cancelled; ?></h3>
        <p class="card-text" style="text-align: center;">Cancelled Rides</p>
        <a href="./admincancel.php" class="btn btn-primary" style="margin : 20px 0px 0px 100px;">View Rides</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3" style="margin-top : 10px ;">
    <div class="card" id="dashboard-card">
      <img class="card-img-top" src="./images/empicon1.webp" alt="Card image cap">
      <div class="card-body" id="dashboard-card">
        <h3 class="card-title" style="text-align:center;"><?php echo $users; ?></h3>
        <p class="card-text" style="text-align: center;">Total Users</p>
        <a href="./adminusers.php" class="btn btn-primary" style="margin : 20px 0px 0px 100px;">View Users</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3" style="margin-top : 10px ;">
    <div class="card" id="dashboard-card">
      <img class="card-img-top" src="./images/profile.png" alt="Card image cap">
      <div class="card-body" id="dashboard-card">
        <h3 class="card-title" style="text-align:center;">  </h3>
        <br>
        <p class="card-text" style="text-align: center;">Profile</p>
        <a href="./adminprofile.php?userid=1" class="btn btn-primary" style="margin : 30px 0px 0px 50px;">Profile</a>
        <a href="./logout.php" class="btn btn-primary" style="margin : 30px 0px 0px 50px;">Logout</a>
      </div>
    </div>
  </div>
</div>
    
</body>
</html>