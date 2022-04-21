
<?php 
include('connection.php') ;
session_start();

if (!isset($_SESSION['Username'])) {
    echo "not logged in";
}
if (isset($_POST['submit'])){
    $date = $_POST['date'];
    $time = $_POST['time'];
    echo $_POST['date'];
    echo $_POST['time'];
    //$_SESSION['username'] = $username;
    $sql = "INSERT INTO rides2 (Source, Destination,Fare, Createrid, Status,Date,Time) VALUES ('Jalandhar', 'Delhi', '3000', '3', 'Available','$date', '$time')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.css">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " .  "</h1>"; ?>
    <a href="logout.php">Logout</a>
    <form action="" method="post">
        <input type="date" name="date" id="date">
        <input type="time" name="time" id="">
        <button name="submit">Submit</button>
    </form>
</body>
</html>