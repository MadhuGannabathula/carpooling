<?php 
include('connection.php') ;
$sql = "SELECT * FROM rides2 where Status = 'Available';";
$result = mysqli_query($conn, $sql);
?>

<?php include('adminheader.php'); ?>
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
        .img-thumbnail{
            height: 130px;
            border: none;
        }
    </style>
</head>
<body>
<div class="container" style = "max-width: 100%;">
<div class="row">
    <?php
    foreach($result as $r){ ?>

        <div class="col-sm-5" id="container" >
        <div class= "sub-container" style=" width:40%;">
                <div class="mini-container">
                    <h3><?php echo $r['Source']; ?></h3>
                </div>
                <div class="image-wrapper" >
                    <img src="./images/bluearrow.png" alt="To">
                </div>
                <div class="mini-container">
                    <h3><?php echo $r['Destination']; ?></h3>
                </div>
            </div>
            <div class= "sub-container"  style=" width:35%, display:flex; " >
                <p>Ride-ID : <?php echo $r['Id']; ?></p>
                <p>Fare : <?php echo $r['Fare']; ?></p>
                <p>Date : <?php echo $r['Date']; ?></p>
                <p>Time : <?php echo $r['Time']; ?></p>
            </div>
            <div class= "sub-container"  style=" width:25%,  display:flex; " >
            <img src="./images/Available.png" alt="..." class="img-thumbnail">
        </div>
        </div>
    <?php }?>
</div>
</div>
</body>
</html>
