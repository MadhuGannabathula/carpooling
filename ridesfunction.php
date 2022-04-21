<?php 
include('connection.php') ;
$source = $_SESSION['source'];
$destination = $_SESSION['destination'];
$id = $_SESSION['id'];
$sql = "SELECT * FROM rides2 WHERE Source='$source' AND Destination ='$destination' and Status = 'Available' and Createrid != $id;";
$result = mysqli_query($conn, $sql);
?>