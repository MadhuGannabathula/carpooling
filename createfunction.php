<?php
$id = $_SESSION['id'];
if(isset($_POST['submit'])){

    $source=$_POST['Source'];
	$destination = $_POST['Destination'];
	$fare = $_POST['Fare'];
    $date = $_POST['Date'];
    $time = $_POST['Time'];

    $sql = "INSERT INTO rides2 (Source, Destination, Fare, Createrid, Date, Time) VALUES ('$source', '$destination', '$fare', '$id' , '$date' , '$time');";
    if ($conn->query($sql) === TRUE) {
        header("Location: userrides.php");
    }
}



?>