<?php include('menuheader.php'); ?>
<?php include('connection.php') ; ?>
<?php include('ridesfunction.php') ; ?>
<?php
   if(isset($_POST['submit'])){
    $rideid = $_POST['id'];
    $id = $_SESSION['id'];
    $sql = "UPDATE rides2 SET Status = 'Booked', Bookerid = '$id' WHERE id = $rideid;";
    if($conn->query($sql) === TRUE){
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
    <link rel="stylesheet" href="./bootstrap.css">
    <title>Document</title>
    <style>
        #container{
            position: static;
            width: 100%;
            height:170px;
            border: radius 10px;
            margin: 20px 30px 10px 30px;
            border: 2px solid black;
            padding:0px;
            background-position: center;
        }
        .sub-container{
            float:left;
            width:30%;
            margin:10px auto;
            height:150px;
            text-align:centre;

        }
        .mini-container{
            text-align:center;
            width:100%;
            height:50px;
        }
        h3{
            text-align:centre;
        }
        .bookbtn{
            background-color:rgb(1,175,245);
        }
        .p{
            text-align: centre;
            margin:auto;
        }
        .image-wrapper {
            display: table-cell;
            position: relative;
            left: 100px;
            width: 100%;
            height:60px;
            vertical-align: middle;
        }

        .image-wrapper img{
            max-width: 100%;
            max-height: 100%;
            display: block;
            margin: 0 auto;
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
                <p>Creater-ID : <?php echo $r['Createrid']; ?></p>
                <p>Date : <?php echo $r['Date']; ?></p>
                <p>Time : <?php echo $r['Time']; ?></p>
            </div>
            <div class= "sub-container"  style=" width:25%, display:flex; " >
                <h2>Rs. <?php echo $r['Fare']; ?></h2>
                <form action="" method="post">
                    <input type="text" style="display:none;"  name = "id"value= <?php echo $r['Id']; ?>>
                    <button type="submit" class="bookbtn" name ="submit">Book Now</button>
                </form>
            </div>
        </div>
    <?php }?>
    
</div>
</div>
</body>
</html>