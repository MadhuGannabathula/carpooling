
<?php include('checklog.php') ;
if($_SESSION['id'] != 1){
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css">
    <title>Carpooling</title>
    <style>
        .menubar{
            overflow: hidden;
            background-color: #333;
        }
        .menubar a{
            float: left;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }
        .menubar a:hover{
            background-color: rgb(1,175,245);
            color: white;
        }
        .menubar a:active{
            background-color: #ddd;
            color: black;
        }
    </style>
</head>
<body>
<div class="menubar">
        <a class="active" href="./admin.php">Dashboard</a>
        <a href="./adminrides.php">Total Rides</a>
        <a href="./adminavailable.php">Available Rides</a>
        <a href="./adminbook.php">Booked Rides</a>
        <a href="./admincancel.php">Cancelled Rides</a>
        <a href="./adminusers.php">Total Users</a>
        <a href="./adminprofile.php?userid=1">Profile</a>
    </div>
</body>
</html>