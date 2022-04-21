<?php 
include('connection.php') ;
include('menuheader.php');
$id = $_SESSION['id'];
$sql = "SELECT * FROM rides2 where Bookerid = '$id';";
$result = mysqli_query($conn, $sql);

if(isset($_POST['submit'])){
    $rideid = $_POST['id'];
    $id = $_SESSION['id'];
    $sql = "UPDATE rides2 SET Status = 'Available', Bookerid = '' WHERE id = $rideid;";
    if($conn->query($sql) === TRUE){
        echo  $rideid;
        header("Location: userbookrides.php");
    }
}
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
        .bookbtn{
            background-color:rgb(1,175,245);
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
                <p>Creater-Id : <?php echo $r['Createrid']; ?></p>
                <p>Ride-ID : <?php echo $r['Id']; ?></p>
                <p>Date : <?php echo $r['Date']; ?></p>
                <p>Time : <?php echo $r['Time']; ?></p>
            </div>
            <div class= "sub-container"  style=" width:25%, display:flex; " >
                <h2>Rs. <?php echo $r['Fare']; ?></h2>
                <form action="" method="post">
                    <input type="text" style="display:none;"  name = "id"value= <?php echo $r['Id']; ?>>
                    <button type="submit" class="bookbtn" name ="submit">Cancel</button>
                </form>
            </div>
        </div>
    <?php }?>
</div>
</div>
</body>
</html>
