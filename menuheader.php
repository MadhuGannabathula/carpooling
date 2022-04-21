
<?php include('checklog.php') ; ?>
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
        <a class="active" href="./home.php">Home</a>
        <a href="./userrides.php">My Rides</a>
        <a href="./userbookrides.php">Orders</a>
        <a href="./userprofile.php">Profile</a>
        <a href="./logout.php">Logout</a>
        <a href="./about.php">About</a>
    </div>
</body>
</html>