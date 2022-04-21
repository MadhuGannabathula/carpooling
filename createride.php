<?php include('menuheader.php'); ?>
<?php include('connection.php') ; ?>
<?php include('createfunction.php') ; ?>

<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Create Ride</h2>
	</div>
	
	<form method="post" action="">

		<div class="input-group">
			<label>Enter Source</label>
			<input type="text" name="Source" value="">
		</div>
		<div class="input-group">
			<label>Destination</label>
			<input type="text" name="Destination" value="">
		</div>
		<div class="input-group">
			<label>Fare</label>
			<input type="number" name="Fare">
		</div>
		<div class="input-group">
			<label>Date</label>
			<input type="date" name="Date">
		</div>
        <div class="input-group">
			<label>Start Time</label>
			<input type="time" name="Time">
		</div>
		<div class="input-group">
			<button class="btn" name="submit">Create Ride</button>
		</div>
	</form>
</body>