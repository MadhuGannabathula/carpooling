<?php include('menuheader.php'); ?>
<?php
if(isset($_POST['submit'])){
    $source = $_POST['source'];
    $source = trim($source);
    $destination = $_POST['destination'];
    $destination = trim($destination);
    if($source != "" && $destination != ""){
        $_SESSION['source'] = $source;
        $_SESSION['destination'] = $destination;
        header("Location: test.php");
    }else{
        header("Location: home.php");
    }
} ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #homeup {
            width: 100%;
            height: 550px;
            background-image:url('./images/bg.svg');
            margin: 10px auto;
            align-self: center;
            text-align:centre;
            border-radius: 10px;
            padding-bottom: 50px;
            padding-left: 10px;
            background-size: cover;
        }
        h1{
            width:100%;
            margin:auto;
            color:white;    
            text-align:center;
        }
        .form-inline {
            width:35%;
            margin-left:32%;
            display: flex;
            background-color:white;
            align-self: center;
            flex-flow: row wrap;
            border-radius: 10px;
            align-items: center;
        }
        .form-inline input {
            vertical-align: middle;
            margin: 5px 10px 5px 0;
            padding: 10px;
            margin-right:0;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            background-color: #fff;
            border:none;
            border-right: 1px solid rgb(195, 194, 194);
        }
        .form-inline button {
            padding: 13px 35px;
            margin:0 auto;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            background-color: rgb(1,175,245);
            border: 1px solid rgb(195, 194, 194);
            color: white;
        }
        .form-inline input:focus{
            border:none;
            border-radius: 10px;
            border-bottom: 1px solid rgb(195, 194, 194);
        }
        .container-con{
            length:300px;
            width:100%;
            display: flex;
            align-self: center;
            flex-flow: row wrap;
            background-color:rgb(5, 71, 82);
        }
        .image-wrapper1 {
            width: 40%;
            height: 300px;
            background-image:url('./images/blablacar2.svg');
            margin: 10px auto;
            align-self: center;
            padding-bottom: 50px;
            padding-left: 10px;
            background-size: cover;
        }

        .image-wrapper1 img{
            max-width: 100%;
            max-height: 100%;
            display: block;
            margin-top:40px;
            margin: 0px auto;
        }
        .content-display{
            width: 40%;
            height: 300px;
            margin: 10px auto;
            align-self: center;
            padding-bottom: 50px;
            padding-left: 10px;
        }
        .btn-share {
            padding: 10px 25px;
            margin:0 auto;
            position:relative;
            left:200px;
            border-radius: 10px;
            background-color: rgb(1,175,245);
            border: 1px solid rgb(195, 194, 194);
            color: white;
        }
        #share-btn {
        background-color: rgb(1,175,245);
        color: white;
        padding: 14px 25px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        position:relative;
        left:200px;
        border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="image-wrapper" id="homeup">
        <br>
        <h1>Your pick of rides at low price</h1>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <form class="form-inline"method = "post" action="">
        <input type="text" placeholder="Source" class="btn-inline" name="source">
        <input type="text" placeholder="Destination" class="btn-inline" name="destination">
        <button type="submit" name ="submit">Submit</button>
        </form>
    </div>
    <div class="container-con" style="background-color:white;">
        <div class="image-wrapper1" style="background-image:url('./images/blablacar1.svg');">
        </div>
        <div class="content-display">
            <br><br>
            <h1 style="color:black;" >Driving in your car soon?</h2>
            <br>
            <h4 style="color:rgb(5, 71, 82);">Let's make this your least expensive journey ever.</h4>
            <a href="./createride.php" id="share-btn">Share a ride</a>
        </div>
    </div>
    <div class="container-con">
        <div class="image-wrapper1">
        </div>
        <div class="content-display">
            <br><br>
            <h1>Your safety is our priority</h2>
            <br>
            <h4 style="color:white;">At BlaBlaCar, we're working hard to make our platform as secure as it can be. But when scams do happen, we want you to know exactly how to avoid and report them. Follow our tips to help us keep you safe.</h4>
        </div>
    </div>
</body>
</html>