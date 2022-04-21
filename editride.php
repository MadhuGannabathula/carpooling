<?php include('checklog.php'); 

$rideid = $_SESSION['rideid'];
$sql = "SELECT * FROM rides2 WHERE Id = $rideid;";

$result = mysqli_query($conn, $sql);
$r = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
	echo "finally";
	$source = $_POST['Source'];
	$destination = $_POST['Destination'];
	$fare = $_POST['Fare'];
	$time = $_POST['Time'];
	$date = $_POST['Date'];
	$sql = "UPDATE rides2 SET Source = '$source', Destination = '$destination', Fare = '$fare' , Date= '$date' , Time = '$time'  WHERE id = $rideid;";
    if($conn->query($sql) === TRUE){
        echo  $rideid;
        header("Location: userrides.php");
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Ride</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Edit Ride</h2>
	</div>
	
	<form method="post" action="">

		<div class="input-group">
			<label>Enter Source</label>
			<input type="text" name="Source" value="<?php echo $r['Source'] ;?>">
		</div>
		<div class="input-group">
			<label>Destination</label>
			<input type="text" name="Destination" value = "<?php echo $r['Destination'] ;?>">
		</div>
		<div class="input-group">
			<label>Fare</label>
			<input type="number" name="Fare" value = "<?php echo $r['Fare'] ;?>">
		</div>
		<div class="input-group">
			<label>Date</label>
			<input type="date" name="Date" value = "<?php echo $r['Date'] ;?>">
		</div>
        <div class="input-group">
			<label>Start Time</label>
			<input type="time" name="Time" value = "<?php echo $r['Time'] ;?>">
		</div>
		<div class="input-group">
			<button class="btn" name="submit">Edit Ride</button>
		</div>
	</form>
</body>